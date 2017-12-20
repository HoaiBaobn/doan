<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
 protected $table="product";
 public function category()
	 {
	 	return $this->belongsto('App\category','cat_id','pro_id');
	 } 
public function tra()
	 {
	 	return $this->belongsto('App\tra','tra_id','pro_id');
	 }
	  public $timestamps = false;
    protected $primaryKey = 'pro_id';
}
