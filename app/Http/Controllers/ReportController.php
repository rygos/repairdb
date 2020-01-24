<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){

    }

    public function garantie(){
        $reps = Repair::whereManufacturerId(3)->whereIn('closing_reason_id', ['2', '11'])->get();

        $res = array();

        foreach ($reps as $rep) {
            $t['date'] = Carbon::parse($rep->started_at)->toDateString();
            $t['rminst'] = $rep->rminst()->rminst;
            $t['zlb'] = $rep->rminst()->zlb;
            $t['gno'] = $rep->g_no;
            $t['serial'] = $rep->unit()->serial;
            $t['customer'] = $rep->customer()->customer;
            //Kundey
            //$t['kostenpflichtig'] = $this->get_string_between($rep->remarks, 'Kostenpflichtig:', PHP_EOL);
            //$t['garantie'] = $this->get_string_between($rep->remarks, 'Hersteller-Garantie:', PHP_EOL);
            //if($t['garantie'] == ''){$t['garantie'] = $this->get_string_between($rep->remarks, 'Hersteller-Garantie:', '');}
            $res[] = $t;
        }

        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }

    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}
