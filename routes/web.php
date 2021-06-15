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
// home page
// Route::get('/', 'Homepagecontroller@index' );

//Resource: unico punto per tutte le url (php artisan route:list) 

                //name    //name controller
Route::resource('comics', 'ComicController');


