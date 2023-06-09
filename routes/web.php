<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|git 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
});
Route::get('/about', 'App \ Http \ Controllers \ HomeController@about')->name("home.about");


?>