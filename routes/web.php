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

Route::post('/marchandise/save', "IndexController@saveMarchandise")->name('save.marchandise');
Route::post('/location/save', "IndexController@savePersonnel")->name('save.personnel');
Route::post('/contact/save', "ContactController@save")->name('save.contact');
