<?php
/*
|--------------------------------------------------------------------------
| API - ServiceProvider Web Routes
|--------------------------------------------------------------------------
|
| this contained all service provider api routes
|
*/

/* Service Provider API routes */
Route::group(['prefix' => 'v1/service-provider', 'middleware' => 'auth:api'], function() {
	/** Medical Education **/
    Route::group(['prefix' => 'medical-education', 'as' => 'medical-education.'], function() {
        Route::resource(
            'degree',
            'ServiceProvider\MedicalEducation\DegreeController',
            [
                'except' => [ 'edit', 'create' ],
                'parameters' => [ 'degree' => 'id' ],
            ]
        );

        Route::resource(
            'training',
            'ServiceProvider\MedicalEducation\TrainingController',
            [
                'except' => [ 'edit', 'create' ],
                'parameters' => [ 'training' => 'id' ],
            ]
        );

        Route::resource(
            'certificate',
            'ServiceProvider\MedicalEducation\CertificateController',
            [
                'except' => [ 'edit', 'create' ],
                'parameters' => [ 'certificate' => 'id' ],
            ]
        );

        Route::resource(
            'experience',
            'ServiceProvider\MedicalEducation\ExperienceController',
            [
                'except' => [ 'edit', 'create' ],
                'parameters' => [ 'experience' => 'id' ],
            ]
        );
    });
});