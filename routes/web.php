<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $user = Auth::guard('admin')->user();

    return view('welcome', compact('user'));
})->name('home')->middleware('admin');


Route::get('/users', [UserController::class, 'index'])->name('users_view');


Route::get('/all-contact', [ContactController::class,'all_contact'])->name('all_contact_view');

Route::get('/single-contact/{id}', [ContactController::class,'single_contact'])->name('single_contact_view');
Route::get('/single-contact/{id}/edit', [ContactController::class,'single_contact_edit'])->name('single_contact_edit_view');
Route::post('/single-contact/edit/store', [ContactController::class,'single_contact_edit_store'])->name('single_contact_edit_store');
Route::delete('/single-contact/{id}/delete', [ContactController::class,'single_contact_delete'])->name('single_contact_delete');



Route::get('/add-contact', [ContactController::class , 'add_contact'])->name('add_contact_view')->middleware('admin');
Route::post('/add-contact/store', [ContactController::class, 'contact_store'])->name('add_contact_store');


Route::get('/all-posts', function () {

    // $posts = Post::orderBy('created_at','desc')->get();
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('posts', compact('posts'));
})->name('all_posts');


Route::get('/add-post/form', function () {
    return view('add_post');
})->name('add_post_form');

Route::post('/add-post/store', function () {
    return view('register');
})->name('add_post_store');

Route::get('/all-comments', function () {
    $comments = Comment::all();
    return view('comments', compact('comments'));
})->name('all_comments');


Route::get('/all-products', function () {

    $products = Product::all();

    return view('all_products', compact('products'));
})->name('all_products');

Route::get('/add-product', function () {
    return view('register');
})->name('add_product');

Route::post('/add-product/store', function () {
    return view('register');
})->name('add_product_store');

Route::get('/all-categories', function () {
    $categories = Category::all();
    return view('all_categories', compact('categories'));
})->name('all_categories');


Route::get('/register', [UserController::class, 'register'])->name('register_view');

Route::post('/register/store', [UserController::class, 'register_store'])->name('register_store');

Route::get('/login', [UserController::class, 'login'])->name('login_view');
Route::post('/login/store', [UserController::class, 'login_store'])->name('login_store');

Route::get('/logout', [UserController::class, 'logout'])->name('login_action');
