<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
    //
     protected $table='bill_detail';
     public function product()
     {
     	# code...
     	return $this->belongsTo('App\product','id_product','id');
     }
      public function bill()
     {
     	# code...
     	return $this->belongsTo('App\bill','id_bill','id');
     }
}
