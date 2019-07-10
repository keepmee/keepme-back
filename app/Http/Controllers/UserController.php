<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\CustomResponse as Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getCurrentUser(Request $request)
    {
        return Response::success(200, ['user' => Helpers::getCurrentUser()]);
    }

    /**
     * Mets à jour une donnée par id
     *
     * @param Request $request
     * @param $table
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        if (($data = $request->get('data')) === null)
            return Response::error(400);

        if (($user = User::where('id', $id)->first()) === null)
            return Response::error(404);

        if (Auth::user() === null || User::where('email', Auth::user()->email)->first() === null || User::where('email', Auth::user()->email)->first()->id === $id)
            return Response::error(403, "error number 3");

        if (isset($data['birthday'])) $data['birthday'] = Carbon::parse($data['birthday']);

        return $user->update($data) ? Response::success() : Response::error(500, "La mise à jour a échoué");

    }
}
