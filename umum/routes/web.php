<?php

Route::get('/', 'PagesController@index');
Route::get('/add', 'PagesController@store');
Route::get('/search','PagesController@search');
