<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Show all articles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles/index', compact('articles'));
    }

    /**
     * Show a single article.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles/show', compact('article'));
    }

    /**
     * Show the page to create a new article.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('articles/create', compact('article'));
    }

    /**
     * Save a new article.
     *
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArticleRequest $request)
    {
        /*
        store(Request $request)
        2 method
        $this->validate($request, ['title' => 'required', 'body' => 'required']);
        */

        Article::create($request->all());

        return redirect('articles');
    }
}
