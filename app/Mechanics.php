<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanics extends Model
{
    protected $fillable= ['id','name'];
    public $timestamps = false;
}
