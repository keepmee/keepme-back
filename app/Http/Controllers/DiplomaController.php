<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Services\DiplomaService;
use App\Services\Utils\ResponseService as Response;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class DiplomaController extends Controller
{
    public function mine(DiplomaService $service)
    {
        return is_array($result = $service->mine(Auth::user()))
            ? Response::error($result['code'], $result['message'])
            : Response::success(["diplomas" => $result]);
    }

    public function store(DiplomaService $service)
    {
        return is_array($result = $service->store(Auth::user(), request()->file('file')))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }
}
