<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/mainstories', [HomeController::class, 'mainstories'])->name('mainstories');
Route::get('/weather', [HomeController::class, 'weather'])->name('weather');
Route::get('/special', [HomeController::class, 'special'])->name('special');
Route::get('/kanpurcentral', [HomeController::class, 'kanpurcentral'])->name('kanpurcentral');
Route::get('/bithoor', [HomeController::class, 'bithoor'])->name('bithoor');
Route::get('/iit', [HomeController::class, 'iit'])->name('iit');
Route::get('/art', [HomeController::class, 'art'])->name('art');
Route::get('/temple', [HomeController::class, 'temple'])->name('temple');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/rich', [HomeController::class, 'rich'])->name('rich');
Route::get('/food', [HomeController::class, 'food'])->name('food');
Route::get('/manchester', [HomeController::class, 'manchester'])->name('manchester');
Route::get('/famous',[HomeController::class, 'famous'])->name('famous');
Route::get('/college',[HomeController::class, 'college'])->name('college');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/webdesign',[HomeController::class, 'webdesign'])->name('webdesign');
Route::get('/appdev',[HomeController::class, 'appdev'])->name('appdev');
Route::get('/seo',[HomeController::class, 'seo'])->name('seo');
Route::get('/ai',[HomeController::class, 'ai'])->name('ai');
Route::get('/trend',[HomeController::class, 'trend'])->name('trend');

Route::get('login',[\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
Route::post('login',[\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::get('register',[\App\Http\Controllers\AuthController::class, 'registerForm'])->name('register');
Route::post('register',[\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');


// DASHBOARD:::::

Route::get('/dashboard', [DashboardController::class, 'index'])->name('main.dashboard');

// Student routes
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/create', [DashboardController::class, 'create'])->name('create');
    Route::post('/store', [DashboardController::class, 'store'])->name('store');
    Route::get('/edit/{dashboard}', [DashboardController::class, 'edit'])->name('edit');
    Route::put('/update/{dashboard}', [DashboardController::class, 'update'])->name('update'); // Changed to PUT for update
    Route::delete('/delete/{dashboard}', [DashboardController::class, 'destroy'])->name('delete'); 
});
// blog
Route::prefix('blog')->name('blog.')->group(function(){
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('store');
    Route::get('/edit{blog}', [BlogController::class, 'edit'])->name('edit');
    Route::put('/update{blog}', [BlogController::class, 'update'])->name('update');
    Route::delete('/delete/{blog}', [BlogController::class, 'destroy'])->name('destroy');

});


Route::resource('categories', CategoryController::class);

// Category routes
Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{category}', [CategoryController::class, 'destroy'])->name('delete');
});


