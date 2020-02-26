<?php

namespace App\Http\Controllers;

use Components\Articles\Models\Article;

class ArticleController extends Controller
{
    public function article($id)
    {
        $article = Article::findOrFail($id);

        return response()->view('article', compact('article'));
    }
}
