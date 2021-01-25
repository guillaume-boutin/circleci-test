<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleHttpTest extends TestCase
{
    use WithFaker;

    public function testUserCreationEndpointTest()
    {
        $name = $this->faker->name();
        $email = $this->faker->email();
        $password = "mypassword";

        $response = $this->postJson('/api/user', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ]);

        $response
            ->assertStatus(201)
            ->assertExactJson([
                'message' => "Successfully created user!",
            ]);
    }
}
