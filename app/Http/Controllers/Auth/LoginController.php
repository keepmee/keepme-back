<?php

namespace App\Http\Controllers\Auth;

use App\Helpers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Services\LoginService;
use App\Services\Utils\ResponseService as Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Services\Utils\LogService as Log;

class LoginController extends AuthController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function login(LoginService $service)
    {
        Log::info("Tentative de connexion");

        if (($data = Helpers::getRequestData(request())) === null)
            return Response::error(401, "Veuillez renseigner vos informations");

        Log::info("Identifiants de connexion : " . $data->email ?? null);
        if (($token = $service->login($data->email ?? null, $data->password ?? null, $data->remember ?? false)) === null)
            return Response::error(401);

        Log::info("Vérification d'un erreur potentielle");
        if (is_array($token) && isset($token['code']) && $token['code'] > 400)
            return Response::error($token['code'], $token['message']);

        Log::info($data->email . " est connecté");

        return $this->respondWithToken($token);
    }
}
