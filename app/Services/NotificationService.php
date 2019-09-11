<?php


namespace App\Services;


use App\Services\Utils\ReturnServices;
use App\User;

class NotificationService
{

    public function all(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $user->notifications->where('read_at', null);
    }

}
