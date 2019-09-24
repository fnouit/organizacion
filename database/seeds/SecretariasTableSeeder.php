<?php

use Illuminate\Database\Seeder;

class SecretariasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA GENERAL',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE ORGANIZACIÓN',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE TRABAJO Y CONFLICTOS',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE FINANZAS',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE PREVISIÓN Y ASISTENCIA SOCIAL',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE ESCALAFÓN Y PROMOCIÓN',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE ORIENTACIÓN IDEOLÓGICA SINDICAL',
            'comite_id' => 1,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA GENERAL',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE ORGANIZACIÓN',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE FINANZAS',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE PREVISIÓN Y ASISTENCIA SOCIAL',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE ORIENTACIÓN IDEOLÓGICA SINDICAL',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE CULTURA Y RECREACIÓN',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'SECRETARÍA DE VINCULACIÓN Y PROGRAMAS PRODUCTIVOS',
            'comite_id' => 2,
        ]);
        factory(App\Secretaria::class)->create([
            'cartera' => 'REPRESENTANTE SINDICAL DE CENTRO DE TRABAJO',
            'comite_id' => 3,
        ]);
    }
}