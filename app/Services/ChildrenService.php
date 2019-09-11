<?php


namespace App\Services;


use App\Models\Children;
use App\Models\Parents;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;

class ChildrenService
{

    public function store(User $user, $data)
    {
        if (is_array(($parent = $this->getParent($user, $data))))
            return $parent;

        return Children::create([
            "lastname"  => mb_strtolower($data->lastname ?? null),
            "firstname" => mb_strtolower($data->firstname ?? null),
            "birthday"  => $data->birthday ?? null,
            "notes"     => $data->notes ?? null,
            "parent_id" => $parent->id
        ]);
    }

    public function update(User $user, $data, $id)
    {
        if (is_array(($parent = $this->getParent($user, $data))))
            return $parent;

        if (($child = Children::whereId($id)->first()) === null)
            return ReturnServices::notFound();

        return $child->update([
            "lastname"  => mb_strtolower($data->lastname ?? null),
            "firstname" => mb_strtolower($data->firstname ?? null),
            "birthday"  => $data->birthday ?? null,
            "notes"     => $data->notes ?? null,
            "parent_id" => $parent->id
        ]);
    }

    public function delete(User $user, $id)
    {
        if (is_array(($parent = $this->getParent($user, null, false))))
            return $parent;

        if (($child = Children::whereId($id)->first()) === null)
            return ReturnServices::notFound();

        try {
            return $child->delete();
        } catch (\Exception $e) {
            return true;
        }
    }

    public function getParent(User $user, $data = null, $checkData = true)
    {
        LogService::info($checkData);
        if ($data === null && $checkData === true)
            return ReturnServices::badRequest();

        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        if (($parent = Parents::whereUserId($user->id)->first()) === null)
            return ReturnServices::forbidden();

        return $parent;
    }

}
