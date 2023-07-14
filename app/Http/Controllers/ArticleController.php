<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ModifyRequest;

class ArticleController extends Controller
{

                  
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create(
            [
                'author'=> Auth::user()->name,
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'img'=> $request->has('img')? $request->file('img')->store('public/cover') : '/img/default.jpg',

            ]
            );
            
        return redirect(route('homePage'))->with('message', 'Articolo aggiunto con successo'); 
    }

    public function user(){
        $articles= Article::where('author', Auth::user()->name)->get(); 
        return view('articles/user', compact('articles')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article, $idArticle)
    {
        $articles= Article::all(); 
        foreach($articles as $article){
            if($idArticle==$article['id']){
                return view('articles/show', ['article'=>$article]); 
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles/edit', compact('article')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModifyRequest $request, Article $article)
    {
        $article->title= $request->title;
        $article->description= $request->description;
        $article->img= $request->has('img')? $request->file('img')->store('public/cover') : $article->img; 
        $article->save(); 

        return redirect(route('article.show', ["idArticle"=>$article['id']]))->with('message', 'articolo modificato con successo!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('homePage'))->with('message', 'articolo eliminato con successo!'); 
    }
}
