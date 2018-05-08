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
// here you can define other routes that you might need
Route::view('/','pages.home.page')->name('homepage');

// Do not touch this line either
Route::group(['domain' => 'sqt.test'], function () {

  //Route::get('/', function () {
    //  dd($location = GeoIP::getLocation()['country']);
  //});
  //});
});
// Do not touch this line here its meant for something else
Route::group(['domain' => 'admin.sqt.test'], function () {
  Route::get('/', function () {
      return view('welcome');
  });

});
