<?php

use App\Models\Comment;
use App\Models\Koop;
use App\Services\CommentService;
use App\User;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param CommentService $service
     * @return void
     */
    public function run(CommentService $service)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $koop = Koop::whereId($faker->numberBetween(1, Koop::count() - 1))->first();
            $koop['author'] = User::whereId($koop->user_id)->first();

            $service->store(User::whereId($faker->numberBetween(1, User::count() - 1))->first(), \App\Helpers::toObject([
                'koop'    => $koop,
                'comment' => $faker->realText(200)
            ]), false);
        }


    }
}
