<?php


use App\Http\Controllers\BlogController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('home');

Route::get('/app', [WebsiteController::class, 'app'])->name('app');

Route::get('blogs', [WebsiteController::class, 'blogs'])->name('blogs');
// Route::get('blog/{slug}', [WebsiteController::class, 'blog'])->name('blog');

Route::get('plans', [WebsiteController::class, 'plans'])->name('plans');
Route::get('plan/{slug}', [WebsiteController::class, 'plan'])->name('plan');

Route::get('affiliates', [WebsiteController::class, 'affiliates'])->name('affiliates');

Route::get('about-us', [WebsiteController::class, 'about'])->name('about');

Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms');
Route::get('privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('faq', [WebsiteController::class, 'faq'])->name('faq');

Route::get("login", [UserController::class, 'login'])->name('login');
Route::get("login", [UserController::class, 'login'])->name('signin');

Route::get("signup", [UserController::class, 'signup'])->name('signup');

Route::post("login", [UserController::class, 'login_post'])->name('login.post');
Route::post("signup", [UserController::class, 'signup_post'])->name('signup.post');


Route::group(['middleware' => 'auth'], function () {
    Route::get("dashboard", [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get("logout", [DashboardController::class, 'logout'])->name('logout');


    // Route::resource("blogs", BlogController::class);


    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::post('/profile', [DashboardController::class, 'profile_post'])->name('profile.post');
});
