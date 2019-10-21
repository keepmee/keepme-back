<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        if (($parents = \App\Models\Parents::all()) !== null) {
            foreach ($parents as $parent) {
                if (random_int(0, 3) <= 2) {
                    $nb = $faker->numberBetween(1, 3);
                    for ($i = 0; $i < $nb; $i++)
                        \App\Models\Children::create([
                            "firstname"  => mb_strtolower(\App\Services\utils\TemporaryService::replaceUtf8Char(utf8_encode($faker->firstName))),
                            "lastname"   => \App\User::whereId($parent->getAttributeValue('user_id'))->first()->lastname,
                            "birthday"   => \App\Services\utils\TemporaryService::generateBirthday(2010, 2018)->format('Y-m-d'),
                            "parent_id"  => $parent->getAttributeValue('id'),
                            "created_at" => \App\Services\utils\TemporaryService::generateCreated(),
                        ]);
                }
            }
        }
    }
}
