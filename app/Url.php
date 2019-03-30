<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public  $timestamps = false;

    protected $fillable =[
        'shoten', 'url'
    ];


    public static function get_unique_short_url(){
        $shoten = str_random(5);

        if(static::where('shoten',$shoten)->count() >0)
        {
            return  static::get_unique_short_url();
        }


        return $shoten;
    }
    
}
