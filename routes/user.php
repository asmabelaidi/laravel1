<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin', function () {
//     return 'You can add another route file; and add it on app/Providers/RouteServiceProvider as a route';
// });

//------Namespace---------
Route::namespace('Front')->group(function () {
    //many routes to controllers in the same folder Front
    // All routes access controller or methods in folder name Front
    Route::get('users', 'UserController@showUserName');
});

//------Prefix---------
Route::prefix('users')->group(function () {
    //users/show users/delete we just use this method to clean the code
    Route::get('show', 'Front\UserController@showUserName');
    Route::get('delete', 'Front\UserController@showUserName');
    Route::get('update', 'Front\UserController@showUserName');
});

//-------Middleware-----
Route::get('users', function () {
    return 'Middelware';
})->middleware('auth');

///--------Professional code ------------
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    //Set of routes here 
    Route::get('/pro', function () {
        return 'Hello professional';
    });
});
