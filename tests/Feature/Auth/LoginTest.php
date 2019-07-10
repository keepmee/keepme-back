<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginSuccess()
    {

        $response = $this->call('POST', '/api/login', [
            'data' => [
                'email'    => 'test@test.fr',
                'password' => sha1('test'),
                'remember' => false
            ]
        ]);

        $response->assertSuccessful();
    }

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

        $response->assertStatus(401);
    }



}
