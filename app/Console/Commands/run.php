<?php

namespace App\Console\Commands;

use App\Models\CallType;
use App\Models\ClosingReason;
use App\Models\Customer;
use App\Models\Manufacturer;
use App\Models\Model;
use App\Models\Repair;
use App\Models\RepairType;
use App\Models\Rminstzlb;
use App\Models\Spare;
use Carbon\Carbon;
use Illuminate\Console\Command;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use PhpSchool\CliMenu\Builder\SplitItemBuilder;
use PhpSchool\CliMenu\CliMenu;

class run extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs Application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->info(config('app.name').' - '.config('app.version'));
        $this->line('##############################################');
        $this->line('');
        $list = $this->rep_view_open();
        $this->line('');
        $this->info('Main Menu');
        $this->line('');
        $this->line('<info>1</info> -> View Open, <info>2</info> -> Add New, ');
        $selected = $this->choice('Select Menu', [
            'Repair -> View Open',
            'Repair -> Add',
            'Repair -> Search',
            'Spare -> Add',

        ]);

        switch ($selected) {
            case 'Repair -> Add':
                $check = $this->rep_add();
                break;
            case 'Repair -> View Open':
                $check = $this->rep_view_open(true);
                break;
            case 'Spare -> Add':
                $check = $this->spare_add();
                break;
        }
    }

    private function spare_add(){
        $this->info('Add new Sparepart');

        $lcustomer = array();
        foreach (Customer::orderBy('customer')->get() as $item){
            $lcustomer[] = $item->customer;
        }
        $customer = insert_customer($this->anticipate('Customer:', $lcustomer));

        $lmanu = array();
        foreach (Manufacturer::orderBy('manufacturer')->get() as $item){
            $lmanu[] = $item->manufacturer;
        }
        $manu = insert_manufacturer($this->anticipate('Manufacturer:', $lmanu));

        $lmodel = array();
        foreach (Model::whereManufacturerId($manu)->orderBy('model')->get() as $item){
            $lmodel[] = $item->model;
        }
        $model = insert_models($this->anticipate('Model:', $lmodel), $manu);

        $sap_no = $this->ask('SAP No:');
        $sap_desc = $this->ask('SAP Description:');
        $part_no = $this->ask('Part No:');
        $part_desc = $this->ask('Part Description');
        $remarks = $this->ask('Remarks');
        $price_repl = $this->ask('Replacement Price');
        $price_stock = $this->ask('Stock Price');

        $t = new Spare;
        $t->sap_no = $sap_no;
        $t->sap_desc = $sap_desc;
        $t->manufacturer_id = $manu;
        $t->model_id = $model;
        $t->customer_id = $customer;
        $t->manufacturer_part_no = $part_no;
        $t->manufacturer_part_desc = $part_desc;
        $t->manufacturer_remarks = $remarks;
        $t->price_replace = $price_repl;
        $t->price_replace_date = Carbon::now()->toDateString();
        $t->price_stock = $price_stock;
        $t->price_stock_date = Carbon::now()->toDateString();
        $t->save();

        $this->info('Spare part added.');

        $this->handle();
    }

    private function edit_menu(){
        $selected = $this->choice('Please select next action', [
            'Back to main menu',
            'Change repair status',
            'Add remark',
            'Add Spare to Repair',
        ]);

        switch($selected){
            case 'Back to main menu':
                $this->handle();
                break;
            case 'Change repair status':
                $id = $this->ask('Enter repair ID:');
                $date = Carbon::parse($this->ask('Status Date: ', Carbon::now()->toDateString()));
                $ltype = array();
                foreach (ClosingReason::all() as $item){
                    $ltype[] = $item->reason;
                }
                $reptype = insert_closingreason($this->anticipate('Status:', $ltype));

                $rep = Repair::whereId($id)->first();
                $rep->closing_reason_id = $reptype;
                $rep->closed_at = $date;
                $rep->save();
                break;
            case 'Add remark':
                $id = $this->ask('Enter repair ID:');
                $remark = $this->ask('Remark:');
                $rep = Repair::whereId($id)->first();
                $rep->remarks = $remark;
                $rep->save();
                break;
            case 'Add Spare to Repair':
                $repid = $this->ask('Enter Repair ID:');
                $sap = Spare::whereSapNo($this->ask('Spare SAP:'))->first()->id;
                $oser = '';
                break;
        }

        $this->rep_view_open(true);
    }

    private function rep_view_open($with_edit_menu = false){
        //Closing Reason ID 2 = REPAIRED
        $data = Repair::whereNotIn('closing_reason_id', [2])->orWhereNull('closing_reason_id')->orderBy('started_at')->get();

        $header = [
            'ID',
            'ZLB DATE',
            'START DATE',
            'CALL-TYPE',
            'RMINST',
            'ZLB',
            'CUSTOMER',
            'SERIAL',
            'MANUFACTURER',
            'MODEL',
            'REP-TYPE',
            'STATUS',
            'REMARKS'
        ];

        $ret = array();
        foreach ($data as $item){
            $t['id'] = $item->id;
            $t['zlb date'] = Carbon::parse($item->rminst()->zlb_created_at)->toDateString();
            $t['start date'] = Carbon::parse($item->started_at)->toDateString();
            $t['call-type'] = $item->rminst()->calltype()->type;
            $t['rminst'] = $item->rminst()->rminst;
            $t['zlb'] = $item->rminst()->zlb;
            $t['customer'] = $item->customer()->customer;
            $t['serial'] = $item->unit()->serial;
            $t['manufacturer'] = $item->manufacturer()->manufacturer;
            $t['model'] = $item->model()->model;
            $t['rep-type'] = $item->reptype()->type;
            if(!$item->closing_reason_id){
                $t['status'] = '<info>NEW</info>';
            }else{
                $reason = ClosingReason::whereId($item->closing_reason_id)->first()->reason;
                switch ($reason){
                    case 'DOA':
                        $reason = '<error>'.$reason.'</error>';
                        break;
                    case 'WIB':
                        $reason = '<bg=yellow;fg=black>'.$reason.'</>';
                        break;

                }
                $t['status'] = $reason;
            }
            $t['remarks'] = $item->remarks;
            $ret[] = $t;
        }

        $this->table($header, $ret);

        if($with_edit_menu == true){
            $this->edit_menu();
        }
    }

    private function rep_add(){
        $this->info('Add new repair:');
        $repzlbdate = Carbon::parse($this->ask('ZLB-Date:'))->toDateString();
        $repstartdate = Carbon::parse($this->ask('Start-Date:', Carbon::now()->toDateString()))->toDateString();
        $reprminst = $this->ask('RMINST:');
        $repzlb = $this->ask('ZLB:');

        $lctype = array();
        foreach (CallType::orderBy('type')->get() as $item){
            $lctype[] = $item->type;
        }
        $repcalltype = insert_calltype($this->anticipate('Call Type:', $lctype));

        $lcustomer = array();
        foreach (Customer::orderBy('customer')->get() as $item){
            $lcustomer[] = $item->customer;
        }
        $repcustomer = insert_customer($this->anticipate('Customer:', $lcustomer));

        $repsn = $this->ask('Unit Serial:');

        $lmanu = array();
        foreach (Manufacturer::orderBy('manufacturer')->get() as $item){
            $lmanu[] = $item->manufacturer;
        }
        $repmanufacturer = insert_manufacturer($this->anticipate('Manufacturer:', $lmanu));

        $lmodel = array();
        foreach (Model::whereManufacturerId($repmanufacturer)->orderBy('model')->get() as $item){
            $lmodel[] = $item->model;
        }
        $repmodel = insert_models($this->anticipate('Model:', $lmodel), $repmanufacturer);

        $ltype = array();
        foreach (RepairType::orderBy('type')->get() as $item){
            $ltype[] = $item->type;
        }
        $reptype = insert_repairtype($this->anticipate('Repair Type:', $ltype));


        //Save Data to Database
        $rep = new Repair;
        $rep->started_at = Carbon::parse($repstartdate);
        $rep->rminstzlb_id = insert_zlbrminst($repzlbdate, $repzlb, $reprminst, $repcalltype);
        $rep->customer_id = $repcustomer;
        $rep->unit_id = insert_unit($repsn, $repmanufacturer, $repmodel, $repcustomer);
        $rep->manufacturer_id = $repmanufacturer;
        $rep->model_id = $repmodel;
        $rep->repair_type_id = $reptype;
        $rep->save();

        $this->handle();
    }
}
