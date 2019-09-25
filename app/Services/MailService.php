<?php


namespace App\Services;

use App\Models\Koop;
use App\Models\Nanny;
use App\Models\Parents;
use App\User;
use Illuminate\Mail\Message;
use Illuminate\Notifications\Messages\MailMessage;
use Mail;

class MailService
{
    public function contact($mail)
    {
        $mail->message = "
        <ul>
            <li>Nom : $mail->lastname</li>
            <li>Prénom : $mail->firstname</li>
            <li>Adresse e-mail : $mail->email</li>
            <li>Téléphone : $mail->phone</li>
            <li>Message : $mail->message</li>
        </ul>";

        Mail::send([], [], function (Message $message) use ($mail) {
            $message->to(config('mail.username'));
            $message->subject($mail->subject);
            $message->setBody($mail->message, "text/html");
        });

        return count(Mail::failures()) === 0;
    }

    public static function register($user)
    {

        $link = config("app.url") . "/register/confirm/" . base64_encode(sha1($user->id) . ";|:" . $user->email);

        Mail::send(['html' => 'pages.emails.register'], array("user" => $user, "link" => $link), function (Message $message) use ($user) {
            $message->to($user->email);
            $message->subject("Bienvenue chez KeepMe - Confirmez votre e-mail");
        });

        return count(Mail::failures()) === 0;
    }

    public static function forgot($user, $token)
    {

        $link = config("app.url") . "/password/reset/" . base64_encode($token . ";|:" . $user->email);

        Mail::send(['html' => 'pages.emails.password.forgot'], array("user" => $user, "link" => $link), function (Message $message) use ($user) {
            $message->to($user->email);
            $message->subject("Réinitialisation mot de passe KeepMe");
        });

        return count(Mail::failures()) === 0;
    }

    /**
     * @param $parent
     * @param $nanny
     * @param $koop
     * @return MailMessage
     */
    public static function applied($parent, $nanny, $koop)
    {
        $link = config("app.url") . "/koop/applied/$koop->id/" . base64_encode(sha1($parent->id) . ";|:" . $parent->email);;

        return (new MailMessage)
            ->subject("Nouvelle candidature à votre annonce")
            ->view('pages.emails.koop.applied', array("parent" => $parent, "nanny" => $nanny->user, "koop" => $koop, "link" => $link));

        /*Mail::send(['html' => 'pages.emails.koop.applied'], array("parent" => $parent, "nanny" => $nanny->user, "koop" => $koop, "link" => $link), function (Message $message) use ($parent) {
            $message->to($parent->email);
            $message->subject("Nouvelle candidature à votre annonce");
        });*/

    }

    public function accept(Koop $koop, User $nanny, User $parent)
    {
        $content = $koop->author->lastname . " a accepté votre demande";
        $total = (((int)explode("h", $koop->duration)[0]) + (((int)explode("h", $koop->duration)[1]) === 0 ? 0 : 1)) * $koop->rate;

        Mail::send(['html' => 'pages.emails.koop.accept'], ["koop" => $koop, "nanny" => $nanny, "children" => $koop->enfants, "parent" => $parent, "total" => $total], function (Message $message) use ($content, $nanny) {
            $message->to($nanny->email);
            $message->subject("Nouveau message");
            $message->setBody($content, "text/html");
        });

        return count(Mail::failures()) === 0;
    }

}
