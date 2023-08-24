<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/', [PageController::class, 'home'] );

Route::get('about/', [PageController::class, 'about'] );
Route::get('services/', [PageController::class, 'services'] );

Route::get('gallery/', [PageController::class, 'gallery'] );
Route::get('contact/', [PageController::class, 'contact'] );
Route::get('values/', [PageController::class, 'values'] );
Route::get('team/', [PageController::class, 'team'] );
Route::get('clients/', [PageController::class, 'clients'] );
Route::get('projects/', [PageController::class, 'projects'] );


