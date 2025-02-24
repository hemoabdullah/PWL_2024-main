<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Routing\RouteUrlGenerator;
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
/*
Route::get('/', function () {
    return view('welcome');
});



Route::get('/world', function () {
    return 'World';
    });

Route::get('/', function () {
return 'Welcome';
 });

 Route::get('/about', function () {
return 'My name is Antonius Kaharap Kautsar and my NIM is 2341720067';
});

Route::get('/usera/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

//Route::get('/user/{name?}', function ($name='John') {
//    return 'Nama saya '.$name;
//});


Route::get('/hello', [WelcomeController::class,'hello']);

Route::resource('index', PageController::class);
Route::post('/{index}', function ($index) {

});
Route::put('/{index}', function ($index) {

});
Route::delete('users/{index}', function ($index) {

});

Route::post('about/{about}', function ($about) {

});
Route::put('about/{about}', function ($about) {

});
Route::delete('about/{about}', function ($about) {

});



Route::put('articles/{articles}', function ($articles) {

});
Route::delete('articles/{articles}', function ($articles) {

});

Route::get('/about', [PageController::class,'about']);
Route::get('/articles', [PageController::class,'articles']);
*/

// Route::post('/articles/{articles}', function ($articles) {
//     return $articles;
// });

// Route::post('/articles/{articles}', [ArticleController::class, 'articles']);

Route::get('/', action: [HomeController::class, 'index']);
Route::get('about', action: [AboutController::class, 'about']);
Route::get('articles/{index}', action: [ArticleController::class, 'articles']);

Route::get('/user/profile', function() {
    //
    })->name('profile');


    Route::resource('photos', PhotoController::class);


Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::get('/greeting', [WelcomeController::class,
'greeting']);
