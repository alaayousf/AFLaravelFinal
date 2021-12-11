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

Route::get('/', function () {
    return view('welcome');
});




//Users 

Route::get('Login/asGuest','User\GuestController@Guest_view');
Route::get('ratings/Detalse/{id}','User\GuestController@getStoreData');
Route::post('ratings/addRatings','User\GuestController@addRatings');
//serch
Route::post('serch','User\GuestController@Serch_Store');
//Category views
Route::get('categuty/View','Admin\Categorys@category_View');
Route::get('categuty/create/View','Admin\Categorys@category_creat_View');
Route::get('update/{id}','Admin\Categorys@category_update_View');
	//Category action
Route::post('categuty/creat','Admin\Categorys@creat');
Route::get('categuty/index','Admin\Categorys@index');
Route::post('categuty/update','Admin\Categorys@update');
Route::get('categuty/delete/{id}','Admin\Categorys@delete');

//store views 
Route::get('store/View','Admin\Stores@store_view');
Route::get('store/create/View','Admin\Stores@cerate_view');
Route::get('store/update/View/{id}','Admin\Stores@update_view');
//store action
Route::post('store/creat','Admin\Stores@creat');
Route::post('store/update','Admin\Stores@update');
Route::get('store/delete/{id}','Admin\Stores@delete');

Route::get('Login/View','Admin\LoginController@LoginView');
Route::get('Login/Aute','Admin\LoginController@Aute');




