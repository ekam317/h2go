<?php
/*
|--------------------------------------------------------------------------
| Blog Web Routes
|--------------------------------------------------------------------------
|
| this contained all blog routes
|
*/

Route::group(['middleware' => 'auth'],function (){
    /*routes for blog*/
    Route::group(['prefix' => 'blog', 'as' => 'blog'], function () {
        Route::resource('', 'BlogController');
        Route::get('/create','BlogController@create');
        Route::post('/create','BlogController@store');

        Route::get('/delete/{id}', [
            'uses' => 'BlogController@destroy',
            'as' => 'delete'
        ]);

        Route::get('/edit/{id}', [
            'uses' => 'BlogController@edit',
            'as' => 'edit'
        ]);

        Route::post('/edit/{id}', 'BlogController@update');

        Route::get('/view/{id}', 'BlogController@show');
        
        /*
        Route::get('{blog}/restore', [
            'uses' => 'BlogController@restore',
            'as' =>'blog.restore'
        ]);
        */
        Route::post('{id}/storecomment', [
            'uses' => 'BlogController@storeComment',
            'as' => 'storeComment'
        ]);
    });

    /*routes for blog category*/
    Route::group(['prefix' => 'blog-category'], function () {
        Route::get('/','BlogCategoryController@getIndex');

        Route::get('/create','BlogCategoryController@create');
        Route::post('/create','BlogCategoryController@save');

        Route::get('/edit/{id}','BlogCategoryController@edit');
        Route::post('/edit/{id}','BlogCategoryController@update');

        Route::get('/delete/{id}','BlogCategoryController@delete');
    });
});

#blog routes frontend
Route::get('/','BlogController@getBlogList');

Route::group(['prefix' => 'blogs'], function () {
    Route::get('{slug}','BlogController@getBlog');
    Route::get('category/{slug}','BlogController@getCategoryBlog');
    Route::get('tag/{slug}','BlogController@getTagBlog');
    Route::get('author/{slug}','BlogController@getAuthorBlog');
});