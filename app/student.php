<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public function level()
    {
    	return $this-> belongsTo(level::class,'level_id');
    }
}
