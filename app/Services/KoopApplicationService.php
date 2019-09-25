<?php


namespace App\Services;


use App\Models\Koop;
use App\Models\KoopApplication;
use App\Models\Nanny;
use App\Notifications\KoopApplicationNotification;
use App\Services\Utils\ReturnServices;
use App\User;

class KoopApplicationService
{

    public function apply(User $user, $id)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();
        if (($nanny = Nanny::whereUserId($user->id)->first()) === null)
            return ReturnServices::toArray(403, "Vous devez être une nounou afin de pouvoir postuler");
        if (!$nanny->is_verified)
            return ReturnServices::toArray(403, "Vos diplômes n'ont pas encore été vérifiés");
        $nanny->user = $user;
        if (($koop = Koop::whereId($id)->first()) === null || ($parent = User::whereId($koop->getAttributeValue('user_id'))->first()) === null)
            return ReturnServices::notFound();
        $notifications = collect($parent->notifications);
        /*if ($notifications->filter(function ($notification) use ($parent, $nanny, $koop) {
                return $notification->type === "App\\Notifications\\KoopApplicationNotification"
                    && $notification->data['parent']['id'] === $parent->id
                    && $notification->data['nanny']['id'] === $nanny->id
                    && $notification->data['koop']['id'] === $koop->id;
            })->count() > 0)*/
        if (($koopApplication = KoopApplication::whereNannyId($nanny->id)->whereKoopId($koop->id)->first()) !== null)
            return ReturnServices::badRequest("Vous avez déjà postulé à cette annonce");
        $parent->notify(new KoopApplicationNotification($koop, $nanny));//$parent, $nanny, $koop));
        KoopApplication::create([
            "nanny_id" => $nanny->id,
            "koop_id"  => $koop->id
        ]);
        return $parent->notifications;
    }

    public function applied($token, $koopId)
    {
        $decoded = explode(";|:", base64_decode($token));

        $userId = $decoded[0] ?? null;
        $email = $decoded[1] ?? null;

        if (($user = User::whereEmail($email)->first()) === null || $userId !== sha1($user->getAttributeValue('id')) || ($koop = Koop::whereId($koopId)->first()) === null)
            return ReturnServices::notFound();
        return true;
    }

}
