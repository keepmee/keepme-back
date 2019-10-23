<?php

namespace Tests\Feature\Unit;

use App\Models\Address;
use Tests\TestCase;

class AddressTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateAddressAndEdit()
    {
        $address = new Address([
            "address_line1" => '6 Rue Victor Hugo',
            "address_line2" => 'NULL',
            "postcode" => '59187',
            "country" => 'FR',
            "city" => 'Dechy',
            "latitude" => '50.3549826',
            "longitude" => '3.1252909'
        ]);

        // GETTERS
        $this->assertEquals($address->address_line1, '6 Rue Victor Hugo');
        $this->assertEquals($address->address_line2, 'NULL');
        $this->assertEquals($address->postcode, '59187');
        $this->assertEquals($address->country, 'FR');
        $this->assertEquals($address->city, 'Dechy');
        $this->assertEquals($address->latitude, '50.3549826');
        $this->assertEquals($address->longitude, '3.1252909');

        //SETTERS
        $address->address_line1 = '8 Rue Victor Hugo';
        $address->address_line2 = '12 Rue Victor Hugo';
        $address->postcode = '93600';
        $address->country = 'EN';
        $address->city = 'Londres';
        $address->latitude = '172.3549826';
        $address->longitude = '4.98345';


        $this->assertEquals($address->address_line1, '8 Rue Victor Hugo');
        $this->assertEquals($address->address_line2, '12 Rue Victor Hugo');
        $this->assertEquals($address->postcode, '93600');
        $this->assertEquals($address->country, 'EN');
        $this->assertEquals($address->city, 'Londres');
        $this->assertEquals($address->latitude, '172.3549826');
        $this->assertEquals($address->longitude, '4.98345');

    }
}
