<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Address;
use App\Services\AddressService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\Utils\ResponseService as Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function getCurrentAddress(AddressService $service)
    {
        return is_array($result = $service->getUserAddress(Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success(["address" => $result]);
    }

    /**
     * Mets à jour une donnée par id
     *
     * @param Request $request
     * @param $table
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id = null)
    {
        if (($data = $request->get('data')) === null)
            return Response::error(400);

        if (Auth::user() === null || ($user = User::where('email', Auth::user()->email)->first()) === null)
            return Response::error(403);

        if (isset($data['birthday'])) $data['birthday'] = Carbon::parse($data['birthday']);

        if (($address = Address::where('id', $id)->first()) === null) {
            $address = new Address($data);
            $address->save();
        } else $address->update($data);

        $user->address_id = $address->id;
        $user->save();

        Helpers::log('info', json_encode($user) . $address->id);

        return Response::success();
//        return DB::table('addresses')->where('id', $id)->updateOrInsert($data) ? Response::success() : Response::error(500, "La mise à jour a échoué");

    }

    public function getUserLocation(AddressService $service)
    {
        return is_array($result = $service->getUserLocation(Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }
}
