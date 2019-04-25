<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class FrontController extends Controller
{
    
    public function __construct()
    {
        Carbon::setlocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate(6);

        $articles->each(function($articles){
            $articles->images;
            $articles->category;
        });

        return view('front.index')->with([
            'articles' => $articles
        ]);
    }


    public function show($title)
    {
        $article = Article::where('slug','=', $title)->first();

        $articlesRelationados = Article::where('category_id','=', $article->category_id)->take(4)->get();
        $articlesRecends = Article::orderBy('id','ASC')->take(3)->get();
        //dd($articlesRecends);

        return view('front.show')->with([
            'article' => $article, 
            'articlesRelationados' => $articlesRelationados,
            'articlesRecends' => $articlesRecends
        ]);
    }

    public function searchByArticle(Request $request)
    {   

        $articles = Article::search($request->searchArticle)->orderBy('id', 'DESC')->paginate(6);
        $articles->each(function($articles){
            $articles->image;
            $articles->category;
        });

        return view('front.index')->with([
            'articles' => $articles,
            'title' => $request->searchArticle
        ]);
    }

    public function searchByCategory($name)
    {
        $category = Category::searchByCategory($name)->first();
        $articles = $category->articles()->paginate(6);

        $articles->each(function($articles){
            $articles->images;
            $articles->category;
        });

        return view('front.index')->with('articles', $articles);
    }

    public function searchByTag($name)
    {
        $tag = Tag::searchByTag($name)->first();
        $articles = $tag->articles()->paginate(6);

        $articles->each(function($articles){
            $articles->images;
            $articles->category;
        });

        return view('front.index')->with('articles', $articles);
    }


}
