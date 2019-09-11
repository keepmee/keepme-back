<?php

namespace App\Models;

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
}
