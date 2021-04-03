<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculadora extends Controller
{
    private $valorA;
    private $valorB;
    private $operador;
    private $resultado;

    public function __construct($valorA, $valorB, $operador){
        $this->valorA = $valorA;
        $this->valorB = $valorB;
        $this->operador = $operador;
    }

    public function getValorA(){

        return $this->valorA;

    }


    public function getValorB(){

        return $this->valorB;
        
    }
    
    public function getOperador(){
        
        return $this->operador;
    }

    public function getResultado(){
        
    }    
}
