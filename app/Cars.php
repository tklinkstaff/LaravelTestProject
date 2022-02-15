<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $fillable= ['id','model','mechanic_id'];

    public function machanics(){
        return $this->hasOne(Mechanics::class );
    }
    public $timestamps = false;
}
