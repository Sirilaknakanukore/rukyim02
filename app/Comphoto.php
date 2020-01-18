<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comphoto extends Model
{
    //
    protected $fillable = array('id','group_id','photo_id','body');

    public function photos(){
        return $this->belongsTo('App\Photo');
    }
    public function group(){
        return $this->belongsTo('App\Group');
    }


}
