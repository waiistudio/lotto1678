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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member', 'MemberController@showMember');
Route::get('/add', 'MemberController@addMem');
Route::get('/test', 'MemberController@test');
Route::post('/saveMem', 'MemberController@saveMem');
Route::resource('questions', 'QuestionsController');
