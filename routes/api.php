<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PortafolioController;


//Route::resource('portafolios', PortafolioController::class);

//php artisan route:list --path=api

Route::get('/portafolios',[PortafolioController::class,'index']);

Route::post('/portafolios',[PortafolioController::class,'store']);
 Route::get('/portafolios/{portafolio}',[PortafolioController::class,'show']);

Route::put('/portafolios/{portafolio}',[PortafolioController::class,'update']);
Route::delete('/portafolios/{portafolio}',[PortafolioController::class,'destroy']);

