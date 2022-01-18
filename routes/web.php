<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('welcome');
});

Route::get('/test',function(){
    return "Hello World"; 
});

/* Route::get('/home',function(){
    return Inertia::render('Home/manage-home'); 
}); */


Route::get('/about',function(){
    return "About Component"; 
});