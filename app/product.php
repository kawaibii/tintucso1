<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table='products';
    public function producttype()
    {
    	# code...
    	return $this->belongsTo('App\producttype','id_type','id');
    }
    public function billdetail()
    {
    	# code...
    	return $this->hasMany('App\billdetail','id_product','id');
    }
}
