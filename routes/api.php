<?php

use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\SetController;
use App\Http\Controllers\Api\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/sets", [SetController::class, "index"]);
Route::get("/sets/{id}", [SetController::class, "single"]);
Route::get("/sets/{id}/cards", [SetController::class, "cards"]);

Route::get("/cards", [CardController::class, "index"]);
Route::get("/cards/{id}", [CardController::class, "single"]);

Route::get("/wishlist/add", [WishlistController::class, "add"]);
Route::get("/wishlist/remove", [WishlistController::class, "remove"]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
