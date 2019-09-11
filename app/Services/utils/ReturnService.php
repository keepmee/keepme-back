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

    public static function unauthorized()
    {
        return self::toArray(401, "Vous devez être connecté pour accéder aux informations");
    }

    public static function forbidden()
    {
        return self::toArray(403, "Vous n'avez pas les droits pour effecuter cette opération");
    }

    public static function badRequest($message = null)
    {
        return self::toArray(400, $message ?? "Merci de bien vouloir remplir les informations");
    }

    public static function notFound()
    {
        return self::toArray(404, "La page demandée n'existe pas");
    }

    public static function toArray($code, $message = null)
    {
        return [
            "code"    => $code,
            "message" => $message
        ];
    }

}
