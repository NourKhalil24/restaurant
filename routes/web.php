<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\front\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    require_once base_path('routes/admin.php');
});

Route::post('/contacts/message', [ContactController::class, 'sendMessage'])
    ->name('sendMessage');

Route::get('/home',[\App\Http\Controllers\front\HomeController::class , 'index'])->name('home');
Route::get('/book',[\App\Http\Controllers\front\BookControlller::class , 'book'])->name('book');
Route::get('/about',[\App\Http\Controllers\front\AboutController::class , 'about'])->name('about');
Route::get('/service',[\App\Http\Controllers\front\ServiceController::class , 'service'])->name('service');
Route::get('/menu',[\App\Http\Controllers\front\MenuController::class , 'menu'])->name('menu');
Route::get('/contact',[\App\Http\Controllers\front\ContactController::class , 'contact'])->name('contact');


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
