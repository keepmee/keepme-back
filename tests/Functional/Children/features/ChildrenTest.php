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
}
