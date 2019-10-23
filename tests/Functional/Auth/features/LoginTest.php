<?php

namespace Tests\Feature\Functional;

use Tests\TestCase;

class Logintest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginFailed()
    {

        $response = $this->call('POST', '/api/login', [
            'data' => [
                'email'    => 'test@test.fr',
                'password' => sha1('test2'),
                'remember' => false
            ]
        ]);

        $this->assertJsonStringEqualsJsonFile(
            __DIR__ . "/../results/login/login_failed.json",
            json_encode($response->baseResponse->original)
        );

        $response->assertStatus(401);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->call('POST', '/api/login', [
            'data' => [
                'email'    => 'ayad_y@etna-alternance.net',
                'password' => sha1('toto'),
                'remember' => false
            ]
        ]);

        $this->assertJsonStringEqualsJsonFile(
            __DIR__ . "/../results/login/login_success.json",
            json_encode($response->baseResponse->original['data']['user'])
        );

        $response->assertStatus(200);

        $this->token = $response->baseResponse->original['data']['token']['content'];
    }

    public function testLogged()
    {
        $response = $this->json('GET', '/api/logged', [], ['Authorization' => 'Bearer ' . $this->token]);

        $return = $response->baseResponse->original['data'];

        $this->assertTrue($return['logged']);
        $response->assertStatus(200);
    }
}
