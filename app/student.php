<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public function actstudent()
    {
    	return 'holi';
    }

    public function getUrlAttribute()
    {
    	if(substr($this->imagen, 0, 4) === "http")
    	{
    		return $this->imagen;
    	}
    	return '/img/imagenes_estudiantes/' . $this->imagen ;
    }



}
