<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActLevel extends Model
{
    public function student()
    {
        return $this-> belongsTo(student::class,'student_id');
    }
   	public function grade()
    {
    	return $this-> belongsTo(grade::class,'grado_id');
    }
    public function group()
    {
    	return $this-> belongsTo(group::class,'grupo_id');
    }
    public function level()
    {
    	return $this-> belongsTo(level::class,'level_id');
    }
    public function Turn()
    {
        return $this-> belongsTo(Turn::class,'turno_id');
    }
}
