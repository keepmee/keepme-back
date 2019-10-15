<?php

use App\Models\Parents;
use App\User;
use Illuminate\Database\Seeder;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($users = User::where('email', 'NOT LIKE', '%etna-alternance.net%')->whereNull('birthday')->get()) !== null) {
            foreach ($users as $user)
                Parents::create([
                    'user_id' => $user->getAttributeValue('id')
                ]);
        }
        Parents::create([
            'user_id' => User::whereEmail('akbly_s@etna-alternance.net')->first()->id
        ]);

        Parents::create([
            'user_id' => User::whereEmail('ayad_y@etna-alternance.net')->first()->id
        ]);

        Parents::create([
            'user_id' => User::whereEmail('benito_a@etna-alternance.net')->first()->id
        ]);
    }
}
