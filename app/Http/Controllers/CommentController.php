<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\Utils\ResponseService as Response;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentService $service)
    {
        return Response::unknown($service->store(\Auth::user(), Helpers::getRequestData(\request())));
    }
}
