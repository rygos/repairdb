<?php

namespace App\Http\Controllers;

use App\Models\EeeeModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function checkeeee(Request $request){
        $eeee = EeeeModel::whereEeee(substr($request->post('eeee'), -4))->first();

        if($eeee){
            return "TRUE";
        }else{
            return "FALSE";
        }
    }
}
