<?php

use Illuminate\Support\Facades\Route;
use App\Models\employee_web_history;
use App\Models\employee;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //DB::enableQueryLog();//enable query logging
    $books = employee::where('ip_address','192.168.1.21')->with('employee_web_history')->get()->toArray();
    //dd($books);
    //echo "<pre>";print_r(DB::getQueryLog());//print sql query
    dd($books);


});