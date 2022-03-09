<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeApiController extends Controller
{
    public function index(){
        return employee::all();
    }
    public function store(){
        return employee::create([
            'emp_id'        =>  request('emp_id'),
            'emp_name'      =>  request('emp_name'),
            'ip_address'    =>  request('ip_address')
        ]);
    }
    public function update(employee $emp){
        $success =  $emp->update([
             'emp_id'        =>  request('emp_id'),
             'emp_name'      =>  request('emp_name'),
             'ip_address'    =>  request('ip_address')
         ]);
         return ['success'=>$success];
    }
    public function destroy(employee $emp){
        $success =  $emp->delete();
        return ['success'=>$success];
    }
}
