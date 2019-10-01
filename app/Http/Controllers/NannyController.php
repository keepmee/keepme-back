<?php

namespace App\Http\Controllers;

use App\Services\NannyService;
use App\Services\Utils\ResponseService as Response;
use Illuminate\Http\Request;

class NannyController extends Controller
{
    public function all(NannyService $service)
    {
        return Response::unknown($service->all(\Auth::user()));
    }
}
