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
Route::get('/composer-dump-autoload', function()
{
    \Artisan::call('composer:dump-autoload');
    echo 'dump-autoload complete';
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


	Route::get('/kasus/trauma', 'Kasus\Trauma\ViewController@index');
	Route::get('/kasus/trauma/print', 'Kasus\Trauma\ViewController@print');
	Route::get('/kasus/trauma/{id}/form', 'Kasus\Trauma\ViewController@form');
	Route::get('/kasus/trauma/{id}/form-view', 'Kasus\Trauma\ViewController@formView');
	Route::post('/kasus/trauma/{id}/save', 'Kasus\Trauma\PostController@save');

	Route::get('/kasus/urooncology', 'Kasus\UroOncology\ViewController@index');
	Route::get('/kasus/urooncology/print', 'Kasus\UroOncology\ViewController@print');
	Route::get('/kasus/urooncology/{id}/form', 'Kasus\UroOncology\ViewController@form');
	Route::get('/kasus/urooncology/{id}/form-view', 'Kasus\UroOncology\ViewController@formView');
	Route::post('/kasus/urooncology/{id}/save', 'Kasus\UroOncology\PostController@save');


	Route::get('/kasus/benign-prostate-hiperplasia', 'Kasus\BenignProstateHiperplasia\ViewController@index');
	Route::get('/kasus/benign-prostate-hiperplasia/print', 'Kasus\BenignProstateHiperplasia\ViewController@print');
	Route::get('/kasus/benign-prostate-hiperplasia/{id}/form', 'Kasus\BenignProstateHiperplasia\ViewController@form');
	Route::get('/kasus/benign-prostate-hiperplasia/{id}/form-view', 'Kasus\BenignProstateHiperplasia\ViewController@formView');
	Route::post('/kasus/benign-prostate-hiperplasia/{id}/save', 'Kasus\BenignProstateHiperplasia\PostController@save');


	Route::get('/kasus/baru', 'Kasus\ViewController@create');
	Route::post('/kasus/baru', 'Kasus\PostController@create');


	Route::get('/admin', 'Admin\ViewController@index');
	Route::get('/admin/admin-status/{user_id}/{status}', 'Admin\PostController@adminStatus');
	Route::get('/admin/active-status/{user_id}/{status}', 'Admin\PostController@activeStatus');

	Route::get('/api/pasien/get/{id}', 'Pasien\ViewController@apiGetPasien');


});


Route::get('/test-error', function() {
    $testing = $test+$error;
});