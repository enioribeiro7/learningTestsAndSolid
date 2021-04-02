<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Calculadora;

class CalculadoraTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testattributesOfCalculadoraClass()
    {
        $this->assertClassHasAttribute('valorA', Calculadora::class);
    }
}
