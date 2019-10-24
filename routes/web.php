<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

		$actual = "NOMBRE,APELLIDO,EMAIL\n";
		$actual.= "NOMBRE,APELLIDO,EMAIL";

// Escribe el contenido al fichero
	file_put_contents('/home/blacksato/capacitacionintg/texto.csv', $actual);

	//event(new App\Events\PushArticle('hola'));
    //return view('welcome');
});


Auth::routes(['register'=>true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/get-file/{file}',function($file){
    if(Storage::disk('public')->exists('photos-articles/'.$file)){
  			return Response::make(Storage::disk('public')->get('photos-articles/'.$file), '200');
    }
    return Response::make(Storage::disk('public')->get('photos-articles/default.png'), '200');
})->name('get-image');


Route::get('test-mail',function(){
	$user=\App\User::findOrFail(1); //cambiar el uno por tu id de la BD y verificar el email

return	$user->notify(new \App\Notifications\SendCountArticle(
		\App\Core\Eloquent\Article::count()
	));/*
	return (new \App\Mail\ArticlesMail('dato'))->render();*/
});


Route::get('enviar',function(){
	$user=\App\User::findOrFail(1);
	
	Mail::to($user)
		->queue(
			new \App\Mail\ArticlesMail('dato')
		);
});

Route::get('job',function(){
 \App\Jobs\Sumar::dispatch(['n1'=>4,'n2'=>6]);
});

Route::get('roles-permisos',function(){

	$admin=Bouncer::role()->firstOrCreate([
    	'name' => 'admin',
   		'title' => 'Administrador del Sistema',
	]);

	$ab1 = Bouncer::ability()->firstOrCreate([
	    'name' => 'article-create',
	    'title' => 'creacion de artículos',
	]);

	$ab2 = Bouncer::ability()->firstOrCreate([
	    'name' => 'article-show',
	    'title' => 'observa artículos',
	]);

	$ab3 = Bouncer::ability()->firstOrCreate([
	    'name' => 'article-comentarios',
	    'title' => 'comenta en los artículos',
	]);


	Bouncer::allow($admin)->to($ab1);
	Bouncer::allow($admin)->to($ab2);
	Bouncer::allow($admin)->to($ab3);

	$user=\App\User::find(1);

	Bouncer::assign('admin')->to($user);

	return "Rol asignado";
});

//https://scotch.io/tutorials/introduction-to-laravel-dusk