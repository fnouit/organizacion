<?php

use Illuminate\Database\Seeder;

class NomenclaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-I-',
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-II-',
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-III-',
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'D-IV-',
        ]);
        factory(App\Nomenclatura::class)->create([
            'nomenclatura' => 'C.T. ',
        ]); 
    }
}
