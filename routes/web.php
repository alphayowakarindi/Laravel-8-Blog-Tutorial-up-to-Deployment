<?php

use App\Http\Controllers\WelcomeController;
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

// www.alphayo.com
// www.alphayo.com/

// Using closure
// Route::get('/', function () {
//     return view('welcome');
// });


// Using controller

Route::get('/', [WelcomeController::class, 'index']);



