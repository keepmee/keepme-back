<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = (object)($request->get('data'));

        if (($user = User::where('email', strtolower($data->email))->first()) !== null)
            return Helpers::error(419, "Un compte avec cette adresse mail existe déjà");

        $user = User::create([
            'firstname' => strtolower($data->firstname),
            'lastname'  => strtolower($data->lastname),
            'email'     => strtolower($data->email),
            'password'  => $data->password,
            'role'      => ($data->role === 'nurse' ? 'N' : 'P'),
            'birthday'  => $data->birthday ?? null
        ]);

        return $this->respondWithToken(auth()->login($user));
    }

    public function login()
    {
        $data = (object)(request()->get('data'));

        if (!$token = auth()->attempt(['email' => $data->email, 'password' => $data->password]))
            return Helpers::error(401);
        return $this->respondWithToken($token, $data->remember ? 86400 : 60);
    }

    public function logout()
    {
        auth()->logout();

        return Helpers::success(200);
    }

    protected function respondWithToken($token, $expires = null)
    {
        return Helpers::success(200, [
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * ($expires ?: 60)
        ]);
    }
}