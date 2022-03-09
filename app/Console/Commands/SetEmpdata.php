<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee;
class SetEmpdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SET:empdata {emp_id} {emp_name} {ip_address}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert the employee details to employee table with data';

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
        employee::create([
            'emp_id'        =>  $this->argument('emp_id'),
            'emp_name'      =>  $this->argument('emp_name'),
            'ip_address'    =>  $this->argument('ip_address')
        ]);

    }
}
