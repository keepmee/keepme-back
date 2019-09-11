<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Parents
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Parents whereUserId($value)
 * @mixin \Eloquent
 */
class Parents extends Model
{
    protected $fillable = ['user_id'];
}
