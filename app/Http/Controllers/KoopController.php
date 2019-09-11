<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\KoopService;
use \App\Services\Utils\ResponseService as Response;
use App\Models\Children;
use App\Models\Address;
use App\Models\Koop;
use App\Models\Nanny;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth; //use this library

class KoopController extends Controller
{
    public function store(KoopService $service)
    {
        return is_array($result = $service->store(Auth::user(), Helpers::getRequestData(request())))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);

    }

    /*public function getAllMine()
    {
        if (Auth::user() === null || ($koops = Koop::where('user_id', Auth::user()->id)->get()) === null)
            return Response::success();
        else {
            foreach ($koops as $index => $koop) {
                if (($address = Address::where('id', $koop->getAttributeValue('address_id'))->first()) !== null)
                    $koops[$index]->location = ['lat' => ((double)$address->latitude), 'lng' => ((double)$address->longitude)];
                if (($user = User::where('id', $koop->getAttributeValue('user_id'))->first()) !== null) {
                    $koops[$index]->author = $user;
                    unset($koops[$index]->author->password);
                }
            }
        }
        return Response::success(200, ['koops' => $koops]);
    }*/

    /*public function findAll($all = true)
    {
        if (($koops = ($all ? Koop::all() : Koop::where('nanny_id', null)->get())) === null)
            return Response::success();
        else {
            foreach ($koops as $index => $koop) {
                if (($address = Address::where('id', $koop->getAttributeValue('address_id'))->first()) !== null)
                    $koops[$index]->location = ['lat' => ((double)$address->latitude), 'lng' => ((double)$address->longitude)];
                if (($user = User::where('id', $koop->getAttributeValue('user_id'))->first()) !== null) {
                    $koops[$index]->author = $user;
                    unset($koops[$index]->author->password);
                }
            }
        }

        return Response::success(200, ['koops' => $koops]);

    }*/

    public function findAllMine(KoopService $service)
    {
        return is_array($result = $service->findAllMine(\Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success(['koops' => $result]);
    }

    public function findAllAvailable(KoopService $service)
    {
        return is_array($result = $service->findAllAvailable(\Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success(['koops' => $result]);
    }

    public function apply(Request $request, $id)
    {

        if (($koop = Koop::where('id', $id)->first()) === null)
            return Response::success();

        Helpers::log('info', json_encode(auth('api')->user()));

        if (($nanny = Nanny::where('user_id', auth('api')->user()->id)->first()) === null)
            return Response::error(403, "Vous devez être une nounou pour pouvoir postuler");

        $koop->update(["nanny_id" => $nanny->id]);
        return Response::success();
    }
}


