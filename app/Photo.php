<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $table = "photos";

  public function post()
  {
    return $this-> hasMany('App\Post' ,'photo_id', 'id')  
  }
  }
