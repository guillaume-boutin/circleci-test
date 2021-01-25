<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ExampleUnitTest extends TestCase
{
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        $user = new User([
            'name' => "Test User",
            'email' => "test@mail.com",
            'password' => bcrypt("testpassword")
        ]);

        $this->assertEquals('Test User', $user->name);
    }
}
