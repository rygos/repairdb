<?php

namespace App\Http\Controllers;

use App\Models\EeeeModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function checkeeee(Request $request){
        $eeee = EeeeModel::whereEeee($request->post('eeee'))->get();

        if($eeee->count() != 0){
            return "TRUE";
        }else{
            return "FALSE";
        }
    }
}
