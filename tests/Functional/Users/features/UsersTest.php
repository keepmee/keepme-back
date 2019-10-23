<?php

namespace Tests\Feature\Functional;

use Tests\TestCase;

class UsersTest extends TestCase
{
    public function testGetCurrentUserWithoutLogin()
    {
        $response = $this->call('GET', '/api/users/current');

        $return = $response->baseResponse->original['data']['error'];

        $this->assertEquals('Vous devez être connecté', $return);
        $response->assertStatus(401);
    }

    public function testGetCurrentUser()
    {
        $response = $this->json('GET', '/api/users/current', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_current_user.json', json_encode($return['data']));
        $response->assertStatus(200);
    }

    public function testGetAllUser()
    {
        $response = $this->json('GET', '/api/users', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_all_users.json', json_encode($return['data']));
        $response->assertStatus(200);
    }

    public function testGetUserById()
    {
        $response = $this->json('GET', '/api/users/20', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original;

        $this->assertJsonStringEqualsJsonFile(__DIR__ . '/../results/get_user_by_id.json', json_encode($return['data']['users']));
        $response->assertStatus(200);
    }
}
