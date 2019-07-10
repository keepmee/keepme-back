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
            "number"       => "7",
            "number_2"     => null,
            "street_type"  => "rue",
            "street_name"  => "maurice grandcoing",
            "place_called" => null,
            "zipcode"      => "94200",
            "country"      => "france",
            "city"         => "ivry-sur-seine",
            "latitude"     => "48.814040899999995",
            "longitude"    => "2.3925461",
        ]);
    }
}
