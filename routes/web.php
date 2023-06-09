<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\AuthController;
use \App\Models\Post;

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


/* Default language is English */
Route::redirect('/','/en/home');

Route::get('/{lang}', function ($lang){
    App::setLocale($lang);
    return view('index');
});

Route::group(['prefix'=>'{language}'], function (){

    Route::get('/home', [Controller::class, 'home'])->name('home');
    Route::get('/about', [Controller::class, 'about'])->name('about');
    Route::resource('contact', ContactController::class);
    
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
    Route::resource('/admin/post',PostsController::class);
    Route::resource('/admin/page/about',AboutController::class);
    Route::resource('/admin/user',UserController::class);
});

Route::get('/auth/login',[AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/save',[AuthController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[AuthController::class, 'logout'])->name('auth.logout');







// RAW INSERTION
// Route::get('/insert/{title}/{content}', function($title,$content){
//     DB::insert('insert into posts(title,content) values(?,?)',[$title,$content]);
// });

// Route::get('/read', function(){
//     $result = DB::select('select * from posts');
//     return $result;
// });

// Route::get('/find/{id}', function($id){
//     $posts = Post::find($id);
//     return $posts;
// });

// Route::get('/basicinsert', function(){
//     $posts = new Post;

//     $posts -> title = 'Eloquent post';
//     $posts -> content = 'Eloquent content';
//     $posts -> save();
// });

// Route::get('/basicupdate', function(){
//     $posts = Post::find(1);

//     $posts -> title = 'Eloquent update post';
//     $posts -> content = 'Eloquent update content';
//     $posts -> save();
// });

// Route::get('/create', function(){
//     Post::create(['title'=>'Protected title','content'=>'protected content']);
// });

// Route::get('/update', function(){
//     Post::where('title','Protected title')->update(['title'=>'Elequent update']);
// });

// Route::get('/delete', function(){
//     $posts = Post::find(5);
//     $posts->delete();
// });

// Route::get('/multidelete', function(){
//     Post::destroy([3,4]);
// });

// Route::get('/wheredelete', function(){
//     Post::where('id','<', 2)-> delete();
// });