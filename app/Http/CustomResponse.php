<?php
/**
 * Created by PhpStorm.
 * User: sofianeakbly
 * Date: 25/04/2019
 * Time: 14:31
 */

namespace App\Http;

use Illuminate\Http\Response;

class CustomResponse
{

    /**
     * @var array $statusTexts Tableau de message en cas de statut personnalisé
     */
    private static $statusTexts = array(
        "496" => "Request need HTTPS"
    );


    /**
     * Cette fonction permet d'envoyer une réponse
     * au client après une requête
     *
     * Return response to client
     *
     * @param int $status Statut de la réponse
     * @param mixed $data Données à envoyer avec la réponse
     * @return \Illuminate\Http\JsonResponse
     */
    public static function response($status = 200, $data = null)
    {
        return response()->json([
            "status" => $status,
            "data"   => $data
        ])->setStatusCode($status, isset(Response::$statusTexts[$status]) ? Response::$statusTexts[$status] : (isset(self::$statusTexts[$status]) ? self::$statusTexts[$status] : ''));
    }


    /**
     * Cette fonction permet d'envoyer une success réponse
     * au client après une requête
     *
     * Return response to client
     *
     * @param int $status Statut de la réponse
     * @param mixed $data Données à envoyer avec la réponse
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($status = 200, $data = null)
    {
        return is_int($status) ? self::response($status, $data) : self::response(200, $status);
    }


    /**
     * Cette fonction permet d'envoyer une success réponse
     * au client après une requête
     *
     * Return response to client
     *
     * @param int $status Statut de la réponse
     * @param mixed $data Données à envoyer avec la réponse
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($status = 500, $data = null)
    {
        if ($status === 400)
            return self::response($status, ["error" => $data ?: "La requête est mal formée"]);
        if ($status === 401)
            return self::response($status, ["error" => $data ?: "Vous devez être connecté"]);
        if ($status === 403)
            return self::response($status, ["error" => $data ?: "Vous n'avez pas les droits"]);
        if ($status === 404)
            return self::response($status, ["error" => $data ?: "La ressource demandée n'existe pas"]);
        if ($status === 405)
            return self::response($status, ["error" => $data ?: "La ressource demandée n'existe pas"]);
        return self::response($status, ["error" => $data ?: "Une erreur inconnue est survenue"]);
    }

}