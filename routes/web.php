<?php

use Illuminate\Support\Facades\Route;
use App\Models\Porto;
use App\Http\Controllers\ContactController;

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
    return view('home', [
        "title" => "Bagus Dermawan - Portfolio",
        "porto" => Porto::all()
    ]);
})->name('home');

Route::post('/send-email', [ContactController::class, 'send'])->name('send.email');