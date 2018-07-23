<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Resources\Article\ArticleCollection;

class ApiArticlesController extends Controller
{
 	public function index()
    {
        return new ArticleCollection(Article::all());
    }
 
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    public function store(Request $request)
    {
    	$article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return response()->json($article, 200);

        return $article;
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
