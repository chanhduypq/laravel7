<?php

Route::get('/course', [
    'uses' => 'CourseController@index',
    'as' => 'course'
])->middleware('auth');
/**
 * sample for download
 */
//Route::get('/course/download/{id}/{columnName}', [
//    'uses' => 'CourseController@download',
//    'as' => 'course.download'
//]);
Route::get('/course/create', [
    'uses' => 'CourseController@create',
    'as' => 'course.create'
])->middleware('auth')->middleware('auth.admin');
Route::post('/course/store', [
    'uses' => 'CourseController@store',
    'as' => 'course.store'
])->middleware('auth')->middleware('auth.admin');
Route::get('/course/edit/{primaryKeyValue}', [
    'uses' => 'CourseController@edit',
    'as' => 'course.edit'
])->middleware('auth')->middleware('auth.admin');
Route::put('/course/update/{primaryKeyValue}', [
    'uses' => 'CourseController@update',
    'as' => 'course.update'
])->middleware('auth')->middleware('auth.admin');
Route::delete('/course/delete/{primaryKeyValue}', [
    'uses' => 'CourseController@delete',
    'as' => 'course.delete'
])->middleware('auth')->middleware('auth.admin');

