<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DishesController;
//use App\Http\Controllers\admin\DshesController;
use App\Http\Controllers\admin\PeopleControler;
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
Route::get('/root', [AdminController::class,'dashboard'])->name('dashboard');

Route::post('/people',[PeopleControler::class ,'add_people'])->name('people');

Route::get('/people/add',[PeopleControler::class ,'form_people'])->name('add_people');
Route::get('/people/table',[PeopleControler::class ,'table_people'])->name('table_people');
Route::get('people/{id}',[PeopleControler::class , 'destroy'])->name('people.destroy');


//Route::get('/dishes',[DshesController::class ,'dishes'])->name('dishes');
Route::get('/contact',[ContactController::class ,'contact'])->name('contact');

Route::resource('dishes','\App\Http\Controllers\admin\DishesController');
