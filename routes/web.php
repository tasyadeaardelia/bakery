<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WorkTimeController;
use App\Http\Controllers\PsBannerController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\PsSectionHeroController;
use App\Http\Controllers\PsSubscribeController;
use App\Http\Controllers\SubsEmailController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PsFooterController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('pages.app.about');
})->name('about');

Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/detail/{slug}', [BlogController::class, 'detail'])->name('detailblog');

Route::get('/contact', function(){
    return view('pages.app.contact');
})->name('contact');


Route::get('/admin', [AuthController::class, 'formlogin'])->name('login');

Route::get('/notfound', function() {
    return view('pages.app.404');
})->name('notfound');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'checksession'],function() {

    route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    route::get('/admin/profil/detail', [AuthController::class, 'show'])->name('detailprofil');

    route::get('/admin/profil/edit/{id}', [AuthController::class, 'edit'])->name('editprofil');

    route::post('/admin/profil/update/{id}', [AuthController::class, 'update'])->name('updateprofil');

    Route::resource('/admin/post', PostController::class);

    Route::resource('/admin/testimonial', TestimonialController::class);

    Route::resource('/admin/about', AboutController::class);

    Route::resource('/admin/partner', PartnerController::class);

    Route::resource('/admin/product', ProductController::class);

    Route::resource('/admin/banner', BannerController::class);

    Route::resource('/admin/team', TeamController::class);

    Route::resource('/admin/payment', PaymentController::class);

    Route::resource('/admin/worktime', WorkTimeController::class);

    Route::resource('/admin/psbanner', PsBannerController::class);

    Route::resource('/admin/socialmedia', SocialMediaController::class);

    Route::resource('/admin/pssectionhero', PsSectionHeroController::class);
    
    Route::resource('/admin/pssubscribe', PsSubscribeController::class);

    Route::resource('/admin/subsemail', SubsEmailController::class);

    Route::resource('/admin/logo', LogoController::class);

    Route::resource('/admin/psfooter', PsFooterController::class);


});

Route::get('/register', function() {
    return view('pages.admin.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);
