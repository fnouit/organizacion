<?php

use Illuminate\Database\Seeder;

class NivelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nivel::class)->create([
            'nivel_educativo' => 'PRIMARIA',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'PREESCOLAR',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'NIVELES ESPECIALES',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'SECUNDARIA',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'TELESECUNDARIA',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'BACHILLERATO',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'TELEBACHILLERATO',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'UPV',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'NORMALES',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'ADMINISTRATIVOS',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'PERSONAL DE APOYO',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'EDUCACIÓN ESPECIAL',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'EDUCACIÓN FÍSICA',
        ]);
        factory(App\Nivel::class)->create([
            'nivel_educativo' => 'JUBILADOS',
        ]);
        factory(App\Nivel::class)->create([
	        'nivel_educativo' => 'OTRO',
        ]);
    }
}
