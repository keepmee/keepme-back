<?php


namespace App\Services;

use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;
use Carbon\Carbon;

class UserService
{

    public function update(User $user, $data, $id)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        LogService::info($user->id . " - " . $id);

        if (((int)$user->id) !== ((int)$id))
            return ReturnServices::forbidden();

        if (($user = User::whereId($id)->first()) === null)
            return ReturnServices::notFound();


        LogService::info(json_encode($data));

        return $user->update([
            'firstname'  => mb_strtolower($data->firstname),
            'lastname'   => mb_strtolower($data->lastname),
            'email'      => mb_strtolower($data->email),
            'phone'      => $data->phone ?? null,
            'birthday'   => isset($data->birthday) ? Carbon::parse($data->birthday) : null,
            'is_active'  => $data->is_active,
            'address_id' => $data->address_id
        ]);
    }

}
