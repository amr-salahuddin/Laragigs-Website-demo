<?php

use App\Http\Controllers\ListingController;
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

//Show All
Route::get('/', [ListingController::class, 'index']);

//Create
Route::get('/listings/create',[ListingController::class,'create']);


//Store
Route::post('/listings',[ListingController::class,'store']);

//Edit
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Update
Route::put('/listings/{listing}',[ListingController::class,'update']);










Route::get('/listings/{listing}',[ListingController::class,'show']);
