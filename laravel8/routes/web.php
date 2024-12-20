<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});


// 新規登録
Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register_create',[RegisterController::class,'registerCreate'])->name('register.create');

///ログイン画面
Route::get('/login',[LoginController::class, 'login'])->name('login');

Route::get('/flights', function () {
    // 認証済みユーザーのみがこのルートにアクセス可能


})->middleware('auth');
