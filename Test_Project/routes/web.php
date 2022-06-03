<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/home',[PagesController::class, 'home'])->name('home');
Route::get('/home/product',[PagesController::class, 'product'])->name('product');;
Route::get('/product/list',[PagesController::class,'list'])->name('product.list');
Route::get('/home/team',[PagesController::class, 'team'])->name('team');;
Route::get('/home/about',[PagesController::class, 'about'])->name('about');;
Route::get('/home/contact',[PagesController::class, 'contact'])->name('contact');;




