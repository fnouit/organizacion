<?php

use Illuminate\Database\Seeder;

class ComitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comite::class)->create([
            'nombre' => 'ACTIVOS',
        ]);
        factory(App\Comite::class)->create([
            'nombre' => 'JUBILADOS',
        ]);
        factory(App\Comite::class)->create([
            'nombre' => 'CENTRO DE TRABAJO',
        ]);
    }
}
