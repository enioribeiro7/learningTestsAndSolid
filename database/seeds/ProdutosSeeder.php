<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'titulo' => 'Curso de Php',
            'descricao' => 'Curso Completo',
            'valor' => 45.90,
        ]);
    }
}    