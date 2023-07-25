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
//show home page
Route::get('/', function () { return view ('welcome');});

//show about us page 
Route::get('/about-us', function() {return view ('about-us');});

//blogs page
Route::get('/bogs', function() {return view ('blogs');});

//show contacts page
Route::get('/contacts', function() {return view ('contacts');});