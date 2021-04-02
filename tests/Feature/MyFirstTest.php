<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testeIfRouteReturnstatusCodeOk()
    {
        //testing if route return 200 code
        $response = $this->get('/teste');

        $response->assertStatus(200);
    }
}
