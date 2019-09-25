<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 27/06/2019
 * Time: 15:43
 */

namespace App\Services\Utils;


class ReturnServices
{

    public static function unauthorized($message = null)
    {
        return self::toArray(401, $message ?? "Vous devez être connecté pour accéder aux informations");
    }

    public static function forbidden($message = null)
    {
        return self::toArray(403, $message ?? "Vous n'avez pas les droits pour effecuter cette opération");
    }

    public static function badRequest($message = null)
    {
        return self::toArray(400, $message ?? "Merci de bien vouloir remplir les informations");
    }

    public static function notFound($message = null)
    {
        return self::toArray(404, $message ?? "La page demandée n'existe pas");
    }

    public static function toArray($code, $message = null, $error = true)
    {
        return [
            "code"    => $code,
            "message" => $message,
            "error"   => $error
        ];
    }

}
