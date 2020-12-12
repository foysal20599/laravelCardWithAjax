<?php

   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\FristController;
   use App\Http\Controllers\TeacherController;
   use App\Http\Controllers\EmployeeController;

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

Route::get("/dashboard",[FristController::class,"index"]);
Route::get("/about/name",[FristController::class,"about"])->name("about.page");
Route::get('/tercher-list',[TeacherController::class, 'index']);

// // student/store data
Route::post('/student/store',[TeacherController::class, 'store']);
// // edit -----------
Route::get('/teachers/edit/{id}',[TeacherController::class, 'edit']); Route::post('/teachers/update/{id}',[TeacherController::class, 'update']);
Route::get('/teachers/delete/{id}',[TeacherController::class,'delete']);

// =============== Card Ajax ===================

Route::get('/ajax',[EmployeeController::class, 'index']);
Route::get('/employee/all',[EmployeeController::class, 'allData']);


