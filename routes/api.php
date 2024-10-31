<?php


use App\Http\Controllers\ArtikelsController;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


 Route :: get ('/articles',[ArtikelsController :: class,'index']);
 Route :: post ( '/artiles/add ', [ ArtikelsController :: class,'store']);