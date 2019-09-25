<?php

namespace App\Services;

use App\Models\Koop;
use App\Models\Nanny;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;

class NotificationService
{

    public function all(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $this->formatAll($user->notifications->values());
    }

    public function limit(User $user, $limit = 8)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
//        return $this->formatAll(array_slice($user->notifications->sortByDesc('created_at')->toArray(), 0, $limit));
        return $this->formatAll($user->notifications->sortByDesc('created_at')->values()->slice(0, $limit), $user);
    }

    public function read(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $this->formatAll($user->notifications->where('read_at', 'NOT', null)->sortByDesc('created_at'), $user);
    }

    public function unread(User $user, $type)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        return $this->formatAll(!($type === null || trim($type) === '')
            ? $user->notifications->where('read_at', null)->where('type', $type === 'apply' ? "App\\Notifications\\KoopApplicationNotification" : "")->sortByDesc('created_at')->values()
            : $user->notifications->where('read_at', null)->sortByDesc('created_at')->values(), $user);
    }

    public function deny(User $user, $id)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        if (($notification = $user->notifications->where('id', $id)->first()) === null)
            return ReturnServices::forbidden();
        $notification->markAsRead();
        return $notification;
    }

    public function accept(User $user, $id)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        if (($notification = $user->notifications->where('id', $id)->first()) === null)
            return ReturnServices::forbidden();

        if (($koop = Koop::whereId($notification->data['koop']['id'])->first()) === null)
            return ReturnServices::notFound();
        $nanny = Nanny::whereId($notification->data['nanny']['id'])->first();

        $koop->update(['nanny_id' => $nanny->id]);
        $notification->markAsRead();

        return (new MailService)->accept(
            (new KoopService)->formatKoop($koop),
            User::whereId($notification->data['nanny']['user']['id'])->first(),
            User::whereId($notification->data['parent']['id'])->first()
        );
    }

    public function formatAll($notifications, $user = null)
    {
        if ($notifications === null)
            return null;
        foreach ($notifications as $index => $notification)
            $notifications[$index] = $this->format($notification, $user);
        return $notifications;
    }

    public function format($notification, User $user = null)
    {
        switch ($notification->type) {
            case "App\\Notifications\\KoopApplicationNotification":
                $notification['custom_type'] = 'apply';
                break;
            case "App\\Notifications\\CommentNotification":
                $notification['custom_type'] = $notification['data']['users']['main']['email'] === $user->email ? 'comment.main' : 'comment.guest';
                break;
            default:
                break;
        }

        /*$notification['custom_type'] =
            $notification->type === "App\\Notifications\\KoopApplicationNotification"
                ? "apply"
                : $notification->type === "App\\Notifications\\CommentNotification"
                ? "comment"
                : null;*/
        return $notification;
    }

}
