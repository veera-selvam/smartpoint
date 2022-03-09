<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee;
use phpDocumentor\Reflection\Types\Null_;
use DB;
class getEmpdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GET:empdata {ip_address}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $qry    = employee::select(['id','emp_name','emp_id','ip_address'])->where('ip_address',$this->argument('ip_address'))->get();  
        $count  = $qry->count();
        if($count > 0)
            dd(json_encode($qry->toArray()));
        else
            echo 'Record Not Found'; 
    }
}
