<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee;

class unsetEmpdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UNSET:empdata {ip_address}';

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
        $success =  employee::where('ip_address',$this->argument('ip_address'))->delete();
    }
}
