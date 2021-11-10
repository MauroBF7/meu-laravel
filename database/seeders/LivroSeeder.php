<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $livro = [
            'titulo' => "Quincas Borba",
            'autor' => "Machado de Assis",
            'isbn' => "97801"
        ];
        Livro::create($livro);
        Livro::factory(150)->create();
    }
}
