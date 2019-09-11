<?php


namespace App\Services\Auth;

use App\Models\Nanny;
use App\Models\Parents;
use App\Services\MailService;
use App\Services\Utils\ReturnServices;
use App\User;
use Carbon\Carbon;
use DB;

class RegisterService extends AuthService
{
    public function register($data)
    {
        if ($data->email === null || $data->password === null)
            return null;

        if (($user = User::where("email", $data->email)->first()) === null)
            $user = User::create([
                'firstname'  => mb_strtolower($data->firstname),
                'lastname'   => mb_strtolower($data->lastname),
                'email'      => mb_strtolower($data->email),
                'password'   => $data->password,
                'phone'      => $data->phone ?? null,
                'birthday'   => isset($data->birthday) ? Carbon::parse($data->birthday) : null,
                'is_active'  => false,
                'address_id' => null
            ]);

        if ($data->role === 'nanny')
            $role = new Nanny(["is_verified" => false, 'user_id' => $user->id]);
        else $role = new Parents(['user_id' => $user->id]);

        $role->save();

        MailService::register($user);

        return $this->generateToken($user, $data->password, true);
    }

    public function confirm($key)
    {
        $decodeKey = explode(";|:", base64_decode($key));

        $id = $decodeKey[0] ?? null;
        $email = $decodeKey[1] ?? null;

        if (($user = User::whereEmail($email)->first()) === null || $id !== sha1($user->getAttributeValue('id')))
            return ReturnServices::notFound();

        $user->setAttribute('is_active', true);

        return $user->save();
    }

}
