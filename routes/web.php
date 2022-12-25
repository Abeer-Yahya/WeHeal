<?php

use App\Http\Controllers\ProfileController;
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

Route::get('register', function () {
    return view('default');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/**********Views***********/
/***********Viwes***********/
Route::get('/', function () {
    return view('index');
});

Route::get('what', function () {
    return view('what');
});

Route::get('who', function () {
    return view('who');
});

Route::get('careers', function () {
    return view('careers');
});

Route::get('donate', function () {
    return view('donate');
});

Route::get('resources', function () {
    return view('resources');
});

Route::get('q&a', function () {
    return view('qa');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('start', function () {
    return view('start');
});

Route::get('membership', function () {
    return view('membership');
});

Route::get('stories', function () {
    return view('stories');
});
