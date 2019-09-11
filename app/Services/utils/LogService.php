<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 12/06/2019
 * Time: 10:24
 */

namespace App\Services\Utils;

use App\Helpers;
use Carbon\Carbon;


/**
 * Class LogService
 * @package App\Services
 */
class LogService
{

    /**
     * Ecrire un log de debug
     *
     * @param $message
     */
    public static function debug($message)
    {
        self::log('debug', $message);
    }

    /**
     * Ecrire un log d'info
     *
     * @param $message
     */
    public static function info($message)
    {
        self::log('info', $message);
    }

    /**
     * Ecrire un log de notice
     *
     * @param $message
     */
    public static function notice($message)
    {
        self::log('notice', $message);
    }

    /**
     * Ecrire un log de warning
     *
     * @param $message
     */
    public static function warning($message)
    {
        self::log('warning', $message);
    }

    /**
     * Ecrire un log d'erreur
     *
     * @param $message
     */
    public static function error($message)
    {
        self::log('error', $message);
    }

    /**
     * Ecrire un log critique
     *
     * @param $message
     */
    public static function critical($message)
    {
        self::log('critical', $message);
    }

    /**
     * Ecrire un log d'alerte
     *
     * @param $message
     */
    public static function alert($message)
    {
        self::log('alert', $message);
    }

    /**
     * Ecrire un log d'urgence
     *
     * @param $message
     */
    public static function emergency($message)
    {
        self::log('emergency', $message);
    }

    /**
     * Cette fonction est utilisé par tous les fichiers qui en ont besoin
     * et permet d'écrire un message de log
     *
     * @var array $levels Niveaux de log autorisés
     *
     * @param string $level Niveau de log
     * @param string $message Message de log
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
//            if (Helpers::indexOf($levels, $level) > 3)
//                self::logError($level, $message);
            \Illuminate\Support\Facades\Log::$level(
                "Lien : " . url()->full() . "\n\t* Adresse ip : " . \Request::ip() .
                "\n\t* Message : $message\n\t* Heure : " . (Carbon::now('Europe/Paris')->toTimeString()) . "\n" . ""
//                ($user !== false ? "Utilisateur : $user->email\n" : "")
            );
            return true;
        }

        \Illuminate\Support\Facades\Log::error(url()->full() . " - Un mauvais type de niveau a été renseigné ($level) - $message");
        return true;
    }


    /**
     * Ecrire les erreurs dans un fichier différent
     *
     * @param $message
     */
    public static function logError($level, $message)
    {
        file_put_contents(config('app.__dir__') . '/storage/logs/error-' . Carbon::now()->toDateString(), "\nLevel : " . strtoupper($level) . "Message : $message", FILE_APPEND);
    }

}
