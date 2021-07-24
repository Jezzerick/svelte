<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//creating controller - app-http-controllers
Route::get('/lambo', [SubPagesController::class, 'getLambo']);
// Route::get('/lambo', 'SubPagesController@getLambo');
Route::get('/finance', 'SubPagesController@getFinance');
Route::get('/cookie', 'SubPagesController@getCookie');
