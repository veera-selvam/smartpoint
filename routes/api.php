<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\employee;
use App\Models\employee_web_history;
use App\Http\Controllers\EmployeeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employee',[EmployeeApiController::class, 'index']);
Route::post('/employee',[EmployeeApiController::class, 'store']);
Route::put('/employee/{emp}',[EmployeeApiController::class, 'update']);
Route::delete('/employee/{emp}',[EmployeeApiController::class, 'destroy']);

