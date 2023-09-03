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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'] );

Route::get('about/', [PageController::class, 'about'] );
Route::get('services/', [PageController::class, 'services'] );

Route::get('gallery/', [PageController::class, 'gallery'] );
Route::get('contact/', [PageController::class, 'contact'] );
Route::get('values/', [PageController::class, 'values'] );
Route::get('team/', [PageController::class, 'team'] );
Route::get('clients/', [PageController::class, 'clients'] );

// start of projects
Route::get('projects/', [PageController::class, 'projects'] );
Route::get('night-club/', [PageController::class, 'nightclub'] );
Route::get('mbweni/', [PageController::class, 'mbweni'] );
Route::get('T-Mark/', [PageController::class, 'tmark'] );
Route::get('DRC-Embassy/', [PageController::class, 'drcembassy'] );
Route::get('PSI-Tanzania/', [PageController::class, 'psitanzania'] );
Route::get('Kisota/', [PageController::class, 'kisota'] );
Route::get('ZIC/', [PageController::class, 'zic'] );
Route::get('TPDC/', [PageController::class, 'tpdc'] );
Route::get('CFAO/', [PageController::class, 'cfao'] );
Route::get('BLUE-COAST/', [PageController::class, 'bluecoast'] );

