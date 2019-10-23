<?php

namespace Tests\Feature\Functional;

use Tests\TestCase;

class ChildrenTest extends TestCase
{
    public function testGetCurrentChildren()
    {
        $response = $this->json('GET', '/api/children/current', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_current_children.json', json_encode($return['data']));

        $response->assertStatus(200);
    }

    public function testAddChildren()
    {
        $response = $this->json('POST', '/api/children', [
           'data' => [
                'lastname'  => 'AYAD',
                'firstname' => 'Samir',
                'birthday'  => '2019-03-06',
                'notes'     => null
           ]
        ], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/create_children.json', json_encode($return['data']));

        $response->assertStatus(200);

        echo json_encode($response);die;
    }
}
