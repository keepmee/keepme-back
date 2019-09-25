<?php


namespace App\Services;

use App\Models\Address;
use App\Models\Diploma;
use App\Models\Nanny;
use App\Models\Parents;
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

    public function getUserByNameAndType($lastname, $firstname, $type)
    {
        if (($user = User::whereLastname($lastname)->whereFirstname($firstname)->first()) === null)
            return ReturnServices::notFound();
        if (($type === 'nanny' && ($nanny = Nanny::whereUserId($user->id)->first()) === null) || ($type === 'parent' && ($parent = Parents::whereUserId($user->id)->first()) === null))
            return ReturnServices::badRequest();

        if (isset($nanny) && $nanny !== null && ($diplomas = Diploma::whereNannyId($nanny->id)->whereChecked(true)->count()) !== null)
            $user['diplomas'] = $diplomas;

        $user['address'] = Address::whereId($user->address_id)->first();
        return $user;
    }

}
