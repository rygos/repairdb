<?php

namespace App\Console\Commands\repair;

use Illuminate\Console\Command;

class search extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repair:search {keyword}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'search for repair';

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
        $key = $this->argument('keyword');
        $expected = '';

        if(strlen($key) == 8 and is_numeric($key)){
            if(starts_with($key, '2') or starts_with($key, '7')){
                $expected = 'rminst';
            }else{
                $expected = 'serial';
            }
        }elseif(strlen($key) == 10 and is_numeric($key)){
            if(starts_with($key, '47')){
                $expected = 'zlb';
            }else{
                $expected = 'serial';
            }
        }else{
            $expected = 'serial';
        }

        echo $key.' - '.$expected;
    }
}
