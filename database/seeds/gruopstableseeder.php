<?php

use Illuminate\Database\Seeder;


class gruopstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
        	'grupo' => 'A',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'B',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'C',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'D',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'E',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'F',
        ]);
        DB::table('groups')->insert([
        	'grupo' => 'G',
        ]);
    
    }
}
