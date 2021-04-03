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

    /** 
    * @depends testAttributesOfCalculadoraClass
    */

    public function testVerifiedIfClassHasMethods(){

        //Testando se a class tem um metodo especifico, usando uma função do Php
        $this->assertTrue(method_exists(Calculadora::class,'getValorA'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getValorB'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getOperador'), 'getValorA is missing in Calculadora Class');

        $this->assertTrue(method_exists(Calculadora::class,'getResultado'), 'getValorA is missing in Calculadora Class');

    }

    /** 
    * @depends testAttributesOfCalculadoraClass
    */
    public function testIfExistContructorMethod(){

        //Verifica se metodo construtor existe na classe
        $this->assertTrue(method_exists(Calculadora::class,'__construct'), '__contruct is missing in Calculadora Class');
    }

    /** 
    * @depends testAttributesOfCalculadoraClass
    */
    public function testAttributesOfContructMethod(){

        //Verifica se o contruct esta atribuindo valores
        $calc = new Calculadora(2,3,'soma');
        $this->assertEquals(2, $calc->getValorA(), 'Error in getValorA Method');
        $this->assertEquals(3, $calc->getValorB(), 'Error in getValorB Method'); 
        $this->assertEquals('soma', $calc->getOperador(), 'Error in getOperador Method'); 
        
    }
    
    /** 
    * @depends testAttributesOfCalculadoraClass
    */    
    public function testAccessAttributesPrivate(){

        //varifica se consigo acessar os atributos privados
        $calc = new Calculadora(2,3,'soma');
        $this->assertFalse(isset($calc->valorA), 'Attribute valorA should be private!');
        $this->assertFalse(isset($calc->valorB), 'Attribute valorB should be private!');
        $this->assertFalse(isset($calc->operador), 'Attribute operador should be private!');
    }
    
    
    /** 
     * @depends testAttributesOfContructMethod
     */
    public function testGetResultadoMethod(){
        $calc = new Calculadora(4,2,"soma");
        $this->assertEquals(6, $calc->getResultado(), "Erro in getResultado method");
        
        $calc = new Calculadora(6,3,"subtrair");
        $this->assertEquals(3, $calc->getResultado(), "Erro in getResultado method");

        $calc = new Calculadora(6,3,"dividi");
        $this->assertEquals(2, $calc->getResultado(), "Erro in getResultado method");
        
        $calc = new Calculadora(2,3,"dividi");
        $this->assertEquals(2/3, $calc->getResultado(), "Erro in getResultado method");

        $calc = new Calculadora(4,0,"dividi");
        $this->assertEquals('Não é um numero!', $calc->getResultado(), "Erro in getResultado method");

        $calc = new Calculadora(6,3,"multiplica");
        $this->assertEquals(18, $calc->getResultado(), "Erro in getResultado method"); 

    }
}
