<?php


use App\Models\Post;
use App\Models\About;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PortfolioController;
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


Route::get('/',[HomeController::class,'index'] );
Route::get('/home',[HomeController::class,'index'] );
Route::get('/about',[AboutController::class,'index'] );
Route::get('/contact',[ContactController::class,'index'] );
Route::get('/gallery',[GalleryController::class,'index'] );
Route::get('/portfolio',[PortfolioController::class,'index'] );

//about
Route::get('/about',[AboutController::class,'index']);
//blog
Route::get('/blog',[PostController::class,'index']);
//postingan
Route::get('/posts/{post:slug}',[PostController::class,'show']);


//categories
Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all()
    ]);
});
//categories post
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=>$category->name,
        'posts'=>$category->posts,
        'category'=>$category->name
    ]);
});

//author postingan blog
Route::get('/authors/{user}', function(User $user){
    return view('personpost',[
        'title'=>'User Post',
        'posts'=>$user->post,

    ]);
});