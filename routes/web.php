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
//Frontend section
require __DIR__ . '/backend.php';


require __DIR__ . '/frontend.php';

Auth::routes();

Route::get('/link',function(){
    Artisan::call('storage:link');
    return 'successfully linked';
});;

Route::get('/clear',function(){
    Artisan::call('optimize:clear');
    return 'cleared';
});;
