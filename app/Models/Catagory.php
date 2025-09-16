<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
     //Relacion Uno a Muchos con post
        public function posts(){
            return $this->hasMany('App\Models\post');
        }
}
