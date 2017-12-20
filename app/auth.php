<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
    protected $table="admin";
     public $timestamps = false;
    protected $primaryKey = 'admin_id';
}
