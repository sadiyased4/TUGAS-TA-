<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UmkmController;
use App\Models\Service;
use App\Models\Umkm;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [AppController::class, 'index']);
Route::get('/berita',[AppController::class, 'berita']);
Route::get('/detail/{slug}',[AppController::class, 'detail']);

Route::get('/layanan',[AppController::class, 'layanan']);

Route::get('/detail_umkm/{id}/',[AppController::class, 'detail_umkm']);

Route::get('/produkk',[AppController::class, 'produkk']);
Route::get('/detail_produk',[AppController::class, 'detail_produk']);

Route::get('/foto',[AppController::class, 'foto']);
Route::get('/detail/detail_foto',[AppController::class, 'detail_foto']);


Route::get('/tentang', function () {
    return view('tentang.tentang');
});


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm')->middleware('auth');
Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create')->middleware('auth');
Route::post('/umkm/store', [UmkmController::class, 'store'])->name('umkm.store')->middleware('auth');
Route::get('/umkm/edit/{id}', [UmkmController::class, 'edit'])->name('umkm.edit')->middleware('auth');
Route::post('/umkm/update/{id}', [UmkmController::class, 'update'])->name('umkm.update')->middleware('auth');
Route::post('/umkm/destroy/{id}', [UmkmController::class, 'destroy'])->name('umkm.destroy')->middleware('auth');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk')->middleware('auth');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create')->middleware('auth');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store')->middleware('auth');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit')->middleware('auth');
Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update')->middleware('auth');
Route::post('/produk/destroy/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy')->middleware('auth');


Route::get('/tag', [TagController::class, 'index'])->name('tag')->middleware('auth');
Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store')->middleware('auth');
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
Route::get('/tag/edit/{id}', [TagController::class, 'edit'])->name('tag.edit')->middleware('auth');
Route::post('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update')->middleware('auth');
Route::post('/tag/destroy/{id}', [TagController::class, 'destroy'])->name('tag.destroy')->middleware('auth');

// Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.show');

// Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware('auth');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
// Route::post('/products/store', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
// Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
// Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
// Route::post('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

// Route::get('/productt',[AppController::class, 'productt']);

// Route::get('/detail_productt/',[AppController::class, 'detail_productt']);


// Route::get('/foto', function () {
//     return view('foto.foto');
// });

// Route::get('/detail/detail_umkm',[AppController::class, 'detail_umkm']);