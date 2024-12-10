<?php

use App\Http\Controllers\ListingController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;

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


// common resource routes:
// index-show all listings
// show-show single listing
// create-show form to create new listing
// store-store ne listing
// edit-show form to edit listing
// update-update listing
// destroy-delete listing

Route::get('/', [ListingController::class, 'index']);


//store listing data
Route::post('/listings}',[ListingController::class, 'store']);






// show create form
Route::get('/listings/create',[ListingController::class, 'create']);




//single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);


// my example
Route::get("/rated", function(){
    return view('regi', [
        'list'=> Listing::all()
    ]);

});

 