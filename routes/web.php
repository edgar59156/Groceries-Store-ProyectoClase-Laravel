<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Json;

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
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/hello2', function () {
    return view('hello/hello2');
});

Route::get('/hello2', [HelloController::class,'hello3']);

Route::get('/hello4', function () {
    return view('hello.hello4');
});

Route::get('/hello5/{firstname}/{lastname}', [HelloController::class,'hello5']);

Route::get('/shop', [SiteController::class,'shop'])->name('shop');
Route::get('/register', [SiteController::class,'register'])->name('register');
Route::get('/login', [SiteController::class,'login'])->name('login');
Route::get('/product/details/{id}', [SiteController::class,'product_details'])->name('product_details');
//Route::get('/admin/products', [ProductController::class,'index']);
Route::get('/admin/products/edit/{id}', [SiteController::class,'edit_product'])->name('edit_product');

Route::get('/admin/products', [ProductController::class, 'index'])->name('products');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('create_product');

Route::post('/admin/products/stores', [ProductController::class, 'store'])->name('store_product');

Route::get('/comments/create', [CommentController::class, 'create'])->name('create_comment');

Route::post('/product/details/{id}', [CommentController::class, 'store'])->name('store_comment');

Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');

Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('update_product');

Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy_product');

Route::get('/json1', [JsonController::class,'json1'])->name('json1');

Route::get('/json2', [JsonController::class,'products'])->name('json2');
Route::get('/json_products', [JsonController::class,'products_list'])->name('product_list');
Route::get('/json_products2', [JsonController::class,'products_list'])->name('datatable');

Route::get('/employees_list', [EmployeesController::class,'index'])->name('employees');

