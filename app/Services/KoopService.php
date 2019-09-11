<?php


namespace App\Services;


use App\Models\Address;
use App\Models\Children;
use App\Models\Koop;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;
use Carbon\Carbon;

class KoopService
{

    public function store($user, $data)
    {
        if ($data === null)
            return ReturnServices::badRequest();

        if (!isset($data->children) || $data->children === null || count($data->children) === 0)
            return ReturnServices::badRequest("Veuillez sélectionner au moins 1 enfant");

        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        if (($address = Address::whereId($user->address_id)->first()) === null)
            $addressId = 1;
        else $addressId = $address->id;

        $children = [];
        foreach ($data->children as $child) {
            if (($tmp = Children::whereParentId($user->id)->whereId($child)->first()) !== null)
                $children[] = $tmp->id;
        }

        return Koop::create([
            "title"       => $data->title ?? '',
            "description" => $data->description ?? '',
            "note"        => $data->note ?? 0,
            "start"       => Carbon::parse($data->start)->timezone("Europe/Paris"),
            "end"         => Carbon::parse($data->end)->timezone("Europe/Paris"),
            "rate"        => $data->rate ?? 0,
            "recurrent"   => $data->recurrent ?? false,
            "children"    => json_encode($children),
            "user_id"     => $user->id,
            "address_id"  => $addressId,
        ]);
    }


    public function findAllAvailable(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $this->formatKoops(Koop::whereNannyId(null)->where('end', '>=', \DB::raw('NOW()'))->get());
    }

    public function findAllMine(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $this->formatKoops(Koop::whereUserId($user->id)
            ->orderByDesc('end')
//            ->orderByDesc('created_at')
            ->get()
        );
    }

    public function formatKoops($koops)
    {
        if ($koops !== null)
            foreach ($koops as $index => $koop) {
                if (($address = Address::where('id', $koop->getAttributeValue('address_id'))->first()) !== null)
                    $koops[$index]->location = ['lat' => ((double)$address->latitude), 'lng' => ((double)$address->longitude)];
                if (($user = User::where('id', $koop->getAttributeValue('user_id'))->first()) !== null) {
                    $koops[$index]->author = $user;
                    unset($koops[$index]->author->password);
                }
                if (($address = Address::whereId($koop->getAttributeValue('address_id'))->first()) !== null)
                    $koops[$index]->address = $address;
                $children = json_decode($koop->children);
                foreach ($children as $idx => $child) {
                    if (($tmp = Children::whereId($child)->first()) !== null)
                        $children[$idx] = $tmp;
                }
                $koops[$index]->enfants = $children;
            }
        return $koops;
    }

}
