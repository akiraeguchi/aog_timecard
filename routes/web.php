<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('stamp', 'StaffController@index');

Route::get('work_time/index','WorkTimeController@index');

Route::get('work_time/edit','WorkTimeController@edit');

Route::get('admin/work_time_index','AdminController@work_time_index');

Route::get('admin/work_time_show','AdminController@work_time_show');

Route::get('admin/request_index','AdminController@request_index');