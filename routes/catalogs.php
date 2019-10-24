<?php

//Route::group(['middleware'=>'visitar'],function(){
	Route::resource('categories','Catalogs\CategoryController');
//});




Route::resource('articles','Catalogs\ArticleController');

//->except(['show','index']);
//->only(['index'])
