<?php

namespace App\Http\Controllers\Auth;

use App\Helpers;
use App\Http\Controllers\AuthController;
use App\Services\Auth\PasswordService;
use App\Services\LoginService;
use App\Services\Utils\ResponseService as Response;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PasswordController extends AuthController
{
    public function forgot(PasswordService $service)
    {
        if (($data = Helpers::getRequestData(request())) === null)
            return Response::error(400);
        if (is_array($result = $service->forgot($data->email)))
            return Response::error($result['code'], $result['message']);
        return Response::success($result);
    }

    public function reset(PasswordService $service)
    {
        if (($data = Helpers::getRequestData(request())) === null)
            return Response::error(400);
        if (is_array($result = $service->reset($data->email, $data->password)))
            return Response::error($result['code'], $result['message']);
        return $this->respondWithToken((new LoginService())->login($data->email, $data->password));
    }

    public function verifyToken(PasswordService $service, $token)
    {
        return is_array($result = $service->verifyToken($token))
            ? Response::error($result['code'], $result['message'])
            : (($email = $service->verifyToken($token))
                ? RedirectResponse::create(config('api.url.authorized') . "/#/password/reset/" . base64_encode($email))
                : Response::error(404));
    }

    public function update(PasswordService $service, $id)
    {
        return is_array($result = $service->update(Auth::user(), Helpers::getRequestData(request())))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }
}
