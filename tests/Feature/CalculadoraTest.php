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
    public function testAttributesOfCalculadoraClass()
    {
        $this->assertClassHasAttribute('valorA', Calculadora::class);
        $this->assertClassHasAttribute('valorB', Calculadora::class);
        $this->assertClassHasAttribute('operador', Calculadora::class);
        $this->assertClassHasAttribute('resultado', Calculadora::class);
    }


    public function testVerifiedIfClassHasMethods(){

        //Testando se a class tem um metodo especifico, usando uma função do Php
        $this->assertTrue(method_exists(Calculadora::class,'getValorA'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getValorB'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getOperador'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getResultado'), 'getValorA is missing in Calculadora Class');

    }
}
