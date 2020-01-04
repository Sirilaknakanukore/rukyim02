<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = array('id','name','cover_image');

    public function photos() {
        return $this->hasMany('App\photo');
    }

}
