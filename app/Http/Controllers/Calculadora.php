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
        
        switch ($this->getOperador()) {
            case 'soma':
                return $this->valorA + $this->valorB;
                break;
            case 'subtrair':
                return $this->valorA - $this->valorB;
                break;
            case 'dividi':
                if($this->valorB == 0){
                    return 'Não é um numero!';
                }
                return $this->valorA / $this->valorB;
                break;
            case 'multiplica':    
                return $this->valorA * $this->valorB;
                break;
            default;
            break;
        }
    }    
}
