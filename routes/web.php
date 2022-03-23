<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get("/",[HomeController::class,"create"]);
Route::get("/chat",[ChatController::class,"create"])->middleware('auth')->name("chat");
Route::get("/chat/messages",[ChatController::class,"fetchMessages"])->middleware('auth')->name("chat.messages");
Route::post("/chat/message",[ChatController::class,"sendMessage"])->middleware('auth')->name("chat.send");
Route::get("/profile",[HomeController::class,"profile"])->middleware('auth');
Route::post("/profile",[HomeController::class,"profileStore"])->middleware('auth')->name("account.profile");
require __DIR__.'/auth.php';
require __DIR__.'/customer.php';
