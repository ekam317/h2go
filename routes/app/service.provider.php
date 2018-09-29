<?php
/*
|--------------------------------------------------------------------------
| ServiceProvider Web Routes
|--------------------------------------------------------------------------
|
| this contained all service provider routes
|
*/
Route::group(['prefix' => 'serviceprovider'], function() {
    Route::resource('/degrees', 'Degrees\DegreesController');
	Route::resource('/trainings', 'TrainingsController');
	Route::resource('/certificates', 'ServiceProvider\CertificatesController');
	Route::resource('/profile', 'ProfileController');
	Route::get('/editprofile', 'ProfileController@editprofile');
	Route::get('/identityinformation', 'ProfileController@identityinformation');
	Route::get('/saudi', 'ProfileController@saudi');
	Route::get('/academicteaching', 'ProfileController@academicteaching');
	Route::get('/paymenttransaction', 'ProfileController@paymenttransaction');
	Route::get('/paymentmethods', 'ProfileController@paymentmethods');
	Route::get('/urgentrequest1', 'ProfileController@urgentrequest1');

	Route::get('', function (){
	    return view('dashboard.index2');
	});
});

Route::group(['prefix' => 'contracts'], function() {
	Route::resource('/', 'Contracts\ContractsController');
	Route::get('/', 'contracts\ContractsController@viewContract');
});