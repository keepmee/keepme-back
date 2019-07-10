<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Address;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\CustomResponse as Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function getCurrentAddress()
    {
        if (($user = Auth::user()) === null)
            return Response::error(401);

        if (($user = User::where('email', $user->email)->first()) === null)
            return Response::error(403);

        if ($user->address_id === null)
            return Response::success(['address' => json_decode("{}")]);

        $address = Address::where('id', $user->address_id)->first();
        return Response::success(['address' => ($address === null ? json_decode("{}") : $address)]);
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
}
