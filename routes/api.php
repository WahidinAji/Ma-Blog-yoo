<?php

use App\Http\Controllers\Article\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('articles', ArticleController::class);
//Route::get('articles', [ArticleController::class, 'index']);
//Route::post('articles/{article:slug}', [ArticleController::class, 'show']);
// Route::apiResource('articles',ArticleController::class);
Route::post('articles', [ArticleController::class, 'index']);
