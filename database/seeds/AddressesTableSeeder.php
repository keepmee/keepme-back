<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Address::create([
            "address_line1" => "7 rue maurice grandcoing",
            "postcode"      => "94200",
            "city"          => "ivry-sur-seine",
            "latitude"      => "48.814040899999995",
            "longitude"     => "2.3925461",
        ]);
    }
}
