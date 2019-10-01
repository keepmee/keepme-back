<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AddressesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(NanniesTableSeeder::class);
        $this->call(ChildrenTableSeeder::class);
        $this->call(KoopsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(DiplomasTableSeeder::class);
    }
}
