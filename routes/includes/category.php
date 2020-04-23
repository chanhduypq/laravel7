<?php

Route::get('/category', [
    'uses' => 'CategoryController@index',
    'as' => 'category'
])->middleware('auth');
Route::get('/category/create', [
    'uses' => 'CategoryController@create',
    'as' => 'category.create'
])->middleware('auth')->middleware('auth.admin');
Route::post('/category/store', [
    'uses' => 'CategoryController@store',
    'as' => 'category.store'
])->middleware('auth')->middleware('auth.admin');
Route::get('/category/edit/{primaryKeyValue}', [
    'uses' => 'CategoryController@edit',
    'as' => 'category.edit'
])->middleware('auth')->middleware('auth.admin');
Route::put('/category/update/{primaryKeyValue}', [
    'uses' => 'CategoryController@update',
    'as' => 'category.update'
])->middleware('auth')->middleware('auth.admin');
Route::delete('/category/delete/{primaryKeyValue}', [
    'uses' => 'CategoryController@delete',
    'as' => 'category.delete'
])->middleware('auth')->middleware('auth.admin');

