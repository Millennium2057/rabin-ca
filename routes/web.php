<?php

use App\Http\Controllers\Admin\ActsAndRulesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Auth\AuthController;
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
Route::post('form/Contact', [HomeController::class, 'storeContact'])->name('store.contact');

Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blogsdetail',[HomeController::class,'blogsdetail'])->name('blogsdetail');
Route::get('/training',[HomeController::class,'training'])->name('training');
Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');
Route::get('/TOOLS/Calculator/EMIcalculator',[HomeController::class,'emicalculator'])->name('emicalculator');
Route::get('/TOOLS/Calculator/TaxCalculator',[HomeController::class,'taxcalculator'])->name('taxcalculator');
Route::get('/TOOLS/Calculator/Tax-Rates',[HomeController::class,'taxrates'])->name('taxrates');
Route::get('/TOOLS/Calculator/Date-Calculator',[HomeController::class,'datecalculator'])->name('datecalculator');

//login route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');






//admin route
Route::middleware('auth')->group(function () {

    
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');


//acts, rules & directive route
Route::get('/add-ActAndRule', [ActsAndRulesController::class, 'addActAndRules'])->name('add.ActsAndRules');
Route::get('/show-ActAndRule', [ActsAndRulesController::class, 'showActAndRules'])->name('show.ActsAndRules');
Route::post('/store-ActAndRule', [ActsAndRulesController::class, 'storeActAndRules'])->name('store.ActsAndRules');
Route::get('/edit-ActAndRule/{id}', [ActsAndRulesController::class, 'editActAndRules'])->name('edit.ActsAndRules');
Route::post('/update-ActAndRule/{id}', [ActsAndRulesController::class, 'updateActAndRules'])->name('update.ActsAndRules');
Route::get('/delete-ActAndRule/{id}', [ActsAndRulesController::class, 'deleteActAndRules'])->name('delete.ActsAndRules');


//contact route
Route::get('/show-Contact',[ContactController::class,'showContact'])->name('show.contact');
Route::get('/view-Contact',[ContactController::class,'viewContact'])->name('view.contact');


//blog route
Route::get('/add-Blog', [BlogController::class, 'addBlog'])->name('add.Blog');
Route::get('/show-Blog', [BlogController::class, 'showBlog'])->name('show.Blog');
Route::get('/store-Blog', [BlogController::class, 'storeBlog'])->name('store.Blog');
Route::get('/edit-Blog', [BlogController::class, 'editBlog'])->name('edit.Blog');
Route::get('/update-Blog', [BlogController::class, 'updateBlog'])->name('update.Blog');
Route::get('/delete-Blog', [BlogController::class, 'deleteBlog'])->name('delete.Blog');



//logout route
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});



