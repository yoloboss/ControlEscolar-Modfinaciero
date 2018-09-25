<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(gruopstableseeder::class);
        $this->call(gradestableseeder::class);
        $this->call(levelstableseeder::class);
        $this->call(turnstableseeder::class);
        $this->call(actlevelstableseeder::class);
        $this->call(cyclestableseeder::class);
        $this->call(userstableseeder::class);
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
