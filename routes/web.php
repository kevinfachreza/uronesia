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
	Route::get('/auth-manual/{user_id}', 'HomeController@manualAuth');


	Route::get('/settings', 'Settings\ViewController@index');
	Route::post('/settings/user', 'Settings\PostController@edit');
	Route::post('/settings/password', 'Settings\PostController@password');

	Route::get('/kasus/delete/{id}', 'Kasus\PostController@delete');

	Route::get('/kasus/striktur-uretra', 'Kasus\StrikturUretra\ViewController@index');
	Route::get('/kasus/striktur-uretra/print/{start}/{limit}', 'Kasus\StrikturUretra\ViewController@print');
	Route::get('/kasus/striktur-uretra/{id}/form', 'Kasus\StrikturUretra\ViewController@form');
	Route::get('/kasus/striktur-uretra/{id}/form-view', 'Kasus\StrikturUretra\ViewController@formView');
	Route::post('/kasus/striktur-uretra/{id}/save', 'Kasus\StrikturUretra\PostController@save');


	Route::get('/kasus/trauma', 'Kasus\Trauma\ViewController@index');
	Route::get('/kasus/trauma/print/{start}/{limit}', 'Kasus\Trauma\ViewController@print');
	Route::get('/kasus/trauma/{id}/form', 'Kasus\Trauma\ViewController@form');
	Route::get('/kasus/trauma/{id}/form-view', 'Kasus\Trauma\ViewController@formView');
	Route::post('/kasus/trauma/{id}/save', 'Kasus\Trauma\PostController@save');

	Route::get('/kasus/urooncology', 'Kasus\UroOncology\ViewController@index');
	Route::get('/kasus/urooncology/print/{start}/{limit}', 'Kasus\UroOncology\ViewController@print');
	Route::get('/kasus/urooncology/{id}/form', 'Kasus\UroOncology\ViewController@form');
	Route::get('/kasus/urooncology/{id}/form-view', 'Kasus\UroOncology\ViewController@formView');
	Route::post('/kasus/urooncology/{id}/save', 'Kasus\UroOncology\PostController@save');


	Route::get('/kasus/benign-prostate-hiperplasia', 'Kasus\BenignProstateHiperplasia\ViewController@index');
	Route::get('/kasus/benign-prostate-hiperplasia/print/{start}/{limit}', 'Kasus\BenignProstateHiperplasia\ViewController@print');
	Route::get('/kasus/benign-prostate-hiperplasia/{id}/form', 'Kasus\BenignProstateHiperplasia\ViewController@form');
	Route::get('/kasus/benign-prostate-hiperplasia/{id}/form-view', 'Kasus\BenignProstateHiperplasia\ViewController@formView');
	Route::post('/kasus/benign-prostate-hiperplasia/{id}/save', 'Kasus\BenignProstateHiperplasia\PostController@save');

	Route::get('/kasus/kidney-transplant', 'Kasus\KidneyTransplant\ViewController@index');
	Route::get('/kasus/kidney-transplant/print/{start}/{limit}', 'Kasus\KidneyTransplant\ViewController@print');
	Route::get('/kasus/kidney-transplant/{id}/form', 'Kasus\KidneyTransplant\ViewController@form');
	Route::get('/kasus/kidney-transplant/{id}/form-view', 'Kasus\KidneyTransplant\ViewController@formView');
	Route::post('/kasus/kidney-transplant/{id}/save', 'Kasus\PostController@globalSave');

	Route::get('/kasus/laparoscopic', 'Kasus\Laparoscopic\ViewController@index');
	Route::get('/kasus/laparoscopic/print/{start}/{limit}', 'Kasus\Laparoscopic\ViewController@print');
	Route::get('/kasus/laparoscopic/{id}/form', 'Kasus\Laparoscopic\ViewController@form');
	Route::get('/kasus/laparoscopic/{id}/form-view', 'Kasus\Laparoscopic\ViewController@formView');
	Route::post('/kasus/laparoscopic/{id}/save', 'Kasus\PostController@globalSave');

	Route::get('/kasus/additional', 'Kasus\Additional\ViewController@index');
	Route::get('/kasus/additional/print/{start}/{limit}', 'Kasus\Additional\ViewController@print');
	Route::get('/kasus/additional/{id}/form', 'Kasus\Additional\ViewController@form');
	Route::get('/kasus/additional/{id}/form-view', 'Kasus\Additional\ViewController@formView');
	Route::post('/kasus/additional/{id}/save', 'Kasus\PostController@globalSave');

	Route::get('/kasus/congenital-abnormalities', 'Kasus\CongenitalAbnormalities\ViewController@index');
	Route::get('/kasus/congenital-abnormalities/print/{start}/{limit}', 'Kasus\CongenitalAbnormalities\ViewController@print');
	Route::get('/kasus/congenital-abnormalities/{id}/form', 'Kasus\CongenitalAbnormalities\ViewController@form');
	Route::get('/kasus/congenital-abnormalities/{id}/form-view', 'Kasus\CongenitalAbnormalities\ViewController@formView');
	Route::post('/kasus/congenital-abnormalities/{id}/save', 'Kasus\PostController@globalSave');

	
	Route::get('/kasus/penile-paraffinoma', 'Kasus\PenileParaffinoma\ViewController@index');
	Route::get('/kasus/penile-paraffinoma/print/{start}/{limit}', 'Kasus\PenileParaffinoma\ViewController@print');
	Route::get('/kasus/penile-paraffinoma/{id}/form', 'Kasus\PenileParaffinoma\ViewController@form');
	Route::get('/kasus/penile-paraffinoma/{id}/form-view', 'Kasus\PenileParaffinoma\ViewController@formView');
	Route::post('/kasus/penile-paraffinoma/{id}/save', 'Kasus\PostController@globalSave');


	Route::get('/kasus/male-infertility', 'Kasus\MaleInfertility\ViewController@index');
	Route::get('/kasus/male-infertility/print/{start}/{limit}', 'Kasus\MaleInfertility\ViewController@print');
	Route::get('/kasus/male-infertility/{id}/form', 'Kasus\MaleInfertility\ViewController@form');
	Route::get('/kasus/male-infertility/{id}/form-view', 'Kasus\MaleInfertility\ViewController@formView');
	Route::post('/kasus/male-infertility/{id}/save', 'Kasus\PostController@globalSave');


	Route::get('/kasus/uroginecology', 'Kasus\Uroginecology\ViewController@index');
	Route::get('/kasus/uroginecology/print/{start}/{limit}', 'Kasus\Uroginecology\ViewController@print');
	Route::get('/kasus/uroginecology/{id}/form', 'Kasus\Uroginecology\ViewController@form');
	Route::get('/kasus/uroginecology/{id}/form-view', 'Kasus\Uroginecology\ViewController@formView');
	Route::post('/kasus/uroginecology/{id}/save', 'Kasus\PostController@globalSave');
	
	Route::get('/kasus/stone', 'Kasus\Stone\ViewController@index');
	Route::get('/kasus/stone/print/{start}/{limit}', 'Kasus\Stone\ViewController@print');
	Route::get('/kasus/stone/{id}/form', 'Kasus\Stone\ViewController@form');
	Route::get('/kasus/stone/{id}/form-view', 'Kasus\Stone\ViewController@formView');
	Route::post('/kasus/stone/{id}/save', 'Kasus\PostController@globalSave');


	Route::get('/kasus/baru', 'Kasus\ViewController@create');
	Route::post('/kasus/baru', 'Kasus\PostController@create');


	Route::get('/kasus/{jenis_kasus}', 'Kasus\ViewController@kasusSingle');


	Route::get('/admin', 'Admin\ViewController@index');
	Route::get('/admin/admin-status/{user_id}/{status}', 'Admin\PostController@adminStatus');
	Route::get('/admin/active-status/{user_id}/{status}', 'Admin\PostController@activeStatus');

	Route::get('/api/pasien/get/{id}', 'Pasien\ViewController@apiGetPasien');


});


Route::get('/test-error', function() {
    $testing = $test+$error;
});