<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_actLevel extends Model
{
    public function student()
    {
        return $this->belongsTo(student::class);
    }
   	public function act()
    {
    	return $this-> belongsTo(ActLevel::class,'actlevel_id');
    }
}
