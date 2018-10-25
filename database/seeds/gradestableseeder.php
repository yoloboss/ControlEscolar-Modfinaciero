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
        	'grado' => 1,
        ]);

        DB::table('grades')->insert([
        	'grado' => 2,
        ]);
        DB::table('grades')->insert([
        	'grado' => 3,
        ]);
  
        DB::table('grades')->insert([
        	'grado' => 4,
        ]);
        DB::table('grades')->insert([
        	'grado' => 5,
        ]);
        DB::table('grades')->insert([
        	'grado' => 6,
            
        ]);
    }
}
