<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use App\Services\Utils\ResponseService as Response;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function all(NotificationService $service)
    {
        return Response::unknown($service->all(\Auth::user()));
    }

    public function limit(NotificationService $service)
    {
        return Response::unknown($service->limit(\Auth::user()));
    }

    public function read(NotificationService $service)
    {
        return Response::unknown($service->read(\Auth::user()));
    }

    public function unread(NotificationService $service, $type)
    {
        return Response::unknown($service->unread(\Auth::user(), $type));
    }

    public function accept(NotificationService $service, $id)
    {
        return Response::unknown($service->accept(\Auth::user(), $id));
    }

    public function deny(NotificationService $service, $id)
    {
        return Response::unknown($service->deny(\Auth::user(), $id));
    }
}
