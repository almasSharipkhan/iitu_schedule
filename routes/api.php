<?php
/*
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Lessons
    Route::apiResource('lessons', 'LessonsApiController');

    // Groups
    Route::apiResource('school-classes', 'GroupsApiController');
});

//Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::get('users', 'UsersApiController');

    // Lessons
    Route::apiResource('lessons', 'LessonsApiController');

    // Groups
    Route::apiResource('school-classes', 'GroupsApiController');
});
*/

Route::get('users', 'Api\V1\Admin\UsersApiController@getAllUsers');

Route::get('lessons', 'Api\V1\Admin\LessonsApiController@getLessons');

//Route::get('/user', 'Api\V1\Admin\UserApiController@getAllUsers');



