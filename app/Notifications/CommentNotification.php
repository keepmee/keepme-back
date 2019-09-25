<?php

namespace App\Notifications;

use App\Helpers;
use App\Models\Comment;
use App\Models\Koop;
use App\Models\Nanny;
use App\Services\MailService;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CommentNotification extends Notification
{

    use Queueable;

    private $details;

    /**
     * Create a new notification instance.
     *
     * @param Comment $comment
     * @param User $writer
     * @param User $main
     * @param Koop $koop
     * @param array $targets
     */
    public function __construct(Comment $comment, User $writer, Koop $koop, array $targets)
    {
        $koop = Koop::format($koop);
        $this->details = Helpers::toObject([
                "users"   => Helpers::toObject(["writer" => $writer, "main" => $koop['author']]),
                "comment" => Comment::format($comment),
                "koop"    => $koop,
                "targets" => $targets,
            ]
        );
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return new MailMessage();
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'users'   => $this->details->users,
            'comment' => $this->details->comment,
            'koop'    => $this->details->koop,
            'targets' => $this->details->targets,
        ];
    }
}
