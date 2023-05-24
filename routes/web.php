<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Middleware\SecureAdmin;

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

Route::get('/redirect', [HomeController::class, 'redirect'])
->name('redirect')->middleware(['auth:sanctum','verified']);
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product_details/{id}', [HomeController::class, 'product_details'])->name('product_details');
Route::get('/searchProduct', [HomeController::class, 'searchProduct'])->name('searchProduct');
Route::get('/searchAllProduct', [HomeController::class, 'searchAllProduct'])->name('searchAllProduct');
Route::get('/allproducts', [HomeController::class, 'allproducts'])->name('allproducts');

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart'])->name('add_cart');
Route::get('/show_cart', [HomeController::class, 'show_cart'])->name('show_cart');
Route::delete('/delete_cart/{id}', [HomeController::class, 'delete_cart'])->name('delete_cart');
Route::get('/cash_order', [HomeController::class, 'cash_order'])->name('cash_order');
Route::get('/stripe/{totale}', [HomeController::class, 'stripe'])->name('stripe');
Route::post('/stripe.post/{totale}', [HomeController::class, 'stripePost'])->name('stripepost');
Route::get('/show_myorders', [HomeController::class, 'show_myorders'])->name('show_myorders');
Route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order'])->name('cancel_order');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');




Route::resource('category',CategoryController::class)->middleware('SecureAdmin');
Route::resource('product',ProductController::class)->middleware('SecureAdmin');

Route::get('/show_orders',[OrderController::class,'show_orders'])->name('show_orders')->middleware('SecureAdmin');
Route::get('/edit_order/{id}',[OrderController::class,'edit_order'])->name('edit_order')->middleware('SecureAdmin');
Route::get('/print_pdf/{id}',[OrderController::class,'print_pdf'])->name('print_pdf')->middleware('SecureAdmin');
Route::get('/send_email/{id}',[OrderController::class,'send_email'])->name('send_email')->middleware('SecureAdmin');
Route::post('/send_user_email/{id}',[OrderController::class,'send_user_email'])->name('send_user_email')->middleware('SecureAdmin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











require __DIR__.'/auth.php';










// طريقة القبول في CpaBuild المضمونة 100%
// الخطوات كالتالي:

// 1- تدخل رابط التسجيل التالي:
// cpabuild.com

// 2- صفحة التسجيل :
// أهم شي الايميل اللي تتسجل بيه يكون جيميل ولااازم يبدا بالأحرف التالية "its"
// مثال: itsmohamed@gmail.com

// 3 - ادخل اسمك الشخصي واسم العائلة الحقيقي (ضرووري جدا)


// 4 - كلمة السر: لازم كلمة قوية جدا ومكونة من احرف كبيرة واحرف صغيرة وأرقام ورموز
// مثال: HGSYhuokbc15436&#@

// 5- العنوان : لازم يكون على الشكل التالي (مدينة + رمز بريدي)
// مثال : Casablanca 54789

// 6- السكايب: سجل حساب سكايب بنفس الجيميل اللي وضعته للتسجيل في CpaBuild

// 7- where did you hear about us?
// اكتب فيها : affpayi#ng.com

// 8- current networks:
// اكتب فيها: cpagrip, OGAds, MaxBounty

// 9- website:

// ضع هذا الموقع: appske#en.com

// 10- Promotional methods/traffic sources:
