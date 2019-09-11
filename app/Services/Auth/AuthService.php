<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 27/06/2019
 * Time: 15:36
 */

namespace App\Services\Auth;


use App\Helpers;
use App\Models\Nanny;
use App\Services\Utils\ResponseService as Response;
use App\Services\Utils\ReturnServices;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AuthService
{

    public static function logged()
    {
        return !(Helpers::getCurrentUser() === null);
    }

    public static function nannied()
    {
        return self::logged() ? !(($user = User::whereEmail(Helpers::getCurrentUser()->email)->first()) === null || ($nanny = Nanny::whereUserId($user->id)->first()) === null) : false;
    }

    /**
     * @param $email
     * @return User|Builder|Model|object
     */
    public function loadUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * User not exists
     *
     * @return array
     */
    public function notExists()
    {
        return ReturnServices::toArray(401, "Le nom d'utilisateur ou l'adresse mail n'existe pas");
    }

    /**
     * Wrong password
     *
     * @return array
     */
    public function wrongPassword()
    {
        return ReturnServices::toArray(401, "Le mot de passe est incorrect");
    }

    /**
     * Account is not active
     *
     * @return array
     */
    public function notActive()
    {
        return ReturnServices::toArray(403, "Votre compte n'est pas encore actif. Merci de bien vouloir valider votre adresse e-mail.");
    }

    /**
     * Unauthorized
     *
     * @return array
     */
    public function unauthorized()
    {
        return ReturnServices::toArray(403, "Vous n'êtes pas autorisé à accéder à ce service.");
    }

    /**
     * Generate token
     *
     * @param User $user
     * @param string $password
     * @param bool $remember
     * @return array
     */
    public function generateToken(User $user, string $password, $remember = false)
    {
        if ($user === null)
            return $this->notExists();

        $claims = [
            'user' => [
                'id'    => $user->getAttributeValue('id'),
                'email' => $user->getAttributeValue('email'),
                'role'  => $user->getRole(),
            ]
        ];

        return auth()->claims($claims)->setTtl($this->getTTL($remember))->attempt(["email" => $user->getAttributeValue('email'), "password" => $password]);
    }

    public function getTTL($remember = false)
    {
        return $remember ? 525600 : 1440;
    }
}
