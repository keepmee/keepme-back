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

    public function store(User $user, $data, $notify = true)
    {
        if ($data === null || $data->comment === null)
            return ReturnServices::badRequest();

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
            if ($notify && ($notifiable = User::whereId($target)->first()) !== null && ($user->email !== $notifiable->email))
                $notifiable->notify(new CommentNotification(
                    $comment,
                    $user,
                    $koop,
                    $targets
                ));
        }

        return Comment::format($comment);
    }

}
