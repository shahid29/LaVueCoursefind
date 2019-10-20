<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded=[];

    public static function paginate(int $int)
    {
    }
    public function videos(){
        return $this->hasMany(Video::class)->orderBy('episode_number','ASC');
    }
}
