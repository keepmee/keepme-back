<?php


namespace App\Services\Auth;


use App\Services\MailService;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Hashing\BcryptHasher;

class PasswordService
{

    public function forgot($email)
    {
        return $email === null ? ReturnServices::badRequest() : (($user = User::whereEmail($email)->first()) === null ? ReturnServices::notFound() : MailService::forgot($user, app(PasswordBroker::class)->createToken($user)));
    }

    public function reset($email, $password)
    {
        if ($email === null || $password === null)
            return ReturnServices::badRequest();

        if (($user = User::whereEmail($email)->first()) === null)
            return (ReturnServices::notFound());
        else {
            $user->setPasswordAttribute($password);
            return $user->save();
        }

    }

    public function verifyToken($token)
    {
        if ($token === null)
            return ReturnServices::badRequest();

        $decoded = explode(";|:", base64_decode($token));
        $token = $decoded[0] ?? null;

        return ($email = $decoded[1] ?? null) === null
            ? ReturnServices::badRequest()
            : (($user = User::whereEmail($email)->first()) === null
                ? ReturnServices::notFound()
                : app(PasswordBroker::class)->tokenExists($user, $token)
                    ? $user->email
                    : false);
    }

    public function update(User $user, $data)
    {
        if ($data === null)
            return ReturnServices::badRequest();

        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        if (!\Hash::check($data->old, \Auth::user()->getAuthPassword()))
            return ReturnServices::toArray(403, "Le mot de passe actuel est incorrect");

        return $user->update([
            "password" => $data->new
        ]);
    }

}
