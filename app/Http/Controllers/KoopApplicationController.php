<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\KoopApplicationService;
use App\Services\Utils\ResponseService as Response;

use Illuminate\Http\RedirectResponse;

class KoopApplicationController extends Controller
{
    public function apply(KoopApplicationService $service, $id)
    {
        return is_array($result = $service->apply(\Auth::user(), $id))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }

    public function applied(KoopApplicationService $service, $id, $token)
    {
        if (is_array($result = $service->applied($token, $id)))
            return Response::error($result['code'], $result['message']);
        return RedirectResponse::create(config('api.url.authorized') . "/#/account/profile/notifications");
    }
}
