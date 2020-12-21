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

//Route::get('/', function () {
//    return view('welcome');
//});

$navLinks = ['','about','write','contact'];
foreach ($navLinks as $navLink){
    Route::get("/$navLink",function () use($navLink) {
        return view(($navLink=="")?"pages.index":"pages.$navLink");
    })->name(($navLink=="")?"":"$navLink");
}
