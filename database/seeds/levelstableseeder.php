<?php

use Illuminate\Database\Seeder;

class levelstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
        	'nivel_educativo' => 'Primaria',
        	'Turno' => 'T.V',
        ]);
        DB::table('levels')->insert([
        	'nivel_educativo' => 'secundaria',
        	'Turno' => 'T.V',
        ]);
        DB::table('levels')->insert([
        	'nivel_educativo' => 'prescolar',
        	'Turno' => 'T.V',
        ]);
        
    }
}
