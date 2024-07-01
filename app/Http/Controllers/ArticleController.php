<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $tags = Tag::all();
        return view('articles.index', compact('articles', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'introduction' => 'required|string|max:255',
            'body' => 'required|string',

        ]);

        $article = Article::create($validatedData);

        $article->tags()->attach($request->tags);



        return redirect()->route('articles.index')->with('message', 'Articolo pubblicato');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $tags = Tag::all();
        return view('articles.show', compact('article', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'introduction' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article->update($validatedData);
        $article->tags()->sync($request->tags);

        return redirect()->route('articles.index')->with('message', 'Articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();
        $article->delete();
        return redirect()->route('articles.index')->with('message', 'Articolo Cancellato');
    }
}
