<?php

namespace Tests;

use Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $token;

    public function setUp() : void
    {
        parent::setUp();
        $this->artisan('testing-database');

        $response = $this->call('POST', '/api/login', [
            'data' => [
                'email'    => 'ayad_y@etna-alternance.net',
                'password' => sha1('toto'),
                'remember' => false
            ]
        ]);

        $this->token = $response->baseResponse->original['data']['token']['content'];
    }
}
