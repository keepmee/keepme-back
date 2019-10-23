<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Services\Utils\ResponseService as Response;

class ApiController extends Controller
{

    private $namespace = "App\\Models\\";

    /**
     * Vérifie si la table existe
     *
     * @param $table
     * @return bool
     */
    private function models_exists($table)
    {
        return Str::plural($table, 1) === 'users' ? class_exists("App\\" . 'User') : class_exists($this->namespace . Str::plural($table, 1));
    }


    /**
     * Récupère toutes les données de la table
     *
     * @param $table
     * @return \Illuminate\Http\JsonResponse
     */
    public function findAll($table)
    {
        if ($table !== "users") {
            if (($table = Str::plural($table)) && $this->models_exists(Str::singular($table)))
                return Response::success(200, [$table => DB::table(strtolower($table))->select('*')->get()]);
        } else {
            if (($table = Str::plural($table)) || $this->models_exists(Str::singular($table)))
                return Response::success(200, [$table => DB::table(strtolower($table))->select('*')->get()]);
        }

        return Response::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }


    /**
     * Récupère une donnée en fonction d'un champ
     *
     * @param $table
     * @param $field
     * @param $value
     * @return \Illuminate\Http\JsonResponse
     */
    public function findOneBy($table, $field, $value)
    {
        if (($table = Str::plural($table)) && $this->models_exists($table))
            return Response::success(200, [$table => DB::table($table)->select('*')->where($field, $value)->first()]);
        return Response::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }


    /**
     * Récupère une donnée par id
     *
     * @param $table
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function findOneById($table, $id)
    {
        return $this->findOneBy($table, "id", $id);
    }


    /**
     * Enregistre une donnée
     *
     * @param Request $request
     * @param $table
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $table)
    {
        if (($table = Str::plural($table, 1)) && $this->models_exists($table)) {
            if (($data = $request->get('data')) === null)
                return Response::error(400);
            $class = $this->namespace . $table;
            $object = new $class($request->get('data'));
            return $object->save() ? Response::success(201) : Response::error(500, "L'insertion a échoué");
        }

        return Response::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }


    /**
     * Mets à jour une donnée par id
     *
     * @param Request $request
     * @param $table
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $table, $id)
    {
        if (($table = Str::plural($table)) && $this->models_exists(Str::singular($table))) {
            if (($data = $request->get('data')) === null)
                return Response::error(400);
            if (($object = DB::table($table)->select('*')->where("id", $id)->first()) === null)
                return Response::error(404);
            return is_int(DB::table($table)->select('*')->where("id", $id)->update($data)) ? Response::success() : Response::error(500, "La mise à jour a échoué");
        }

        return Response::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }


    /**
     * Supprime une donnée par id
     *
     * @param $table
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($table, $id)
    {
        if (($table = Str::plural($table)) && $this->models_exists($table)) {
            if (($object = DB::table($table)->select('*')->where("id", $id)->first()) === null)
                return Response::error(404);
            return $object->delete() ? Response::success() : Response::error(500, "La suppression a échoué");
        }

        return Response::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }
}
