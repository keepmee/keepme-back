<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\CustomResponse as Response;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
    public function getCurrentChildren()
    {
        if (($user = Auth::user()) === null)
            return Response::error(401);

        if (($user = User::where('email', $user->email)->first()) === null)
            return Response::error(403);

        $children = Children::where('parent_id', $user->id)->get();
        return Response::success(['children' => ($children === null ? json_decode("{}") : $children)]);
    }
}
