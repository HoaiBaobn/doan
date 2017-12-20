<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="category";
   /* public function par_cat()
    {
    	return $this->hasMany('App\par_cat','cat_id','parents_cat_id')
    }*/
}
