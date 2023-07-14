<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('homePage');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create'); 
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store'); 
Route::get('article/user', [ArticleController::class, 'user'])->name('article.user'); 
Route::get('/article/show/{idArticle}', [ArticleController::class, 'show'])->name('article.show'); 
Route::get('article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit'); 
Route::put('articles/update/{article}', [ArticleController::class, 'update'])->name('article.update'); 
Route::delete('article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy'); 
// email
Route::get('/contactUs', [PublicController::class, 'contact'])->name('contact.us'); 
Route::post('/contactUs/submit', [PublicController::class, 'submit'])->name('contact.submit'); 
Route::get('/thankYou/page/{nameRedirect}', [PublicController::class, 'thank'])->name('contact.thank'); 