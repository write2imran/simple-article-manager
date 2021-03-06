<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = \App\Article::all();
        //dd(compact('articles'));
        return view('article.index', compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName='';

        if($request->has('imagepath')) {
            $file = $request->file('imagepath');
            $fileName = time(). '-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/', time(). '-'.$file->getClientOriginalName());    
        }
        
        $article = new \App\Article;
        $article->title = $request->get('title');
        $article->heading = $request->get('heading');
        $article->detail = $request->get('detail');

        $file = $request->file('imagepath');

        $article->imagepath = $fileName;
    
        //dd($file);

        \App\Article::create($article->toArray());
        return back();        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = \App\Article::findOrFail($request->id);

        $article->update($request->all());

        return back();        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $article = \App\Article::findOrFail($request->id);
       $article->delete();
        
       return back();                
    }
}
