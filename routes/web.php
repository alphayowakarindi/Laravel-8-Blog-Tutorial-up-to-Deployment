<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Models\Category;
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

// To welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// To blog page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// To create blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

// To single blog post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');


// To edit single blog post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');

// To update single blog post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');

// To delete single blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');

// To store blog post to the DB
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

// To about page
Route::get('/about', function(){
    return view('about');
})->name('about');

// To contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// To Send data to email.
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Category resource controller
Route::resource('/categories', CategoryController::class);

// The resource controller above under the hood.

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
