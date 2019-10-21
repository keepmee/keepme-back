<?php

use App\Models\Koop;
use App\Models\Parents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KoopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $titles = ["Recherche baby-sitter", "Recherche nounou", "Garde d'enfants", "Je souhaite faire garder mes enfants", "Baby-sitter"];
        $max = 25;
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < $max; $i++) {
            if (($parent = Parents::whereId(random_int(1, Parents::count() - 1))->first()) !== null && count(($children = \App\Models\Children::whereParentId($parent->id)->pluck('id')->toArray())) > 0) {
                if (($user = \App\User::whereId($parent->user_id)->first()) !== null) {
                    $start = $faker->dateTimeBetween('2019-09-01', '2019-12-31')->format('Y-m-d H:i:s');
                    Koop::create([
                        "title"       => $titles[random_int(0, count($titles) - 1)],
                        "description" => $faker->realText($faker->numberBetween(200, 1000), $faker->numberBetween(1, 3)),
                        "note"        => '',
                        "start"       => $start,
                        "end"         => Carbon::parse($start)->addHours(random_int(1, 4)),
                        "rate"        => random_int(8, 14),
                        "children"    => json_encode($children),
                        "user_id"     => $user->id,
                        "nanny_id"    => $faker->numberBetween(0, 3) <= 2 ? null : \App\Models\Nanny::whereId($faker->numberBetween(1, \App\Models\Nanny::count() - 1))->first()->id, // random nanny id or null
                        "address_id"  => $user->address_id,// user address_id
                        'created_at'  => \App\Services\utils\TemporaryService::generateCreated()
                    ]);
                }
            }
        }
    }
}
