<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend as FrontendController;
use App\Http\Controllers\Backend as BackendController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\AccountController;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/news-and-promotions', [PageController::class, 'newsPromotions']);
Route::get('/news-article', [PageController::class, 'newsArticle']);
Route::get('/promotions-article', [PageController::class, 'promotionsArticle']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/cart', [PageController::class, 'cart']);
Route::get('/payment', [PageController::class, 'payment']);
Route::get('/registration', [PageController::class, 'registration']);



Route::get('/login-account', [PageController::class, 'login']);

// Route::post('/get-session', [PageController::class, 'getSession']);
Route::post('/saveCart', [PageController::class, 'saveCart'])->name('save.cart');
Route::get('/getCart', [PageController::class, 'getCart'])->name('get.cart');

Route::post('/add-contact', [PageController::class, 'addContact']);

Route::post('/reg-account', [PageController::class, 'regAccount']);


Route::get('/success', [App\Http\Controllers\ResponseController::class, 'success'])->name('success');
Route::get('/error', [App\Http\Controllers\ResponseController::class, 'error'])->name('error');

// DEFAULT AUTH ROUTES
Auth::routes();

// AUTH USER ACCESS
// Route::middleware(['auth', 'user-access:user'])->group(function () {
// });

// AUTH CMS ACCESS
Route::get('/admin/login', [ BackendController\AuthController::class, 'login' ])->name('admin.login');
Route::post('/admin/login', [ BackendController\AuthController::class, 'signIn' ])->name('admin.signin');
Route::prefix('admin')->middleware(['auth', 'user-access:cms'])->group(function () {
    Route::post('/logout', [ BackendController\AuthController::class, 'logout' ])->name('admin.logout');

    Route::get('/dashboard', function () {
        return view('backend.modules.dashboard.index');
    });

    
    Route::resource('banner', BackendController\BannerController::class);
    Route::resource('contact-us', BackendController\ContactUsController::class);
    Route::resource('products', BackendController\ProductController::class);
    Route::resource('blog', BackendController\BlogController::class);
    Route::resource('promo', BackendController\PromoController::class);


    Route::get('pinned/{id}', [BackendController\BlogController::class, 'pinned']);
    Route::get('unpinned/{id}', [BackendController\BlogController::class, 'unpinned']);


});


Route::get('/login-user', [AccountController::class, 'login' ])->name('login');
Route::post('/login-user', [AccountController::class, 'signIn' ])->name('signin');
Route::prefix('user')->middleware(['auth', 'user-access:user'])->group(function () {
    Route::post('/logout', [ AccountController::class, 'logout' ])->name('logout');

    Route::get('/account', [PageController::class, 'account']);
    Route::get('/settings', [PageController::class, 'settings']);
    Route::get('/account/edit', [PageController::class, 'accountEdit']);
});
