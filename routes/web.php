<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Studentcontroller;
use App\Models\Student;

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
Route::get('/user',[MainController::class,'index']);

Route::post('check',[MainController::class,'check']);
Route::get('/profile',[MainController::class,'profile'])->middleware('define');
Route::get('addstd',[Studentcontroller::class,'addstd'])->middleware('define');
Route::post('create',[Studentcontroller::class,'create']);
Route::get('stdlst',[Studentcontroller::class,'stdlst'])->middleware('define');
// Route::get('payment',[Studentcontroller::class,'payment']);
Route::post('paying',[Studentcontroller::class,'pay']);
Route::get('show',[Studentcontroller::class,'got'])->middleware('define');
Route::get('logout',[MainController::class,'logout']);
Route::get('search',[Studentcontroller::class,'search']);
Route::get('detail/{rollnumber}',[Studentcontroller::class,'detail']);