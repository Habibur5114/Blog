<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Backend Route
Route::get('/back', [BackendController::class, 'back'])->name('backend');




// Frontend Route

Route::get('/front', [FrontendController::class, 'front'])->name('frontend');
Route::post('/comment', [FrontendController::class, 'comment'])->name('frontendcomment');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontblog');

Route::get('/postdetails/{id}', [FrontendController::class, 'postdetails'])->name('postdetails');
Route::get('/categorywisepost/{id}', [FrontendController::class, 'categorywisepost'])->name('categorywisepost');


// CategoryController

Route::get('/create', [CategoryController::class, 'create'])->name('categorycreate');
Route::get('/show', [CategoryController::class, 'show'])->name('categoryshow');
Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categorydelete');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categoryedit');
Route::post('/update', [CategoryController::class, 'update'])->name('categoryupdate');
Route::post('/store', [CategoryController::class, 'store'])->name('categorystore');
Route::get('/cover', [CategoryController::class, 'cover'])->name('categorycover');
Route::post('/coverstore', [CategoryController::class, 'coverstore'])->name('categorycoverstore');
Route::get('/addabout', [CategoryController::class, 'addabout'])->name('addabout');
//addpost
Route::get('/post', [PostController::class, 'post'])->name('addpost');
Route::get('/showpost', [PostController::class, 'showpost'])->name('showpost');

Route::post('/poststore', [PostController::class, 'poststore'])->name('addpoststore');


//about controller
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::post('/aboutstore', [AboutController::class, 'aboutstore'])->name('aboutstore');
Route::get('/addabout', [CategoryController::class, 'addabout'])->name('addabout');

// contact Controller
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contactstore', [ContactController::class, 'contactstore'])->name('contactstore');
Route::get('/showcontact', [ContactController::class, 'showcontact'])->name('showcontact');



// Admin Route
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
