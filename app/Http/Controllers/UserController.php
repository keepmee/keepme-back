<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Utils\ResponseService as Response;
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
     * @param UserService $service
     * @param $id
     * @return JsonResponse
     */
    public function update(UserService $service, $id)
    {
        return is_array($result = $service->update(Auth::user(), Helpers::getRequestData(request()), $id))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);

    }
}
