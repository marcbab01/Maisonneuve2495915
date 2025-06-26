<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create', 'edit', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::select()
            ->orderby('created_at', 'desc')
            ->paginate(10);
        return view('article.index', ["articles" => $article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:10|max:5000',
        ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté.');
        }

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = $user->id;
        $article->save();

        return redirect()->route('article.index')->with('success', 'Votre article a été publié avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:10|max:5000',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('article.show', $article->id)->with('success', 'Votre Article a été Modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

                return redirect()->route('article.index')->with('success', 'Article supprimé avec succès!');

    }

    public function pdf(Article $article)
    {
        $pdf = new Dompdf();
        $pdf->setPaper('letter', 'portrait');
        $pdf->loadHTML(view('article.show-pdf', ["article" => $article]));
        $pdf->render();
        return $pdf->stream('article.pdf');
    }
}
