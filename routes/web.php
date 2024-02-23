<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Basic Routing
// Route::get('/hello', function(){
//     return 'Hello World';
// });

Route::get('/world', function () { 
    return 'World';
});

// Route::get('/', function () { 
//     return 'Selamat Datang';
// });

// Route::get('/about', function () { 
//     return 'NIM: 2241720206' . '<br>' . 'Nama: Triyana Dewi Fatmawati';
// });

// Route Parameters
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
    
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });

// Optional Parameters
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Menambahkan Controller
Route::get('/hello', [WelcomeController::class,'hello']);

// // PageController : index
// Route::get('/', [PageController::class,'index']);

// // PageController : about
// Route::get('/about', [PageController::class,'about']);

// // PageController : articles
// Route::get('/articles/{id}', [PageController::class,'articles']);

// HomeController : index
Route::get('/', [HomeController::class,'index']);

// AboutController : about
Route::get('/about', [AboutController::class,'about']);

// ArticleController : articles
Route::get('/articles/{id}', [ArticleController::class,'articles']);

// // PhotoController
// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 'index', 'show']);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy']);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Triyana']);
// });
    
// Perubahan route sebelumnya
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Andi']);
// });

// Ubah route /greeting dan arahkan ke WelcomeController pada fungsi greeting
Route::get('/greeting', [WelcomeController::class, 'greeting']);