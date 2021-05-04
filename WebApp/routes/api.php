<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\StateController;
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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/newState', [StateController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/search/{title}', [BookController::class, 'search']);
Route::get('/pull', [UserController::class, 'index']);
Route::post('/newBook', [BookController::class, 'newbook']);
Route::post('/newAddress', [AddressController::class, 'storeaddress']);
Route::get('/getAddress', [AddressController::class, 'getaddress']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']); 
});
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
