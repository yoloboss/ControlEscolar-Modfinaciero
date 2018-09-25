<?php

use Illuminate\Database\Seeder;

class cyclestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
        	'ciclo' => '2018-2019',
            'status'=> 'activo',
        ]);
        DB::table('cycles')->insert([
        	'ciclo' => '2017-2018',
            'status'=> 'inactivo',
        ]);
    }
}
