<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// BackEnd Controllers

use App\Http\Controllers\backend\ArticleController;
use App\Http\Controllers\backend\ArticleImagesController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
// Front End Routes
Route::get('/', [ArticleController::class, 'index'])->name('home');

// Backend Router
Route::group(['prefix' => 'admin/dashboard'], function () {
    Route::get('article/{article_id}/copyImage', [ArticleController::class,'transferImage'])->name('article.openTransferImage');
    Route::POST('article/transfer-image', [ArticleController::class, 'store_transferImage'])->name('article.createTransferImage');

    // Resources Routes
    Route::resources([
        'article' => ArticleController::class,
        'articleImages' => ArticleImagesController::class,
    ]);

});
