<?php

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

Route::get('/', function () {
    return view('welcome');
});



                ///////////////Trang HOME////////////////////////


Route::controller(App\Http\Controllers\user\HomeController::class)->group(function(){
    Route::get('/home',  'index')->name('home');
    Route::get('/get-more-products', 'getMoreProducts');
    Route::get('/get-more-products2', 'getMoreProducts2');
    Route::post('/search', 'search')->name('search');

});


//Detail
Route::controller(App\Http\Controllers\user\detailcontroller::class)->group(function(){
    Route::get('/detailt/{ProID}',  'showProduct')->name('detailt');
});


//Login
Route::controller(App\Http\Controllers\user\LoginController::class)->group(function(){
    Route::get('/login',  'showLoginForm')->name('login');
    Route::post('/loginsubmit',  'login')->name('login.submit');
    Route::get('/register',  'showRegisterForm')->name('register');
    Route::post('/registersubmit',  'register')->name('register.submit');
    Route::get('/logout',  'logout')->name('logout');
});


//Danh Mục (category)
Route::controller(App\Http\Controllers\user\CategoryController::class)->group(function(){
    Route::get('/danhmuc/{CatID}',  'store')->name('danhmuc');
});



//Giỏ hàng
Route::controller(App\Http\Controllers\user\CartController::class)->group(function(){
    Route::get('/showcart', 'index')->name('giohang');
    Route::post('/save-cart', 'savecart')->name('save-cart');
    Route::post('/update-cart', 'updatecart')->name('update-cart-quatity');
    Route::get('/delete_cart/{rowId}', 'destroy')->name('delete_cart');
});



//Thanh toán
Route::controller(App\Http\Controllers\user\PayController::class)->group(function(){
    Route::get('/thanhtoan',  'index')->name('thanhtoan');
    Route::get('/checklogin',  'login_checkout')->name('login_checkout');
    Route::post('/paysubmit',  'pay_submit')->name('pay_submit');
    Route::get('/thank',  'thank')->name('thank');
});



//Blog
Route::controller(App\Http\Controllers\user\BlogController::class)->group(function(){
    Route::get('/blog',  'index')->name('blog');
    Route::get('/blogdetail/{BlogID}',  'blogdetail')->name('blogdetail');
    Route::get('/blogde',  'blogde')->name('blogde');
});















            ////////////////////////ADMIN//////////////////////////////////

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');



//Danh mục
Route::controller(App\Http\Controllers\admin\CategoryController::class)->group(function(){
    Route::get('/indexCategory','index')->name('categories.index');
    Route::get('/createCategory','create')->name('categories.create');
    Route::post('/storeCategory','store')->name('categories.store');
    Route::get('/showCategory/{CatID}','show')->name('categories.detail');
    Route::get('/editCategory/{CatID}','edit')->name('categories.edit');
    Route::put('/updateCategory/{CatID}','update')->name('categories.update');
    Route::get('/destroyCategory/{CatID}','destroy')->name('categories.destroy');
});




//Sản phẩm
Route::controller(App\Http\Controllers\admin\ProductController::class)->group(function(){
    Route::get('/indexProduct', 'index')->name('product.index');
    Route::get('/createProduct',  'create')->name('product.create');
    Route::post('/storeProduct',  'store')->name('product.store');
    Route::get('/showProduct/{ProID}',  'show')->name('product.detail');
    Route::get('/editProduct/{ProID}',  'edit')->name('product.edit');
    Route::put('/updateProduct/{ProID}',  'update')->name('product.update');
    Route::get('/destroyProduct/{ProID}',  'destroy')->name('product.destroy');
});



//Đơn hàng
Route::controller(App\Http\Controllers\admin\OrderController::class)->group(function(){
    Route::get('/indexOrder', 'index')->name('order.index');
    Route::get('/showOrder/{OrdID}',  'show')->name('order.detail');
    Route::get('/destroyOrder/{OrdID}',  'destroy')->name('order.destroy');
    Route::get('/confirmOrder/{OrdID}',  'confirm')->name('order.confirm'); 
    Route::get('/CancelCheckout/{OrdID}', 'CancelCheckout') -> name('order.CancelCheckout') ; 
});



//Hóa đơn bán
Route::controller(App\Http\Controllers\admin\SalesInvoiceController::class)->group(function(){
    Route::get('/indexSalesInvoice', 'index')->name('SalesInvoice.index');
    Route::get('/showSale/{SalID}',  'show')->name('SalesInvoice.detail');
    Route::get('/destroySale/{SalID}', 'destroy')->name('SalesInvoice.destroy');
    Route::get('/admin/danhsachsanpham/pdf', 'Xuatpdf')->name('danhsachsanpham.pdf');

});



//Hóa đơn nhập
Route::controller(App\Http\Controllers\admin\SalesInvoiceController::class)->group(function(){
    Route::get('/indexSalesInvoice', 'index')->name('SalesInvoice.index');
});
