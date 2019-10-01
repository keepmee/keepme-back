<?php

namespace App\Models;

use App\Helpers;
use App\Services\Utils\LogService;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Koop
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $note
 * @property string $start
 * @property string $end
 * @property float $rate
 * @property int $recurrent
 * @property mixed $children
 * @property int $user_id
 * @property int|null $nanny_id
 * @property int $address_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereChildren($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereNannyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereRecurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Koop whereUserId($value)
 * @mixin \Eloquent
 */
class Koop extends Model
{
    protected $fillable = ["title", "description", "note", "rate", "recurrent", "children", "user_id", "address_id", "start", "end", "nanny_id"];


    public static function formatAll($koops, $center = null)
    {
        if ($koops !== null) {
            foreach ($koops as $index => $koop) {
                $koops[$index] = self::format($koop, $center);
                if (($radius = ($center && $center->radius ? $center->radius : 10000)) && ((int)$koops[$index]['distance']) > $radius)
                    unset($koops[$index]);
            }
            $koops = json_decode(json_encode($koops), true);
            usort($koops, function ($a, $b) {
                return $a['distance'] > $b['distance'];
            });
        }
        return $koops;
    }

    public static function format(Koop $koop, $center = null)
    {
        if ($koop === null)
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
                : Helpers::distance((double)$center->latitude, (double)$center->longitude, (double)$address->latitude, (double)$address->longitude);
        $koop['duration'] = Carbon::parse($koop->end)->diffInHours(Carbon::parse($koop->start)) . "h" . Carbon::parse($koop->end)->diff(Carbon::parse($koop->start))->format("%I");

        $children = is_array($koop->children) ? $koop->children : json_decode($koop->children);
        foreach ($children as $idx => $child) {
            if (($tmp = Children::whereId($child)->first()) !== null)
                $children[$idx] = $tmp;
        }
        $koop['enfants'] = $children;
        $koop['children'] = $children;
        $koop['nanny'] = $koop->nanny_id !== null ? Nanny::whereId($koop->nanny_id)->first() : null;

        $koop['comments'] = Comment::findByKoopId($koop->id);

        return $koop;
    }
}
