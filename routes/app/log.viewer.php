<?php
/*
|--------------------------------------------------------------------------
| Log Viewer Web Routes
|--------------------------------------------------------------------------
|
| this contained all log viewer routes
|
*/
Route::group(['prefix' => 'log-viewers'], function() {
	Route::get('/', [
        'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index',
        'as' => 'log-viewers'
    ]);

	/* Method not exist
	Route::get('logcheck', [
		'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck',
		'as' => 'log-viewers.logcheck'
	]);
	*/

	Route::group(['prefix' => 'logs'], function() {
	    Route::get('/', [
			'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs',
			'as' => 'log-viewers.logs'
		]);
		Route::delete('/delete', [
			'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete',
			'as' => 'log-viewers.logs.delete'
		]);
		Route::get('/{date}', [
			'uses' =>  '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show',
			'as' => 'log-viewers.logs.show'
		]);
		Route::get('/{date}/download', [
			'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download',
			'as' => 'log-viewers.logs.download'
		]);
		Route::get('/{date}/{level}', [
			'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel',
			'as' => 'log-viewers.logs.filter'
		]);
		Route::get('/{date}/{level}/search', [
			'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search',
			'as' => 'log-viewers.logs.search'
		]);
	});
});