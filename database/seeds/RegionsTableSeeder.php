<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN I',
	        'sede' => 'TANTOYUCA',
            'coordinador' => 'PROFR. MANUEL DE LA CRUZ VICENTE',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN II',
	        'sede' => 'TUXPAN',
	        'coordinador' => 'PROFR. DEMETRIO ALEJANDRO HERNÁNDEZ',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN III',
	        'sede' => 'POZA RICA',
	        'coordinador' => 'PROFR. ELI CARLOS CASTILLO PÉREZ',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN IV',
	        'sede' => 'MARTÍNEZ DE LA TORRE',
	        'coordinador' => 'PROFR. LORENZO TUBALCAIN SANGABRIEL CUBAS',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN V',
	        'sede' => 'XALAPA',
	        'coordinador' => 'PROFR. DELFINO MARQUEZ SALINAS',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VI',
	        'sede' => 'VERACRUZ',
	        'coordinador' => 'PROFR. JORGE TORRES VEGA',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VII',
	        'sede' => 'CORDOBA',
	        'coordinador' => 'PROFR. JOSÉ LUIS SALAZAR CORTÉS',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN VIII',
	        'sede' => 'ORIZABA',
	        'coordinador' => 'PROFRA. SUSANA TATUN FLORES ALTAMIRANO',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN IX',
	        'sede' => 'COSAMALOAPAN',
	        'coordinador' => 'PROFR. ARTURO HERNÁNDEZ MARRON',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN X',
	        'sede' => 'SAN ANDRES TUXTLA',
	        'coordinador' => 'PROFRA. RUTH ABURTO MONTALVO',
        ]);
        factory(App\Region::class)->create([
	        'nombre' => 'REGIÓN XI',
	        'sede' => 'MINATITLAN',
	        'coordinador' => 'PROFRA. PERLA MARIA SANTOS VARGAS',
        ]); 
    }
}
