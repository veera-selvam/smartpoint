<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee;
use App\Models\employee_web_history;


class setEmpwebHistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SET:empwebhistory {ip_address} {url} ';

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
        $data = employee::where('ip_address',$this->argument('ip_address'))->get();
        if($data->count()){
            employee_web_history::create([
                'ip_address'        =>  $this->argument('ip_address'),
                'url'               =>  $this->argument('url')
            ]);
        }
        else{
            echo "Given ip address not mapping any Employee";
        }

    }
}
