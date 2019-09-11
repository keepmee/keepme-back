<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use App\Services\Utils\ResponseService as Response;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function all(NotificationService $service)
    {
        return is_array($result = $service->all(\Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success(['notification' => $result]);
    }
}
