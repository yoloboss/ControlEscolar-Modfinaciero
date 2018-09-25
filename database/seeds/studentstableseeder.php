<?php

use Illuminate\Database\Seeder;

class studentstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'nombre'
            'apellido_P'
            'apellido_M'
            'genero'
          	'fecha_nacimineto'
            'estado'
            'Nacionalidad'
            'telefono'
         	'direccion'
            'colonia'
            'c_p'
            'numre_casa'
            'nombre_p'
            'apellidos_P'
            'direccion_p'
            'Telefono_p'
            'nombre_m'
            'direccion_m'
            'apellidos_m'
            'Telefono_m'
            'imagen'
            'baja'
            'level_id'
        ]);
    }
}
