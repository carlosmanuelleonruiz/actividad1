<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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
    return view('welcome');
});


route::get('user',[usercontroller::class,'index'])->name('user.index');
route::get('user/create',[usercontroller::class,'create'])->name('user.create');
route::post('user',[usercontroller::class,'store'])->name('user.store');
