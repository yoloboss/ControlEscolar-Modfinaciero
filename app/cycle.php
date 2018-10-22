<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    public function actcycle()
    {
    	return $this->belongsTo(cycles_actlevs::class,'id', 'cycle_id');
    }
}
