<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['productSKU','name','description','price'];

    public function categories(){
    	return $this->belongsToMany('App\Procucts');
    }

    public function images(){
    	return $this->morphMany('App\Image', 'imageable');
    }
}
