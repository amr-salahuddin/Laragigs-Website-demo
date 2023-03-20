<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
//LISTINGS:
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Show All Lists
Route::get('/', [ListingController::class, 'index']);

//Create List
Route::get('/listings/create',[ListingController::class,'create']);


//Store List
Route::post('/listings',[ListingController::class,'store']);

//Edit List
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Update List
Route::put('/listings/{listing}',[ListingController::class,'update']);
//Delete List
Route::delete('/listings/{listing}',[ListingController::class,'delete']);
//Show List
Route::get('/listings/{listing}',[ListingController::class,'show']);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Users
//+++++++++++++++++++++++++++++++++++++++++++++++++
//Register Form
Route::get('/register',[UserController::class,'create']);
//Register User
Route::post('/register',[UserController::class,'store']);











