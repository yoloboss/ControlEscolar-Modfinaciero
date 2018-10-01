<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public function ActLevel()
    {
    	return $this-> belongsTo(ActLevel::class,'level_id');
    }

    public function getUrlAttribute()
    {
    	if(substr($this->imagen, 0, 4) === "http")
    	{
    		return $this->imagen;
    	}
    	return '/img/imagenes_estudiantes/' . $this->imagen ;
    }

    public function OrdenarNivel($estudiante,$nivel_educativo,$grado,$grupo)
    {
        if(empty($estudiante))
        {
            $idestudiante = '';
        }else
        {
            $idestudiante = 's.nombre LIKE :estudiante';
        }

        if($nivel_educativo)
        {
            $idnivel = '';
        }else
        {
            $idnivel = 'n.id = :nivel_educativo';
        }

        if(empty($grado))
        {
            $idgrado = '';
        }else
        {
            $idgrado = 'g.id = :grado';
        }

        if(empty($grupo))
        {
            $idgrupo = '';
        }else
        {
            $idgrupo = 'gr.id = :grupo';
        }

        return $this->db->select('SELECT s.id,apellido_P,apellido_M,nombre,grado,grupo,telefono,Telefono_p,Telefono_m,baja FROM students s,act_levels a,levels n,grades g,groups gr WHERE '.$estudiante.$nivel_activo.$nivel_educativo.$grado.$grupo );

       /* $this->where('nivel_educativo','=', $level)->get();*/
    }

}
