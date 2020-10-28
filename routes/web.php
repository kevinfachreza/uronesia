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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
});

Route::group(['middleware' => ['auth','check_active']], function () {
	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');


	Route::get('/settings', 'Settings\ViewController@index');
	Route::post('/settings/user', 'Settings\PostController@edit');
	Route::post('/settings/password', 'Settings\PostController@password');

	Route::get('/kasus/striktur-uretra', 'Kasus\StrikturUretra\ViewController@index');
	Route::get('/kasus/striktur-uretra/print', 'Kasus\StrikturUretra\ViewController@print');
	Route::get('/kasus/striktur-uretra/{id}/form', 'Kasus\StrikturUretra\ViewController@form');
	Route::get('/kasus/striktur-uretra/{id}/form-view', 'Kasus\StrikturUretra\ViewController@formView');
	Route::post('/kasus/striktur-uretra/{id}/save', 'Kasus\StrikturUretra\PostController@save');
	Route::get('/kasus/baru', 'Kasus\ViewController@create');
	Route::post('/kasus/baru', 'Kasus\PostController@create');


	Route::get('/admin', 'Admin\ViewController@index');
	Route::get('/admin/admin-status/{user_id}/{status}', 'Admin\PostController@adminStatus');
	Route::get('/admin/active-status/{user_id}/{status}', 'Admin\PostController@activeStatus');

	Route::get('/api/pasien/get/{id}', 'Pasien\ViewController@apiGetPasien');


});