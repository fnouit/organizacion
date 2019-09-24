<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Genero::class)->create([
            'genero' => 'SIN ESPECIFICAR',
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'MUJER',
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'HOMBRE',
        ]);
        factory(App\Genero::class)->create([
            'genero' => 'LGTBIQ',
        ]);
    }
}
