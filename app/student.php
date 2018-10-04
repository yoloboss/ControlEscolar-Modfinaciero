<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public function actstudent()
    {
    	return $this->belongsTo(student_actLevel::class,'id', 'student_id');
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
