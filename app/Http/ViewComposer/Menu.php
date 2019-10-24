<?php

namespace App\Http\ViewComposer;
use Illuminate\View\View;
class Menu{

	public function compose(View $view){
		$view->with([
			'menu'=>'articles',
			'hora'=>date('H:i')
		]);
		//Cache::forget('roles');
	}
}

/*
session()->put('key','value');
session()->get('key','default');
session()->forget('key');
session()->flush();
*/