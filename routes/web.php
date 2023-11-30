<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/All_view', function () {
    return view('All_view');
});
Route::get('/', function () {
    return view('register');
});
//Route::resource('employee', EmployeeController::class,'stroe');
Route::post('/employeeRegister',[EmployeeController::class,'stroe']);

Route::get('/employees', [EmployeeController::class, 'viewAll']);

