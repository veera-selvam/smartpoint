<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee_web_history;

use App\Models\employee;

class getEmpwebHistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GET:empwebhistory {ip_address}';

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
        //$qry    = employee_web_history::where('ip_address',$this->argument('ip_address'))->get();
        $qry = employee::where('ip_address',$this->argument('ip_address'))->with('employee_web_history')->get();
        $count  = $qry->count();
        if($count > 0)
            dd(json_encode($qry->toArray()));
        else
            echo 'NULL'; 
        }

    }