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

Route::controller(App\Http\Controllers\admin\ThongKeController::class)->group(function(){
    Route::post('/filter-by-date',  'filter_by_date')->name('filter-by-date');
    Route::post('/dashboard-filter',  'dashboard_filter')->name('dashboard-filter');
    Route::post('/days_order',  'days_order')->name('days_order');

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



//Tình trạng đơn hàng
Route::controller(App\Http\Controllers\user\OrderStatusController::class)->group(function(){
    Route::get('/OrderStatus',  'index')->name('OrderStatus');
    // Route::get('/blogdetail/{BlogID}',  'blogdetail')->name('blogdetail');
    // Route::get('/blogde',  'blogde')->name('blogde');
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
    // Route::get('/printInvoice/{SalName}', 'printInvoice')->name('printInvoice');
    Route::get('/printInvoice/{SalID}', 'printInvoices')->name('printInvoices');
});



//Hóa đơn nhập
Route::controller(App\Http\Controllers\admin\ImportbillController::class)->group(function(){
    Route::get('/indexImportbill', 'index')->name('importbill.index');
    Route::get('/createImportbill',  'create')->name('importbill.create');
    Route::post('/storeImportbill',  'store')->name('importbill.store');
    Route::get('/showImport/{ImpID}',  'show')->name('importbill.detail');
    Route::get('/destroyImport/{ImpID}', 'destroy')->name('importbill.destroy');
    Route::get('/printImportbill/{ImpID}', 'printImportbill')->name('printImportbill');
});




//Nhà cung cấp
Route::controller(App\Http\Controllers\admin\SupplierController::class)->group(function(){
    Route::get('/index_supplier','index')->name('supplier.index');
    Route::get('/createSupplier','create')->name('supplier.create');
    Route::post('/storeSupplier','store')->name('supplier.store');
    Route::get('/showSupplier/{SupID}','show')->name('supplier.detail');
    Route::get('/editSupplier/{SupID}','edit')->name('supplier.edit');
    Route::put('/updateSupplier/{SupID}','update')->name('supplier.update');
    Route::get('/destroySupplier/{SupID}','destroy')->name('supplier.destroy');
});




//Nhân viên
Route::controller(App\Http\Controllers\admin\EmployeeController::class)->group(function(){
    Route::get('/index_employee','index')->name('employee.index');
    Route::get('/create_employee','create')->name('employee.create');
    Route::post('/store_employee','store')->name('employee.store');
    Route::get('/show_employee/{EmpID}','show')->name('employee.detail');
    Route::get('/edit_employee/{EmpID}','edit')->name('employee.edit');
    Route::put('/update_employee/{EmpID}','update')->name('employee.update');
    Route::get('/destroy_employee/{EmpID}','destroy')->name('employee.destroy');
});













//Phân quyền đăng nhập
Route::controller(App\Http\Controllers\admin\UserController::class)->group(function(){
    Route::get('/user', 'index')->name('user');
});

Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function(){
    Route::get('/index_auth',  'index')->name('index');
    Route::get('/register_auth',  'register_auth')->name('register_auth');
    Route::get('/login_auth',  'login_auth')->name('login_auth');
    Route::get('/logout_auth',  'logout_auth')->name('logout_auth');
    Route::post('/register',  'register')->name('register');
    Route::post('/loginAdmin',  'loginAuth')->name('loginAdmin');
});

Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function(){
    Route::get('/indexUsers',  'index')->name('indexUsers');
    Route::post('/assign_roles',  'assign_roles')->name('assign_roles');
    Route::get('/delete-user-roles/{id}',  'delete_user_roles')->name('delete-user-roles');
    Route::get('/impersonate/{id}',  'impersonate')->name('impersonate');
    Route::get('/impersonate-destroy',  'impersonate_destroy')->name('impersonate-destroy');
    Route::post('/storeAcc','store')->name('storeAcc');
    Route::get('/addAcc', 'create')->name('addAcc');
});