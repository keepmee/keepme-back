<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        return class_exists($this->namespace . Str::plural($table, 1));
    }


    /**
     * Récupère toutes les données de la table
     *
     * @param $table
     * @return \Illuminate\Http\JsonResponse
     */
    public function findAll($table)
    {
        if (($table = Str::plural($table)) && $this->models_exists($table))
            return Helpers::success(200, [$table => DB::table($table)->select('*')->get()]);
        return Helpers::error(500, "La table " . $this->namespace . $table . " n'existe pas");
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
            return Helpers::success(200, [$table => DB::table($table)->select('*')->where($field, $value)->first()]);
        return Helpers::error(500, "La table " . $this->namespace . $table . " n'existe pas");
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
                return Helpers::error(400);
            $class = $this->namespace . $table;
            $object = new $class($request->get('data'));
            return $object->save() ? Helpers::success(201) : Helpers::error(500, "L'insertion a échoué");
        }

        return Helpers::error(500, "La table " . $this->namespace . $table . " n'existe pas");
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
        if (($table = Str::plural($table, 1)) && $this->models_exists($table)) {
            if (($data = $request->get('data')) === null)
                return Helpers::error(400);
            if (($object = DB::table($table)->select('*')->where("id", $id)->first()) === null)
                return Helpers::error(404);
            return $object->update($data) ? Helpers::success() : Helpers::error(500, "La mise à jour a échoué");
        }

        return Helpers::error(500, "La table " . $this->namespace . $table . " n'existe pas");
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
        if (($table = Str::plural($table, 1)) && $this->models_exists($table)) {
            if (($object = DB::table($table)->select('*')->where("id", $id)->first()) === null)
                return Helpers::error(404);
            return $object->delete() ? Helpers::success() : Helpers::error(500, "La suppression a échoué");
        }

        return Helpers::error(500, "La table " . $this->namespace . $table . " n'existe pas");
    }
}
