<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogScraperController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\AdminMiddleware;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [WebsiteController::class, 'index']);

Route::get('/app', [WebsiteController::class, 'app'])->name('app');

Route::get('blogs', [WebsiteController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [WebsiteController::class, 'blog'])->name('blog');

Route::get('plans', [WebsiteController::class, 'plans'])->name('plans');
Route::get('plan/{slug}', [WebsiteController::class, 'plan'])->name('plan');
Route::post('plan/buy', [WebsiteController::class, 'planBuy'])->name('plan.buy');

Route::get('affiliates', [WebsiteController::class, 'affiliates'])->name('affiliates');

Route::get('about-us', [WebsiteController::class, 'about'])->name('about');

Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms');
Route::get('privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('faq', [WebsiteController::class, 'faq'])->name('faq');

Route::get("login", [UserController::class, 'login'])->name('login');
Route::get("signin", [UserController::class, 'login'])->name('signin');

Route::get("signup", [UserController::class, 'signup'])->name('signup');

Route::post("authenticate", [UserController::class, 'login_post'])->name('login.post');
Route::post("signup", [UserController::class, 'signup_post'])->name('signup.post');


Route::group(['middleware' => 'auth'], function () {
    Route::get("dashboard", [UserController::class, 'dashboard'])->name('dashboard');

    Route::get("bills", [UserController::class, 'bills'])->name('bills');
    Route::get("referrals", [UserController::class, 'referrals'])->name('referrals');


    Route::get("profile", [UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserController::class, 'profile_post'])->name('profile.post');

    Route::get("settings", [UserController::class, 'settings'])->name('settings');
    Route::get("orders", [UserController::class, 'orders'])->name('orders');


    Route::get("deposit", [TransactionController::class, 'deposit'])->name('deposit');
    Route::post("deposit_post", [TransactionController::class, 'deposit_post'])->name("deposit_post");
    Route::post("deposit_post_verify", [TransactionController::class, 'deposit_post_verify'])->name("deposit_post_verify");

    Route::get("withdraw", [TransactionController::class, 'withdraw'])->name('withdraw');
    Route::post("withdraw_post", [TransactionController::class, 'withdraw_post'])->name("withdraw_post");
    Route::post("withdraw_post_verify", [TransactionController::class, 'withdraw_post_verify'])->name("withdraw_post_verify");

    Route::get("logout", [UserController::class, 'logout'])->name('logout');
});

Route::get('/scrape-blogs', [BlogScraperController::class, 'scrapeAndInsertBlogs']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get("/", [DashboardController::class, 'signin'])->name('sigin');
    Route::get("login", [DashboardController::class, 'signin'])->name('login');
    Route::post("signin", [DashboardController::class, 'signin_post'])->name('signin.post');

    Route::middleware(["auth", AdminMiddleware::class])->group(function () {
        Route::get("dashboard", [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get("logout", [DashboardController::class, 'logout'])->name('logout');

        Route::get("users", [DashboardController::class, 'users'])->name('users');
        Route::post("users/update/{id}", [DashboardController::class, 'users_update'])->name('users.update');
        Route::delete("users/delete/{id}", [DashboardController::class, 'users_delete'])->name('users.destroy');

        Route::get("transactions", [DashboardController::class, 'transactions'])->name('transactions.index');
        Route::post("transactions/update/{id}", [DashboardController::class, 'transactionsUpdate'])->name('transactions.update');

        Route::get("subscriptions", [DashboardController::class, 'subscriptions'])->name('subscriptions');


        Route::resource("blogs", BlogController::class);
        Route::resource("plans", PlanController::class);
        Route::resource("settings", SettingController::class);


        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

        Route::post('/profile', [DashboardController::class, 'profile_post'])->name('profile.post');
    });
});


Route::get('cron', [WebsiteController::class, 'cronJob']);
