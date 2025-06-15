<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Authcontroller;
use App\Models\User;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('test');
// });
// Route::get('/show', function () {
//     $user = User::all();
//     echo "<pre>";
//     print_r($user->toarray());
// });

// Route::get('/profile', SingleAction::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/', [Authcontroller::class, 'home'])->name('home');
    Route::get('/explore', [Authcontroller::class, 'showData'])->name('explore');
    Route::get('/messenger', [Authcontroller::class, 'showData'])->name('messenger');
    Route::get('/notification', [Authcontroller::class, 'showData'])->name('notification');
    Route::get('/profile', [Authcontroller::class, 'profile'])->name('profile');
});
Route::resource('/post', ResourceController::class);

// Route::get('/login', [Authcontroller::class, 'login']);
// Route::post('/login', [Authcontroller::class, 'userLogin']);

// Route::get('/signup', [Authcontroller::class, 'signup'])->name('signup');
// Route::post('/signup', [Authcontroller::class, 'storeData']);



Route::get('trash', [Authcontroller::class, 'trash']);



Route::get("destroy", function () {
    session()->forget('user');
    return redirect('get-session');
});

Route::get("/upload", function () {
    return view('welcome');
});

Route::post("/upload", [Authcontroller::class, 'upload']);