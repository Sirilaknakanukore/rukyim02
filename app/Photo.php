<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = array('group_id','description','photo','title','size');

    public function group(){
        return $this->belongsTo('App\Group');
    }

}
