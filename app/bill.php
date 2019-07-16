<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
     protected $table='bills';

      public function billdetail()
     {
     	# code...
     	return $this->hasMany('App\billdeatil','id_bill','id');
     }
     public function customer()
     {
     	# code...
     	return $this->belongsTo('App\customer','id_customer','id');
     }
     
}
