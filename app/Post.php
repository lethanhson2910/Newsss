<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = "posts";

  public function photo()
  {
    return $this-> belongsTo('App\Photo' ,'photo_id', 'id');
  }
}
