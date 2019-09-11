<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 27/06/2019
 * Time: 15:30
 */

namespace App\Services;

use App\Services\Auth\AuthService;

/**
 * Class LoginService
 */
class LoginService extends AuthService
{

    /**
     * @param string $email
     * @param string $password
     * @param bool $remember
     * @return array|null|string
     */
    public function login(string $email, string $password, bool $remember = false)
    {
        if ($email === null || $password === null)
            return null;

        if (($user = $this->loadUserByEmail($email)) === null)
            return $this->notExists();

        if (!auth()->validate(["email" => $email, "password" => $password]))
            return $this->wrongPassword();

        if (!$user->isActive())
            return $this->notActive();

        return $this->generateToken($user, $password, $remember);
    }

}
