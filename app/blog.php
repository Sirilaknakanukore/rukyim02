<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    protected $fillable = array('id','user_id','name','description','tags','cover_image');

    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function likes(){
        return $this->hasMany('App\Like');
    }
    public function profile(){
        return $this->hasMany('App\Profile');
    }
}
