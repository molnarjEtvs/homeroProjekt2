<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homersekletek;
use App\Http\Controllers\TeremRogzites;
use App\Http\Controllers\HomersekletRogzites;
use App\Http\Controllers\Aktualis;


Route::get('/',[Aktualis::class,"getContent"]);

Route::get("/homersekletek",[Homersekletek::class,"getContent"]);

Route::get("/terem-rogzites",[TeremRogzites::class,"getContent"]);
Route::post("/terem-rogzites",[TeremRogzites::class,"rogzites"]);

Route::get("/homerseklet-rogzites",[HomersekletRogzites::class,"getContent"]);
Route::post("/homerseklet-rogzites",[HomersekletRogzites::class,"rogzites"]);

Route::get('/terem-lista', [TeremRogzites::class,"teremLista"]);