<?php

namespace App\Models;

use App\Services\Utils\LogService;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Message
 *
 * @property int $id
 * @property string $message
 * @property int $user_id L'utilisateur qui a écrit le message
 * @property int $target_id L'utilisateur qui a reçu le message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Message whereUserId($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    protected $fillable = ['message', 'user_id', 'target_id'];
    protected $appends = ['source', 'target', 'mine'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function source()
    {
        return User::whereId($this->user_id)->first();
    }

    public function getSourceAttribute()
    {
        return $this->source();
    }

    public function target()
    {
        return User::whereId($this->target_id)->first();
    }

    public function getTargetAttribute()
    {
        return $this->target()->first();
    }

    public function mine()
    {
        return \Auth::user() ? \Auth::user()->id === $this->user_id : false;
    }

    public function getMineAttribute()
    {
        return $this->mine();
    }
}
