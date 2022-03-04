<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('Welcome/welcome');
});

Route::get('/home', [HomeController::class,'home'])->name('home');

Route::get('/newpost', [PostController::class,'NewPost'])->name('newpost');

Route::post('/addpost', [PostController::class,'AddPost'])->name('addpost');

Route::get('/like/{user_id}/{post_id}', [HomeController::class,'LikePost']);
Route::get('/dislike/{user_id}/{post_id}', [HomeController::class,'DisLikePost']);
Route::get('/comment/{user_id}/{post_id}', [HomeController::class,'CommentPost']);
Route::get('/bookmark/{user_id}/{post_id}', [HomeController::class,'BookMark']);
Route::get('/userlist', [HomeController::class,'UserList'])->name('userlist');
Route::get('/mybookmark', [HomeController::class,'MyBookMark'])->name('mybookmark');
Route::get('/mypost', [HomeController::class,'MyPost'])->name('mypost');
Route::get('/userpost/{user_id}', [HomeController::class,'UserPost']);
Route::get('/search', [HomeController::class,'Search'])->name('search');
Route::get('/tag/{tag_id}', [HomeController::class,'Tag']);








Route::get('/editpost/{post_id}', [PostController::class, 'EditPost']);
Route::post('/editpostaction/{post_id}', [PostController::class, 'EditPostAction']);
Route::get('/deleteallimg/{post_id}', [PostController::class, 'DeleteAllImg']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    $loginUser = Auth::user();
    $posts = Post::all()->sortByDesc('created_at');
    return view('Home/home',compact('loginUser','posts'));
})->name('dashboard');





// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });
 
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();
 
//     // $user->token
// });

Auth::routes();



Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallBack']);

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallBack']);

Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallBack']);


