<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = array('id','user_id','blog_id');

    public function blog(){
        return $this->belongsTo('App\blog');
    }

}
