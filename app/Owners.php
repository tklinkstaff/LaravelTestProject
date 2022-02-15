<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    //
    protected $fillable= ['id','name','car_id'];

    public $timestamps = false;
    public function cars(){
        return $this->hasOne(Cars::class );
    }
}
