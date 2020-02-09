<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = array('id','user_id','activity_id');

    public function Activity(){
        return $this->belongsTo('App\Activity');
    }
}
