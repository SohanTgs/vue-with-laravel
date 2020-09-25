<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[
	'uses'=>'App\Http\Controllers\MainController@index',
	'as'=>'index'
]);

Route::POST('/save',[
	'uses'=>'App\Http\Controllers\MainController@save',
	'as'=>'save'
]);

// Route::get('/', [MainController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
