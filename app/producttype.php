<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    //
     protected $table='type_products';
      public function product()
     {
     	# code...
     	return $this->hasMany('App\product','id_type','id');
     }
}
