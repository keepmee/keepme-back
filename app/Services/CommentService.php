<?php


namespace App\Services;


use App\Models\Comment;
use App\Models\Koop;
use App\Notifications\CommentNotification;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;
use Illuminate\Notifications\Notification;

class CommentService
{

    public function store(User $user, $data)
    {
        if ($data === null || $data->comment === null)
            return ReturnServices::badRequest();

//        return [$data->koop->author->id, $user->id];

        if (($tmp = Comment::whereKoopId($data->koop->id)->latest()->first()) === null)
            $targets = $user->id !== $data->koop->author->id ? [$user->id, $data->koop->author->id] : [$user->id];
        else {
            $targets = $tmp->targets === null ? [] : json_decode($tmp->targets);
            if (!in_array($user->id, $targets))
                array_push($targets, $user->id);
        }

        $comment = Comment::create([
            'content'  => $data->comment,
            'user_id'  => $user->id,
            'koop_id'  => $data->koop->id,
            'is_valid' => true,
            'targets'  => json_encode($targets)
        ]);

        $koop = Koop::whereId($data->koop->id)->first();
        foreach ($targets as $target) {
            if (($notifiable = User::whereId($target)->first()) !== null && ($user->email !== $notifiable->email))
                $notifiable->notify(new CommentNotification(
                    $comment,
                    $user,
                    $koop,
                    $targets
                ));
        }

        return Comment::format($comment);
    }

    /*public function format($comment)
    {
        if ($comment === null)
            return null;
        if (($user = User::whereId($comment->user_id)->first()) !== null)
            $comment['author'] = $user;
        if (($koop = Koop::whereId($comment->koop_id)->first()) !== null)
            $comment['koop'] = $koop;
    }*/

}
