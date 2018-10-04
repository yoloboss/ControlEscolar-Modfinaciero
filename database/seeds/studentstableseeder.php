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
        	'nombre' =>'ramon',
            'apellido_P' =>'don',
            'apellido_M' =>'don',
            'genero' =>'Masculino',
          	'fecha_nacimineto' =>'1945-08-15',
            'estado' =>'b.s.c',
            'Nacionalidad' =>'Mexicana',
            'telefono' =>'6121668649',
         	'direccion' =>'vencindad del chavo',
            'colonia' =>'sr. barriga',
            'c_p' =>'123',
            'numre_casa' =>'13121',
            'nombre_p'=>'quien',
            'apellidos_P' =>'sabe',
            'direccion_p'=>'cccc',
            'Telefono_p'=>'61212121212',
            'nombre_m'=>'ramon',
            'direccion_m' =>'ramon',
            'apellidos_m' =>'ramon',
            'Telefono_m' =>'6123568945',
            'imagen' =>'null',
            'baja' =>'Alta',
        ]);
    }
}
