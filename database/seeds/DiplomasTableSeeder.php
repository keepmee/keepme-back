<?php

use Illuminate\Database\Seeder;

class DiplomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (\App\Models\Nanny::all() as $nanny)
            \App\Models\Diploma::create([
                "name"     => "Diplome",
                "nanny_id" => $nanny->id,
                "path"     => "/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg",
                "expires"  => \Carbon\Carbon::now(),
                "checked"  => true
            ]);
    }
}
