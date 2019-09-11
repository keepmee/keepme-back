<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\MailService;
use Illuminate\Http\Request;

use App\Services\Utils\ResponseService as Response;

class MailController extends Controller
{
    public function contact(Request $request, MailService $service)
    {
        return Response::success($service->contact(Helpers::getRequestData($request)));
    }
}
