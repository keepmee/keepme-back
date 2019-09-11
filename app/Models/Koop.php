<?php

namespace App\Models;

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
}
