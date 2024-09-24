<?php


use App\Http\Controllers\BlogController;

use App\Http\Controllers\DashboardController;

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
Route::get('get_quote', [WebsiteController::class, 'get_quote'])->name('get_quote');
Route::get('quote/{slug}', [WebsiteController::class, 'show_quote'])->name('show_quote');
Route::get('retrive_quote', [WebsiteController::class, 'retrive_quote'])->name('retrive_quote');
Route::post('track_quote', [WebsiteController::class, 'track_quote'])->name('track_quote');

Route::get('quote/show_detail/{id}', [WebsiteController::class, 'forced_quote'])->name('quote.forced');
Route::get('booking_details/{id}', [WebsiteController::class, 'booking_details'])->name('booking_details');
Route::post('booking_details', [WebsiteController::class, 'save_booking_details'])->name('booking_details.save');

Route::get('payment/{id}', [WebsiteController::class, 'payment'])->name('quote.payment');
Route::get('payment_success/{id}', [WebsiteController::class, 'payment_success'])->name('quote.payment_success');
Route::get('strip_success/{id}', [WebsiteController::class, 'stripe_success'])->name('quote.stripe_success');



Route::post('store_quote', [WebsiteController::class, 'store_quote'])->name('store_quote');
Route::post('store_location', [WebsiteController::class, 'store_location'])->name('store_location');

Route::get('/models/{make_id}', [WebsiteController::class, 'getModels']);

Route::get('blog', [WebsiteController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [WebsiteController::class, 'blog'])->name('blog');

Route::get('service', [WebsiteController::class, 'services'])->name('services');
Route::get('service/{slug}', [WebsiteController::class, 'service'])->name('service');

Route::get('location', [WebsiteController::class, 'locations'])->name('locations');
Route::get('location/{slug}', [WebsiteController::class, 'location'])->name('location');

Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms');
Route::get('privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');

Route::get("login", [DashboardController::class, 'signin'])->name('login');
Route::post("signin", [DashboardController::class, 'signin_post'])->name('signin.post');

Route::get("email", [DashboardController::class, 'email'])->name('email');


Route::group(['middleware' => 'auth'], function () {
    Route::get("dashboard", [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get("logout", [DashboardController::class, 'logout'])->name('logout');


    Route::resource("blogs", BlogController::class);


    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::post('/profile', [DashboardController::class, 'profile_post'])->name('profile.post');
});
