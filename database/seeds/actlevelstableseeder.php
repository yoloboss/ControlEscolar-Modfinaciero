<?php

use Illuminate\Database\Seeder;

class actlevelstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('act_levels')->insert([
        	'level_id' => 1,
            'grado_id'=> 2,
            'grupo_id'=> 1,
            'turno_id'=> 2,
            'eliminarlogica'=> 'alta',
        ]);
        DB::table('act_levels')->insert([
        	'level_id' => 2,
            'grado_id'=> 3,
            'grupo_id'=> 5,
            'turno_id'=> 2,
            'eliminarlogica'=> 'alta',
        ]);
        DB::table('act_levels')->insert([
        	'level_id' => 3,
            'grado_id'=> 3,
            'grupo_id'=> 3,
            'turno_id'=> 2,
            'eliminarlogica'=> 'alta',
        ]);
        DB::table('act_levels')->insert([
        	'level_id' => 1,
            'grado_id'=> 1,
            'grupo_id'=> 3,
            'turno_id'=> 2,
            'eliminarlogica'=> 'alta',
        ]);
    }
}
