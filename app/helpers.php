<?php

function saveFile($namefile, $objFile){
	\Storage::disk('public')
				->put('/photos-articles/'.$namefile,
					 \File::get($objFile));
}

function currentUser(){
	return auth()->user();
}