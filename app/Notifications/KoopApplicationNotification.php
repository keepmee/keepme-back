<?php

namespace App\Notifications;

use App\Helpers;
use App\Models\Koop;
use App\Models\Nanny;
use App\Models\Parents;
use App\Services\MailService;
use App\Services\Utils\LogService;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class KoopApplicationNotification extends Notification
{

    use Queueable;

    private $details;

    /**
     * Create a new notification instance.
     *
     * @param User $parent
     * @param Nanny $nanny
     * @param Koop $koop
     */
    public function __construct(User $parent, Nanny $nanny, Koop $koop)
    {
        $this->details = Helpers::toObject([
            "parent" => $parent,
            "nanny"  => $nanny,
            "koop"   => $koop
        ]);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return MailService::applied($this->details->parent, $this->details->nanny, $this->details->koop);
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
            'parent' => $this->details->parent,
            'nanny'  => $this->details->nanny,
            'koop'   => $this->details->koop,
        ];
    }
}
