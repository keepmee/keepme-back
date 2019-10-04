<?php

use App\Models\Nanny;
use App\User;
use Illuminate\Database\Seeder;

class NanniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($users = User::where('email', 'NOT LIKE', '%etna-alternance.net%')->whereNotNull('birthday')->get()) !== null) {
            foreach ($users as $user)
                \App\Models\Nanny::create([
                    'user_id'     => $user->getAttributeValue('id'),
                    'is_verified' => true
                ]);
        }

        Nanny::create([
            'user_id' => User::whereEmail('dasilv_b@etna-alternance.net')->first()->id
        ]);

        Nanny::create([
            'user_id' => User::whereEmail('elhorm_n@etna-alternance.net')->first()->id
        ]);
    }
}
