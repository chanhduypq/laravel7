<?php 

Route::post('/login', [
    'uses' => 'AccountController@login',
    'as' => 'login'
]);
Route::get('/logout', [
    'uses' => 'AccountController@logout',
    'as' => 'logout'
]);
Route::post('/changePassword', [
    'uses' => 'AccountController@changePassword',
    'as' => 'changePassword'
]);


