<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = array('id','user_id','image');

    public function FormMultipleUpload(){
        return $this->belongsTo('App\FormMultipleUpload');
    }

}
