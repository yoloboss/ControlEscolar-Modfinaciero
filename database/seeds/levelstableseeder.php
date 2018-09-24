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
        ]);
        DB::table('levels')->insert([
        	'nivel_educativo' => 'secundaria',
        ]);
        DB::table('levels')->insert([
        	'nivel_educativo' => 'prescolar',
        ]);
        
    }
}
