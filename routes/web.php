<?php

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

// route::get('master',function(){
//   return view('master');
// });
Route::get('index', function () {
  return view('index');
 });
// Route::view('/', 'app');
// route::get('/','sitecontroller@index');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});