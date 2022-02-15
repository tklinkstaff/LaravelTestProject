<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owners;
use App\Cars;

class OwnerController extends Controller
{
    public function addOwner(Request $req){
        $validated = $req->validate([
            'name' => 'required|max:255',
            'car_id' => 'required|integer',
        ]);
        $car = Cars::find($req->car_id);
        if($car !== null){
            $owner = new Owners;
            $owner->name = $req->name;
            $owner->car_id = $req->car_id;
            $owner->save();
            if($owner){
                return ["Result"=>"Data Save Successful"];
            } else {
                return ["Result"=>"Data Save Failed"];
            }
        } else{
            return ["Result"=>"Invalid Car"];
        }
    }
}
