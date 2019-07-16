<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
     protected $table='customer';
     public function bill()
     {
     	# code...
     	return $this->hasMany('App\bill','id_customer','id');
     }
}
