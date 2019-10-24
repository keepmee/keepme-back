<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Diploma
 *
 * @property int $id
 * @property string $name
 * @property string $expires
 * @property int $nanny_id
 * @property string $path
 * @property int $checked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereNannyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Diploma whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Diploma extends Model
{
    protected $fillable = ["name", "nanny_id", "path", "expires"];
}
