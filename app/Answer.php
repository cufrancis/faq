<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function hasOneUser() {
      // return $this->hasOne('App\User', 'id', 'uid');
      return $this->belongsTo('App\User', 'uid', 'id');
    }
}
