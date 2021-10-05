<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{

public function post(){
   // return $this->hasOne('App\Models\Post');
return $this->hasMany('App\Models\Post','rubric_id');
}


    //use HasFactory;
}
