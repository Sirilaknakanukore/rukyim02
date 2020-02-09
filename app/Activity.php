<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = array('id','user_id','name','description','date','location','time','activity_image');

    public function Event(){
        return $this->hasMany('App\Event');
    }


}
