<?php


namespace App\Services;


use App\Models\Nanny;
use App\User;

class NannyService
{

    public function all(User $user)
    {
        return Nanny::formatAll(Nanny::all(), ['user' => User::whereId($user->id)->first(), 'distance' => true, 'koops' => true]);
    }

}
