<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycles_actlevs extends Model
{
    public function cycle()
    {
        return $this-> belongsTo(cycle::class,'cycle_id');
    }
   	public function ActLevel()
    {
    	return $this-> belongsTo(ActLevel::class,'actlevel_id');
    }
}
