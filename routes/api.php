<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//index
Route::get("books", [BookController::class, "index"]);

//show
Route::get("books/{book}", [BookController::class, "show"]);
