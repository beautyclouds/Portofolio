<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HalamanController;

use App\Http\Controllers\UserController;

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
Route::resource('posts', PostController::class);


Route::get('/', [HalamanController::class,'home'])->name('home');

Route::get('/about', [HalamanController::class,'about'])->name('about');

Route::get('/project', [HalamanController::class,'contact'])->name('contact');

Route::get('/skill', [HalamanController::class,'hobby'])->name('hobby');

Route::post('/', function (App\Http\Requests\PostRequest $request) 
{
    return back()->with('success');
});

//LOGIN
Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name('doLogin');
Route::post("/do-logout",  [UserController::class, "doLogout"])->name('doLogout');
Route::get("/sample", [UserController::class, "createSample"])->name('createSample');


// Route::get('/about', function (){
//     return view('about');
// })->name('about');

// Route::get('/hobby', function (){
//     return view('hobby');
// })->name('hobby');

// Route::get('/contact', function (){
//     return view('contact');
// })->name('contact');