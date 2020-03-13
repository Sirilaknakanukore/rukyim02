<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupcount extends Model
{
    //
    protected $fillable = array('id','user_id','group_id');

    public function group(){
        return $this->belongsTo('App\Group');
    }

}
