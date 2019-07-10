<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Nanny;
use App\Models\Parents;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\CustomResponse as Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = (object)($request->get('data'));

        Helpers::log('info', json_encode(request()->all()));

        if (($user = User::where('email', strtolower($data->email))->first()) !== null)
            return Response::error(419, "Un compte avec cette adresse mail existe déjà");

        $user = User::create([
            'firstname'  => strtolower($data->firstname),
            'lastname'   => strtolower($data->lastname),
            'email'      => strtolower($data->email),
            'password'   => $data->password,
            'phone'      => $data->phone ?? null,
            'birthday'   => isset($data->birthday) ? Carbon::parse($data->birthday) : null,
            'is_active'  => false,
            'address_id' => null
        ]);

        if ($data->role === 'nurse')
            $tmp = new Nanny(["is_verified" => false, 'user_id' => $user->id]);
        else $tmp = new Parents(['user_id' => $user->id]);

        $tmp->save();

        return $this->respondWithToken(auth()->login($user), ['role' => ($data->role === 'nurse' ? 'nanny' : 'parent'), 'email' => $user->email ?? $data->email]);
    }

    public function login()
    {
        $data = (object)(request()->get('data'));

        $remember = (isset($data->remember) && $data->remember && ((int)$data->remember) === 1 ? true : false);
        if ($remember) {
            if (!$token = auth()->attempt(['email' => $data->email, 'password' => $data->password]))
                return Response::error(401);
        } else if (!$token = auth()->attempt(['email' => $data->email, 'password' => $data->password], true))
            return Response::error(401);

        $role = 'parent';

        if (($user = \App\Models\User::where('email', $data->email)->first()) !== null) {
            if (($role = Nanny::where('user_id', $user->id)->first()) !== null)
                $role = 'nanny';
            else $role = 'parent';
        }

        return $this->respondWithToken($token, ['role' => $role, 'email' => $user->email ?? $data->email], $data->remember ? 86400 : 60);
    }

    public function logout()
    {
        auth()->logout();

        return Response::success(200);
    }

    protected function respondWithToken($token, $data, $expires = null)
    {
        return Response::success(200, [
            'access_token' => $token,
            'token_type'   => 'bearer',
            'user'         => $data,
            'expires_in'   => auth()->factory()->getTTL() * ($expires ?: 60)
        ]);
    }
}