<?php
/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| this contained all admin routes
|
*/
Route::group(['middleware' => ['auth', 'roles'],'roles' => 'admin'], function () {

    #Permission management
    Route::group(['prefix' => 'permission'], function() {
        Route::get('/create','PermissionController@create');
        Route::post('/create','PermissionController@save');

        Route::get('/edit/{id}','PermissionController@edit');
        Route::post('/edit/{id}','PermissionController@update');

        Route::get('/delete/{id}','PermissionController@delete');
    });
    Route::get('permission-management','PermissionController@getIndex');

    #Role management
    Route::get('role-management','RoleController@getIndex');
    Route::group(['prefix' => 'role'], function() {
        Route::get('/create','RoleController@create');
        Route::post('/create','RoleController@save');

        Route::get('/edit/{id}','RoleController@edit');
        Route::post('/edit/{id}','RoleController@update');

        Route::get('/delete/{id}','RoleController@delete');
    });

    #CRUD Generator
    Route::group(['prefix' => 'crud-generator'], function() {
        Route::get('/', ['uses' => 'ProcessController@getGenerator']);
        Route::post('/', ['uses' => 'ProcessController@postGenerator']);
    });

    # Activity log
    Route::group(['prefix' => 'activity-log'], function() {
        Route::get('/','LogViewerController@getActivityLog');
        Route::get('/data', 'LogViewerController@activityLogData')->name('activity-log.data');
    });

    #User Management routes
    Route::get('users','UsersController@getIndex'); 
    Route::group(['prefix' => 'user'], function() {
        Route::get('/create','UsersController@create');
        Route::post('/create','UsersController@save');

        Route::get('/edit/{id}','UsersController@edit');
        Route::post('/edit/{id}','UsersController@update');

        Route::get('/delete/{id}','UsersController@delete');
        Route::get('/deleted/','UsersController@getDeletedUsers');

        Route::get('/restore/{id}','UsersController@restoreUser');
    });
});