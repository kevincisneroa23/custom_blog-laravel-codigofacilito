<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });
        return view('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->lists('name', 'id');
        $tags = Tag::orderBy('id', 'DESC')->lists('name', 'id');

        return view('admin.articles.create')->with(['categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->slug = str_slug($article->title, '_');
        $article->save();

        if(!empty($request->tags)){
            $article->tags()->sync($request->tags);
        }

        //Manipulacion de Imagen
        if(!empty($request->image)){

            $file = $request->file('image');
            $name = 'blog_portada_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '\images\articles\\';
            $file->move($path, $name);

            $image = new Image($request->all());
            $image->name = $name;
            $image->article()->associate($article);
            $image->save();

        }

        flash('Registro Exitoso | Articulo: '. $article->title . '.')->success();
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $article_image = Image::where('article_id', $id)->first();

        $categories = Category::orderBy('id', 'DESC')->lists('name', 'id');
        $tags = Tag::orderBy('id', 'DESC')->lists('name', 'id');
        $article_tags = $article->tags->lists('id')->toArray();
        
        $article->user;
    
        return view('admin.articles.edit')->with([
            'article' => $article, 
            'categories' => $categories, 
            'tags' => $tags,
            'article_tags' => $article_tags,
            'article_image' => $article_image
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id); 
        $article->slug = str_slug($article->title, '_');
        $article->fill($request->all());
        $article->save();
        $article->tags()->sync($request->tags);
        
        //=====MANIPULATE IMAGE=====
        if(!empty($request->image))
        {   
            //DEFINE PATH
            $path = public_path() . '\images\articles\\';

            //=====IMAGE OLD =====
            //CHECK IMAGE DB
            $image_article = Image::where('article_id', $id)->first();
            if(!empty($image_old)){ 
                //CHECK IMAGE DIRECTORY
                $image_old_path = $path . $image_old->name;
                if(file_exists($image_old_path)){ 
                    //DELETE IMAGE DIRECTORY
                    unlink($image_old_path); 
                    //DELETE IMAGE DB
                    $image_old->delete();
                }
            }

            //=====IMAGEN NEW =====
            $file = $request->file('image');
            $name = 'blog_portada_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $name);

            $image_new = new Image($request->all());
            $image_new->name = $name;
            $image_new->article()->associate($article);
            $image_new->save();
        }

        flash('Actualizacion Exitosa | Articulo: ' . $article->title . '.')->success();
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $image_article = Image::where('article_id', $id)->first();

        //DELETE IMAGE DB
        $article->delete();
        
        //DELETE IMAGE DIRECTORY
        $path = public_path() . '\images\articles\\';    
        $image_path = $path . $image_article->name;

        if(!empty($image_article)){ 
            if(file_exists($image_path)){ 
                unlink($image_path); 
            }
        }

        flash('Eliminación Exitosa | Articulo: ' . $article->title . '.')->success();
        return redirect()->route('admin.articles.index');
    }
}
