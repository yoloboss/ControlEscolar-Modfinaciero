<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
      public function ActLevel()
    {
    	return $this-> belongsTo(ActLevel::class,'level_id');
    }
}
