<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

use App\Http\Controllers\FotoController;
route::resource("/foto", FotoController::class);

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

Route::get('/', function () {
    return view('welcome');
});

route::get("/album", [AlbumController::class, "index"]);

route::delete("/album/{id}", [AlbumController::class, "destroy"]);

route::get("/album/create", [AlbumController::class, "create"])->name("album.create");
route::post("/album", [AlbumController::class, "store"])->name("album.store");

route::get("/album/{id}", [AlbumController::class, "edit"]);
route::put("/album/{id}", [AlbumController::class, "update"])->name("album.update");



