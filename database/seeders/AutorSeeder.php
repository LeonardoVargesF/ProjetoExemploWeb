<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Autor::factory(50)->create();
        //para criar manualmente os integrates da minha tabela, não irei usar o factory;
        //Autor::nome("Emanuel")->generate();
        //Autor::email("")->generate();
        //Autor::telefone("")->generate();
        
    }
}
