<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = array('id','user_id','blog_id','body');

    public function blog(){
        return $this->belongsTo('App\blog');
    }

}
