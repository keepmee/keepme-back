<?php

namespace App\Models;

use App\Services\Utils\LogService;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comment
 *
 * @property int $id
 * @property string $content
 * @property string|null $title
 * @property int $is_valid
 * @property int $user_id
 * @property int $koop_id
 * @property mixed|null $targets
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereIsValid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereKoopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereTargets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUserId($value)
 * @mixin \Eloquent
 */
class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'koop_id', 'targets', 'is_valid'];

    public static function findByKoopId($koopId)
    {
        return self::formatAll(Comment::whereKoopId($koopId)->get());
    }

    public static function formatAll($comments)
    {
        if ($comments !== null)
            foreach ($comments as $index => $comment)
                $comments[$index] = self::format($comment);
        return $comments;
    }

    public static function format(Comment $comment)
    {
        if ($comment === null)
            return null;
        if (($user = User::whereId($comment->user_id)->first()) !== null)
            $comment['author'] = $user;
        if (($koop = Koop::whereId($comment->koop_id)->first()) !== null)
            $comment['koop'] = $koop;

        return $comment;
    }
}
