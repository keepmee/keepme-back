<?php


namespace App\Services;


use App\Models\Address;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;

class AddressService
{

    public function getLocation($id = null)
    {
        return Address::where('id', $id)->first(['latitude', 'longitude']);
    }

    public function getUserAddress(User $user)
    {
        return $user === null || (($user = User::whereEmail($user->email)->first()) === null) ? ReturnServices::unauthorized() : Address::whereId($user->getAttributeValue('address_id'))->first();
    }

    public function getUserLocation(User $user)
    {
        LogService::info(json_encode($user));
        return $user === null || (($user = User::whereEmail($user->email)->first()) === null) ? ReturnServices::unauthorized() : $this->getLocation($user->getAttributeValue('address_id'));
    }

}
