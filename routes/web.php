<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// HomeController 
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/act',[HomeController::class,'act'])->name('act');
Route::get('/rules',[HomeController::class,'rules'])->name('rules');
Route::get('/directives',[HomeController::class,'directives'])->name('directives');
Route::get('/fdi',[HomeController::class,'fdi'])->name('fdi');
Route::get('/accounting',[HomeController::class,'accounting'])->name('accounting');
Route::get('/notices',[HomeController::class,'notices'])->name('notices');
Route::get('/taxation',[HomeController::class,'taxation'])->name('taxation');
Route::get('/finance',[HomeController::class,'finance'])->name('finance');
Route::get('/otherjob',[HomeController::class,'otherjob'])->name('otherjob');
Route::get('/CAREER/Jobs-At-Robin/Contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');




