<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 11/03/2019
 * Time: 17:18
 */

namespace App;


use App\Models\Address;
use App\Services\Utils\LogService;
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

    public static function distance($lat1, $lon1, $lat2, $lon2, $unit = "K")
    {
        if (($lat1 === $lat2) && ($lon1 === $lon2))
            return 0;
        $dist = rad2deg(acos(sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($lon1 - $lon2))));
        $kilometers = $dist * 60 * 1.1515 * 1.609344;
        return (float)round((($unit = strtoupper($unit)) === "M" ? ($kilometers * 1000.0) : $kilometers), 2);
    }

    public static function distanceBetweenAddresses(Address $address1, $address2, $unit = "K")
    {
        if ($address1 === null || $address2 === null)
            return 0;
        return self::distance((double)$address1->latitude, (double)$address1->longitude, (double)$address2->latitude, (double)$address2->longitude, $unit);
    }
}
