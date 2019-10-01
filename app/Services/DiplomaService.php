<?php


namespace App\Services;


use App\Helpers;
use App\Models\Diploma;
use App\Models\Nanny;
use App\Services\Auth\AuthService;
use App\Services\Utils\LogService;
use App\Services\Utils\ReturnServices;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class DiplomaService
{

    public function mine(User $user)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        if (!AuthService::nannied() || ($nanny = Nanny::whereUserId($user->id)->first()) === null)
            return ReturnServices::forbidden();

        return $this->format(Diploma::whereNannyId($nanny->id)->get());
    }

    public function store(User $user, UploadedFile $file)
    {
        if ($user === null || ($user = User::whereEmail($user->email)->first()) === null)
            return ReturnServices::unauthorized();

        if (!AuthService::nannied() || ($nanny = Nanny::whereUserId($user->id)->first()) === null)
            return ReturnServices::forbidden();

        $diploma = new Diploma([
            "name"     => $file->getClientOriginalName(),
            "nanny_id" => $nanny->id,
            "path"     => "",
            "expires"  => Carbon::now()
        ]);

        $diploma->save();

        $path = storage_path() . "/diplomas/" . Helpers::createUserName();
        $filename = base64_encode($file->getClientOriginalName() . $diploma->id) . "." . $file->getClientOriginalExtension();
        $diploma->update(["path" => "$path/$filename"]);
        $file->move($path, $filename);
        $nanny->update(['is_verified' => true]); // To delete when admin interface
        return $diploma;
    }

    public function format($diplomas)
    {
        if ($diplomas === null || count($diplomas) === 0)
            return null;
        foreach ($diplomas as $index => $diploma)
            if (trim($diploma->path) !== '' && \File::exists($diploma->path)) {
                if (trim($diploma->path) !== '' && \File::exists($diploma->path) && \File::isFile($diploma->path)) {
                    $diplomas[$index]->image = "data:" . \File::mimeType($diploma->path) . ";base64," . base64_encode(file_get_contents($diploma->path));
                    $diplomas[$index]->type = strpos(\File::mimeType($diploma->path), "image") === false
                        ? strpos(\File::mimeType($diploma->path), "pdf") === false ? null : "pdf"
                        : "image";
                }
            }
        return $diplomas;
    }

}
