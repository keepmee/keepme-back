<?php

namespace App\Models;

use App\Helpers;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Nanny
 *
 * @property int $id
 * @property string|null $description
 * @property int $is_verified
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nanny whereUserId($value)
 * @mixin \Eloquent
 */
class Nanny extends Model
{
    protected $fillable = ['description', 'user_id', 'is_verified'];

    public static function formatAll($nannies, $options = null)
    {
        if ($nannies !== null) {
            foreach ($nannies as $index => $nanny) {
                $nannies[$index] = self::format($nanny, $options);
            }
            $nannies = json_decode(json_encode($nannies), true);
            usort($nannies, function ($a, $b) {
                return $a['distance'] > $b['distance'];
            });
        }
        return $nannies;
    }

    public static function format($nanny, $options = null)
    {
        if ($nanny !== null) {
            $nannyUser = User::whereId($nanny->user_id)->first();
            $nannyUser['address'] = Address::whereId($nannyUser->address_id)->first();
            $nanny['user'] = $nannyUser;
            if ($options !== null) {
                if ($options['user'] !== null) {
                    if ($options['distance'])
                        $nanny['distance'] = Helpers::distanceBetweenAddresses(Address::whereId($options['user']->address_id)->first(), Address::whereId($nannyUser->address_id)->first());
                }
                if ($options['koops']) {
                    $nanny['koops'] = Koop::whereNannyId($nanny->id)->get();
                }
            }
        }
        return $nanny;
    }
}
