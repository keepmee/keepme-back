<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Http\CustomResponse as Response;
use App\Models\Children;
use App\Models\Address;
use App\Models\Koop;
use App\Models\Nanny;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth; //use this library

class PostController extends Controller
{
    public function store(Request $request)
    {
        $data = Helpers::getRequestData($request);

        Helpers::log("info", json_encode($data));

        $children = [];

        /*if ($data->children && $data->children !== null)
            foreach ($data->children as $child) {
                if (($tmp = Children::where('id', $child)->first()) !== null)
                    $children[] = $tmp->id;
            }*/

        $user = auth('api')->user();
//        return CustomResponse::success(200, json_encode(auth('api')->user()));
//        Helpers::log("info", json_encode($user));
//        exit();
//        if (($address = Address::where('')->first()) !== null)
        $obj = [
            "title"       => $data->title ?? '',
            "description" => $data->description ?? '',
            "note"        => $data->note ?? 0,
            "start"       => Carbon::parse($data->start),
            "end"         => Carbon::parse($data->end),
            "rate"        => $data->rate ?? 0,
            "recurrent"   => $data->recurrent ?? false,
            "children"    => json_encode($children),
            "user_id"     => Auth::user()->id ?? '',
            "address_id"  => 1,
//                "address_id"  => $address->id,
        ];
        $koop = new Koop($obj);

        return $koop->save() ? Response::success() : Response::error();

    }

    public function getAllMine()
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
    }

    public function findAll($all = true)
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

    }

    public function findAllAvailable()
    {
        return $this->findAll(false);

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


