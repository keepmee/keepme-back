<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 11/03/2019
 * Time: 17:18
 */

namespace App;


use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Helpers
{


    /**
     * Cette fonction est utilisé par tous les fichiers qui en ont besoin
     * et permet d'écrire un message de log
     *
     * @param string $level Niveau de log
     * @param string $message Message de log
     * @return mixed
     * @var array $levels Niveaux de log autorisés
     *
     */
    public static function log($level, $message)
    {
        $levels = [
            "emergency",
            "alert",
            "critical",
            "error",
            "warning",
            "notice",
            "info",
            "debug"
        ];
        if (in_array($level, $levels)) {
//            $user = UniqueAuthServiceProvider::user();
            if (strtolower($level) === 'error')
                self::logError($message);
            return \Illuminate\Support\Facades\Log::$level(
                "Lien : " . url()->full() . " - \nAdresse ip : " . \Request::ip() .
                "\nMessage : $message\nHeure : " . (Carbon::now('Europe/Paris')->toTimeString()) . "\n"
//                ($user !== false ? "Utilisateur : $user->email\n" : "")
            );
        }

        return \Illuminate\Support\Facades\Log::error(url()->full() . " - Un mauvais type de niveau a été renseigné ($level) - $message");
    }

    /**
     * Ecrire les erreurs dans un fichier différent
     *
     * @param $message
     */
    public static function logError($message)
    {
        file_put_contents(config('app.__dir__') . '/storage/logs/error' . Carbon::now()->toDateString(), "\nMessage : $message", FILE_APPEND);
    }

    public static function toObject($array)
    {
        return is_array($array) ? json_decode(json_encode($array)) : null;
    }

    public static function getRequestData(Request $request, $param = 'data')
    {
        return self::toObject($request->get($param)) ?? $request->get($param);
    }

    public static function getCurrentUser()
    {
        return Auth::user();
    }

    public static function createUserName($user = null)
    {
        if ($user === null && Auth::user() === null || ($user = User::whereEmail(($user ?? Auth::user())->email)->first()) === null)
            return null;
        return substr($user->firstname, 0, 1) . trim($user->lastname);
    }
}
