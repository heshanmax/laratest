<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['title'];


    public function products(){
    	return $this->belongsToMany('App\Product');
    }

    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
}
