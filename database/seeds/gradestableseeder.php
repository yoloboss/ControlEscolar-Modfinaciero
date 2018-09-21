<?php

use Illuminate\Database\Seeder;

class gradestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
        	'grado' => '1ER',
        ]);

        DB::table('grades')->insert([
        	'grado' => '2DO',
        ]);
        DB::table('grades')->insert([
        	'grado' => '3ER',
        ]);
  
        DB::table('grades')->insert([
        	'grado' => '4TO',
        ]);
        DB::table('grades')->insert([
        	'grado' => '5TO',
        ]);
        DB::table('grades')->insert([
        	'grado' => '6T0',
            
        ]);
    }
}
