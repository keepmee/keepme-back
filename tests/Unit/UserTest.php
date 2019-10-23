<?php

namespace Tests\Feature\Unit;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateUserAndEdit()
    {
        $user = new User([
            'lastname' => 'AYAD',
            'firstname' => 'Yanis',
            'email' => 'ayad_y@etna-alternance.net',
            'password' => 'toto',
            'birthday' => '1996-03-06',
            'phone' => '0101010101',
        ]);

        $this->assertEquals($user->lastname, 'AYAD');
        $this->assertEquals($user->firstname, 'Yanis');
        $this->assertEquals($user->email, 'ayad_y@etna-alternance.net');
        $this->assertEquals($user->birthday, '1996-03-06');
        $this->assertEquals($user->phone, '0101010101');

        $user->lastname = 'AYAD';
        $user->firstname = 'Samir';
        $user->email = 'ayad_s@etna-alternance.net';
        $user->birthday = '1996-03-06';
        $user->phone = '0101010101';

        $this->assertEquals($user->lastname, 'AYAD');
        $this->assertEquals($user->firstname, 'Samir');
        $this->assertEquals($user->email, 'ayad_s@etna-alternance.net');
        $this->assertEquals($user->birthday, '1996-03-06');
        $this->assertEquals($user->phone, '0101010101');
    }
}
