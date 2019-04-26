<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index(){
        $models = Model::orderBy('model')->get();

        return view('models.index', [
            'models' => $models,
        ]);
    }

    public function show($id){
        $model = Model::whereId($id)->first();

        return view('models.show', [
            'model' => $model,
        ]);
    }

    public function checkeeee(Request $request){
        $eeee = EeeeModel::whereEeee(substr($request->post('eeee'), -4))->first();

        if($eeee){
            return "TRUE";
        }else{
            return "FALSE";
        }
    }
}
