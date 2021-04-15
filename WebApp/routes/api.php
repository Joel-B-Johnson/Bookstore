<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthUserController;
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

//Route::resource('books', BookController::class);

//Public routes
Route::post('/register', [AuthUserController::class, 'register']);
Route::post('/login', [AuthUserController::class, 'login']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/search/{title}', [BookController::class, 'search']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::get('/books/{id}', [BookController::class, 'destroy']);
});

// 
// 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
