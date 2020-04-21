<?php

use Illuminate\Http\Request;

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

Route::apiResources([
    'articles'=>'ArticleController'
]);

//Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
//Route::put('/articles', [\App\Http\Controllers\ArticleController::class, 'store']);
//Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
//Route::patch('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'update']);
//Route::delete('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy']);
