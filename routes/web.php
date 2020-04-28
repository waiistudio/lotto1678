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
Route::resource('questions', 'QuestionsController')->except('show');
Route::get('/questions/{slug}','QuestionsController@show')->name('questions.show');
// Route::get('/huay','HuayController@create');
Route::resource('huays','HuayController');
Route::get('/vue', function (){
    $header = 'เพิ่มหวย';
    return view('vuetest.index', compact('header'));
});

Route::post ( '/vueitems', '_vueController@store' );
Route::get ('getItem','_vueController@show');
Route::post('/deleteItem/{id}','_vueController@destroy');
