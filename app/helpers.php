<?php

function saveFile($namefile, $objFile){
	\Storage::disk('public')
				->put('/photos-articles/'.$namefile,
					 \File::get($objFile));
}

function currentUser(){
	return auth()->user();
}

function authorizePutPost($method, $action){
	if($method=='POST'){
		return currentUser()->can($action.'-create');
	}
	if($method=='PUT'){
		return currentUser()->can($action.'-update');
	}
}