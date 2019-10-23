<?php

namespace Tests\Feature\Functional;


use Tests\TestCase;

class AddressesTest extends TestCase
{
    public function testGetCurrentAddress()
    {
        $response = $this->json('GET', '/api/addresses/current', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_current_address.json', json_encode($return['data']));

        $response->assertStatus(200);
    }

    public function testGetCurrentAddressLocation()
    {
        $response = $this->json('GET', '/api/address/current/location', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_location.json', json_encode($return['data']));

        $response->assertStatus(200);
    }
}
