<?php

use Illuminate\Database\Seeder;

class turnstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turns')->insert([
        	'Turno' => 'T.V',
        ]);
        DB::table('turns')->insert([
        	'Turno' => 'T.M',
        ]);
    }
}
