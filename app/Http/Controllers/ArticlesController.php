<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'image_couverture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'texte' => 'required',
            //'images[]' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $CouverturePath = $request->file('image_couverture')->store('image_couverture');


        $article = Article::create([
            'titre' => $request->input('titre'),
            'texte' => $request->input('texte'),
            //'student_number' => $request->input('student_number'),
            'image_couverture' => $CouverturePath,
        ]);

        return redirect('/article')->with('success', 'Article added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
