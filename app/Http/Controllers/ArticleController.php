<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function showArticle()
    {
        return view('article', ['article' => User::find(Auth::user()->id)->articles]);
    }
    public function articleDetails(Article $article)
    {
        return view('articledetails', ['article' => $article]);
    }
    public function articleTag(Tag $tag)
    {
        return view('tag',['tag'=>$tag]);
    }
}
