<?php

use Illuminate\Support\Facades\Auth;
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
    $data = ['Samaa', 'Web dev', '25 years old'];
    return view('welcome', compact('data'))->with('name', 'Sarra belaidi'); //->with('name', 'Sarra belaidi')
});

Route::get('/landing', function () {
    return view('landing');
});

// you can type the id or not
Route::get('/show-string/{id?}', function () {
    return ' Welcome String';
})->name('strng');

// required id
Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('nmbr');

// get without passing data 
// post for passing data like from froms
// PUT use it on updating data
// DELETE use it to delete data 

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(('verified'));
