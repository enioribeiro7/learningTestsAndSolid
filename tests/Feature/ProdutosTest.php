<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdutosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


/*     public function testDataBase(){

        $this->assertDatabaseHas('produtos', [
            'id' => 1
        ]);

    } */

/*     public function getConnection()
    {   
        $pdo = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=applicationTestDb;user=postgres;password=admin");
        return $this->createDefaultDBConnection($pdo, 'applicationTestDb');
    }

    public function getDataSet(){

        return $this->createXMLDataSet('tests/produtos.xml');
    }

    public function testProductList(){
        $conn = $this->getConnection()->getConnection();
        $query = $conn->query('SELECT * FROM produtos');
        $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

        $this->assertCount(2, $produtos);
    } */
}

