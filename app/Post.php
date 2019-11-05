<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Post extends Model
{
    protected $fillable = ["name"];

    public function scopeLongNames($query){
        return $query->whereRaw("length(name) > 10");
    }


    //note that global scopes are defined on bootstrapping the model class
    public static function boot(){
        //booting all the traits from the parent's definition
        parent::boot();

        static::addGlobalScope("vowelBeginnings", function($query){
            $query->whereRaw("name RLIKE '^[aeoiuAEOIU]'");
        });
    }
}
