<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article',[ArticleController::class,'showArticle']);
Route::get('/article/{article}',[ArticleController::class,'articleDetails']);
Route::get('/article/tag/{tag}',[ArticleController::class,'articleTag']);
