<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class ReportController extends Controller
{
    public function index(){

    }

    public function garantie(){
        $reps = Repair::whereManufacturerId(3)->whereIn('closing_reason_id', ['2'])->get();

        $res = array();

        $ret = "date;rminst;zlb;gno;serial;customer;kostenpflichtig;garantie".PHP_EOL;

        foreach ($reps as $rep) {
            $t['date'] = Carbon::parse($rep->started_at)->toDateString();
            $t['rminst'] = $rep->rminst()->rminst;
            $t['zlb'] = $rep->rminst()->zlb;
            $t['gno'] = $rep->g_no;
            $t['serial'] = $rep->unit()->serial;
            $t['customer'] = $rep->customer()->customer;
            $trem = explode(PHP_EOL, $rep->remarks);
            $t['kostenpflichtig'] = '';
            $t['garantie'] = '';
            foreach ($trem as $item) {
                if($this->startsWith_with_delete($item, 'Kostenpflichtig:') != ''){
                    $t['kostenpflichtig'] = trim($this->startsWith_with_delete($item, 'Kostenpflichtig:'), "\t\n\r");
                }

                if($this->startsWith_with_delete($item, 'Hersteller-Garantie:') != ''){
                    $t['garantie'] = trim($this->startsWith_with_delete($item, 'Hersteller-Garantie:'), "\t\n\r");
                }
            }

            $res[] = $t;
            $ret .= $t['date'].';'.$t['rminst'].';'.$t['zlb'].';'.$t['gno'].';'.$t['serial'].';'.$t['customer'].';'.$t['kostenpflichtig'].';'.$t['garantie'].PHP_EOL;
        }



        echo "<pre>";
        echo $ret;
        echo "</pre>";
    }

    function startsWith_with_delete ($string, $startString)
    {
        $len = strlen($startString);
        $tsub = (substr($string, 0, $len) === $startString);

        if($tsub === true){
            return str_replace($startString, '', $string);
        }else{
            return '';
        }
    }
}
