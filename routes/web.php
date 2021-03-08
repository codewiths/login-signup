<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthenticationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BlogController;
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
    if(session()->has('user')){
        return redirect('home');
    }
    return view('welcome');
});

Route::view('home', 'home');

Route::post('user', [UserAuthenticationController::class, 'userLogin']);

Route::post('register', [RegisterController::class, 'registerUser']);

Route::get('/register', function(){
    if(session()->has('user')){
        return redirect('home');  
    }
    return view('register');
});

Route::view('profile', 'profile');

Route::get('/login', function(){
    if(session()->has('user')){
        return redirect('home');
    }
    return view('login');
});

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::view('add_post', 'add_post');

Route::post('add_post', [PostsController::class, 'addPost']);

Route::get('/posted', function(){
    return view('posted');
});

Route::view('show_posts', 'show_posts');
Route::get('/show_posts', [PostsController::class, 'showPosts']);

Route::delete('/delete/{id}', [PostsController::class, 'destroy'])->name('post.destroy');

Route::get('/edit/{id}', [PostsController::class, 'showpost'])->name('post.edit');

Route::post('editpost/{id}', [PostsController::class, 'edit']);

Route::resource('/blogs', BlogController::class);


// Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
// Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');