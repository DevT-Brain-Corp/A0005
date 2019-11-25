<?php

namespace Tests\Feature;

<<<<<<< Updated upstream
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
>>>>>>> Stashed changes

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
