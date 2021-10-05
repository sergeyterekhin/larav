<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
// protected  $table = 'my_posts';  if table have enought name
// protected $primaryKey = 'post_id'; if table have enought id
// use HasFactory;
// public $incrementing = false; говорит что поле не экрементировано
// protected $keyType='string'; говорим что полу не интовое
// public $timestamps = false; laravel не будет следить за заполнением этих полей
//  protected $attributes = ['content'=>'Lorem ipsum...'];
 protected $fillable = ['title'];

 public function rubric(){
     return $this->belongsTo(Rubric::class);
 }

 public function tags(){
    return $this->belongsToMany(Tag::class);
}

}
