<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){

    }

    public function garantie(){
        $reps = Repair::whereManufacturerId(3)->get();

        $res = array();

        foreach ($reps as $rep) {
            $t['rminst'] = $rep->rminst()->rminst;
            $res[] = $t;
        }

        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}
