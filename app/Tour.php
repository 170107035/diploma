<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tour extends Model
{
    public function slider(){
    	return $this->belongsTo(Slider::class);
    }

    public function places(){
    	return $this->hasMany(Place::class);
    }

    public function programs(){
    	return $this->hasMany(TourProgram::class);
    }
}
