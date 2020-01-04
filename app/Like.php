<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = array('id','blog_id','user_id');

    public function blog(){
        return $this->belongsTo('App\blog');
    }
}
