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
        $reps = Repair::whereManufacturerId(3)->whereIn('closing_reason_id', ['2', '11'])->get();

        $res = array();

        $ret = "date;rminst;zlb;gno;serial;customer;kostenpflichtig;garantie;fremdverschulden;ndfrep;spares;komplett".PHP_EOL;

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
            $t['fremdverschulden'] = '';
            foreach ($trem as $item) {
                if($this->startsWith_with_delete($item, 'Kostenpflichtig:') != ''){
                    $t['kostenpflichtig'] = trim($this->startsWith_with_delete($item, 'Kostenpflichtig:'), "\t\n\r");
                }

                if($this->startsWith_with_delete($item, 'Hersteller-Garantie:') != ''){
                    $t['garantie'] = trim($this->startsWith_with_delete($item, 'Hersteller-Garantie:'), "\t\n\r");
                }

                if($this->startsWith_with_delete($item, 'Fremdverschulden:') != ''){
                    $t['fremdverschulden'] = trim($this->startsWith_with_delete($item, 'Fremdverschulden:'), "\t\n\r");
                }
            }
            $t['type'] = $rep->closing_reason()->reason;
            $t['spares'] = $rep->spares()->count();
            foreach ($rep->spares() as $spare){
                if(substr($spare->serial_new) == substr($rep->serial)){
                    $t['kompl'] += 1;
                }
            }

            $res[] = $t;
            $ret .= $t['date'].';'.$t['rminst'].';'.$t['zlb'].';'.$t['gno'].';'.$t['serial'].';'.$t['customer'].';'.$t['kostenpflichtig'].';'.$t['garantie'].';'.$t['fremdverschulden'].';'.$t['type'].';'.$t['spares'].';'.$t['kompl'].PHP_EOL;
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
