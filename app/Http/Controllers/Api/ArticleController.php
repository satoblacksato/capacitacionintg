<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Eloquent\Article;
use Facades\App\Core\Facades\ListWithCache;
class ArticleController extends Controller
{
    public function listArticles(Request $request){
    	if(!$request->ajax()){
    		return abort(401);
    	}
    	
    	return response()->json(
    		ListWithCache::getListArticlesByServices()
    	);


    }
}
