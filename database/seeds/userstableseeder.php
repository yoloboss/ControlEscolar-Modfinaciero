<?php

use Illuminate\Database\Seeder;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        'name'=>'ivan antonio',
        'email'=>'ivandx_94@hotmail.com',
        'password'=>bcrypt('123456')
        ]);
    }
}
