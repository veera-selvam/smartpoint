<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeApiController extends Controller
{
    public function index(){
        return employee::all();
    }
    public function store(Request $request){
       
        employee::create([
            'emp_id'        =>  $request->emp_id,
            'emp_name'      =>  $request->emp_name,
            'ip_address'    =>  $request->ip_address
        ]);

        return response()->json([
            "message" => "Employee record created"
        ], 201);

    }
    public function update(Request $request, $emp){

        if (employee::where('id', $emp)->exists()) {
            $employee_data = employee::find($emp);

            $employee = new employee;
           
            $employee->emp_id = is_null($request->emp_id) ? $employee_data->emp_id : $request->emp_id;
            $employee->emp_name = is_null($request->emp_name) ? $employee_data->emp_name : $request->emp_name;
            $employee->ip_address = is_null($request->ip_address) ? $employee_data->ip_address : $request->ip_address;
            $employee->save();
    
            return response()->json([
                "message" => "Employee records updated successfully"
            ], 200);

        }else {
            return response()->json([
                "message" => "Employee record not found"
            ], 404);
        }
    }
    public function destroy(Request $request, $id){
        if(employee::where('id', $id)->exists()) {

            $employee = employee::find($id);
            $employee->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        }
        else {
            return response()->json([
              "message" => "Employee record not found"
            ], 404);
          }
    }
}