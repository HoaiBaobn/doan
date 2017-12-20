<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tra extends Model
{
 protected $table="trademark";
 
	  public $timestamps = false;
    protected $primaryKey = 'tra_id';
}
