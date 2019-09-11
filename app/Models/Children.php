<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Children
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string|null $birthday
 * @property string|null $notes
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Children whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Children extends Model
{
    protected $fillable = ['lastname', 'firstname', 'birthday', 'notes', 'parent_id'];
}
