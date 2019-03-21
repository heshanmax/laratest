<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //
    protected $fillable = ['imgname'];

    public function imageable(){
    	return $this->morphto();
    }
}
