<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//-------------------------------------------------------------------------
//                                States Routes
//-------------------------------------------------------------------------

Route::get('listing_state',[StateController::class,'listing']);
Route::get('add_state',[StateController::class,'add']);
Route::get('edit_state/{id}',[StateController::class,'edit']);
Route::get('update_state/{id}',[StateController::class,'update']);
Route::get('delete_state/{id}',[StateController::class,'delete']);




//-------------------------------------------------------------------------
//                                Users Routes
//-------------------------------------------------------------------------

Route::get('listing_user',[UserController::class,'listing']);
Route::get('add_user',[UserController::class,'add']);
Route::get('edit_user/{id}',[UserController::class,'edit']);
Route::get('update_user/{id}',[UserController::class,'update']);
Route::get('delete_user/{id}',[UserController::class,'delete']);






//-------------------------------------------------------------------------
//                                Cars Routes
//-------------------------------------------------------------------------

Route::get('listing_car',[CarController::class,'listing']);
Route::get('add_car',[CarController::class,'add']);
Route::get('edit_car/{id}',[CarController::class,'edit']);
Route::get('update_car/{id}',[CarController::class,'update']);
Route::get('delete_car/{id}',[CarController::class,'delete']);









//-------------------------------------------------------------------------
//                                Models Routes
//-------------------------------------------------------------------------

Route::get('listing_model',[ModelController::class,'listing']);
Route::get('add_model',[ModelController::class,'add']);
Route::get('edit_model/{id}',[ModelController::class,'edit']);
Route::get('update_model/{id}',[ModelController::class,'update']);
Route::get('delete_model/{id}',[ModelController::class,'delete']);





//-------------------------------------------------------------------------
//                                Delivery Routes
//-------------------------------------------------------------------------

Route::get('listing_delivery',[DeliveryController::class,'listing']);
Route::get('add_delivery',[DeliveryController::class,'add']);
Route::get('edit_delivery/{id}',[DeliveryController::class,'edit']);
Route::get('update_delivery/{id}',[DeliveryController::class,'update']);
Route::get('delete_delivery/{id}',[DeliveryController::class,'delete']);







