<?php

namespace App\Exports;

use App\Models\Repair;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $reps = Repair::whereManufacturerId(3)->whereIn('closing_reason_id', ['2', '11'])->get();

        $res = array();

        foreach ($reps as $rep) {
            $t['date'] = Carbon::parse($rep->started_at)->toDateString();
            $t['rminst'] = $rep->rminst()->rminst;
            $t['zlb'] = $rep->rminst()->zlb;
            $t['gno'] = $rep->g_no;
            $t['serial'] = $rep->unit()->serial;
            $t['customer'] = $rep->customer()->customer;
            $trem = explode(PHP_EOL, $rep->remarks);
            foreach ($trem as $item) {
                if($this->startsWith_with_delete($item, 'Kostenpflichtig:') != ''){
                    $t['kostenpflichtig'] = $this->startsWith_with_delete($item, 'Kostenpflichtig:');
                }

                if($this->startsWith_with_delete($item, 'Hersteller-Garantie:') != ''){
                    $t['garantie'] = $this->startsWith_with_delete($item, 'Hersteller-Garantie:');
                }
            }

            $res[] = $t;
        }


        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}
