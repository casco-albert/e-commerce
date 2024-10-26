<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PromotionController;


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
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
Route::get('/products', [ProductController::class, 'index'])->name('products');


Route::get('/contacto', [ContactController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactController::class, 'send'])->name('contacto.send');

Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions');

