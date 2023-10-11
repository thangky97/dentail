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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('route_BackEnd_Dashboard');

    Route::prefix('/user')->group(function () {
        Route::get('/', 'Admin\AdministratorController@index')->name('route_BackEnd_User_List');
        // Route::get('/create', 'Admin\StaffController@create')->name('route_BackEnd_Staff_Create');
        // Route::get('/edit/{id}', 'Admin\StaffController@edit')->name('route_BackEnd_Staff_Edit');
    });
});
