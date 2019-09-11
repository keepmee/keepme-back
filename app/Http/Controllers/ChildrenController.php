<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Children;
use App\Models\Parents;
use App\Services\ChildrenService;
use App\Services\Utils\ResponseService as Response;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
    public function store(ChildrenService $service)
    {
        return is_array($result = $service->store(Auth::user(), Helpers::getRequestData(request())))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }

    public function update(ChildrenService $service, $id)
    {
        return is_array($result = $service->update(Auth::user(), Helpers::getRequestData(request()), $id))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }

    public function delete(ChildrenService $service, $id)
    {
        return is_array($result = $service->delete(Auth::user(), $id))
            ? Response::error($result['code'], $result['message'])
            : Response::success($result);
    }

    public function getCurrentChildren()
    {
        if (($user = Auth::user()) === null)
            return Response::error(401);

        if ((($user = User::where('email', $user->email)->first()) === null) || (($user = Parents::whereUserId($user->id)->first()) === null))
            return Response::error(403);

        $children = Children::where('parent_id', $user->id)->get();
        return Response::success(['children' => ($children === null ? json_decode("{}") : $children), 'user' => $user]);
    }
}
