<?php


namespace App\Services;


use App\Helpers;
use App\Models\Address;
use App\Models\Children;
use App\Models\Comment;
use App\Models\Koop;
use App\Models\KoopApplication;
use App\Models\Nanny;
use App\Models\Parents;
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
        return $this->formatKoops(Koop::whereNannyId(null)->where('end', '>=', \DB::raw('NOW()'))->orderByDesc('created_at')->get());
    }

    public function findAllMine(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();


        if (($parent = Parents::whereUserId($user->id)->first()) === null) {
            if (($koopApplications = KoopApplication::whereNannyId(Nanny::whereUserId($user->id)->first()->id)->get()) === null)
                return null;
            $koops = [];
            foreach ($koopApplications as $koopApplication)
                $koops[] = Koop::whereId($koopApplication->koop_id)->first();
            return $this->formatKoops($koops);
        }


        return $this->formatKoops(Koop::whereUserId($user->id)
            ->orderByDesc('created_at')
            ->orderByDesc('end')
            ->get()
        );
    }

    public function getKoopByAuthorAndId($author, $id)
    {
        if (is_string($author) && (!($firstname = explode(".", $author)[0]) || !($lastname = explode(".", $author)[1])))
            return ReturnServices::badRequest();

        if (($user = User::whereFirstname($firstname)->whereLastname($lastname)->first()) === null || ($koop = Koop::whereId($id)->first()) === null || ($user = User::whereId($koop->user_id)->first()) === null)
            return ReturnServices::notFound([$user, $koop ?? null]);
        return $this->formatKoop($koop);
    }

    public function getKoopsByLocation($latitude, $longitude, $radius)
    {
        if ($latitude === null || $longitude === null || $radius === null)
            return ReturnServices::badRequest();

//        $koops = $this->formatKoops(Koop::whereNannyId(null)->where('end', '>=', \DB::raw('NOW()'))->orderByDesc('created_at')->get(), Helpers::toObject(['latitude' => $latitude, 'longitude' => $longitude]));

        return $this->formatKoops(Koop::whereNannyId(null)->where('end', '>=', \DB::raw('NOW()'))->orderByDesc('created_at')->get(), Helpers::toObject(['latitude' => $latitude, 'longitude' => $longitude, 'radius' => $radius]));
    }

    public function formatKoops($koops, $center = null)
    {
        if ($koops !== null)
            foreach ($koops as $index => $koop) {
                /*if (($address = Address::where('id', $koop->getAttributeValue('address_id'))->first()) !== null)
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
                $koops[$index]->enfants = $children;*/
                $koops[$index] = $this->formatKoop($koop, $center);
                LogService::info(($koops[$index]['distance']));
                if (($radius = ($center && $center->radius ? $center->radius : 10000)) && ((int)$koops[$index]['distance']) > $radius)
                    unset($koops[$index]);
            }
        return $koops;
    }

    public function formatKoop(Koop $koop, $center = null)
    {
        return Koop::format($koop, $center);
        /*if ($koop === null)
            return null;

        if (($address = Address::where('id', $koop->getAttributeValue('address_id'))->first()) !== null) {
            $koop['location'] = ['lat' => ((double)$address->latitude), 'lng' => ((double)$address->longitude)];
            $koop['address'] = $address;
        }
        if (($user = User::where('id', $koop->getAttributeValue('user_id'))->first()) !== null) {
            $koop['author'] = $user;
            unset($koop['author']->password);
        }
        if ($address !== null && ($addressTmp = Address::whereId(\Auth::user()->address_id)->first()) !== null)
            $koop['distance'] = $center === null
                ? Helpers::distance((double)$address->latitude, (double)$address->longitude, (double)$addressTmp->latitude, (double)$addressTmp->longitude)
                : Helpers::distance((double)$center->latitude, (double)$center->longitude, (double)$addressTmp->latitude, (double)$addressTmp->longitude);
        $koop['duration'] = Carbon::parse($koop->end)->diffInHours(Carbon::parse($koop->start)) . "h" . Carbon::parse($koop->end)->diff(Carbon::parse($koop->start))->format("%I");
        $children = json_decode($koop->children);
        foreach ($children as $idx => $child) {
            if (($tmp = Children::whereId($child)->first()) !== null)
                $children[$idx] = $tmp;
        }
        $koop['enfants'] = $children;
        $koop['children'] = $children;

        LogService::debug(json_encode("ntm"));
        $koop['comments'] = Comment::findByKoopId($koop->id);

        return $koop;*/
    }

}
