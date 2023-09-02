<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/accountandcources', function (){
    return view('accountandcourses');
});

Route::get('/additionalsettings', function (){
    return view('additionalsettings');
});

Route::get('/audiobooks', function (){
    return view('audiobooks');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/ebooks', function () {
    return view('ebooks');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/evaluation', function () {
    return view('evaluation');
});

Route::get('/films', function () {
    return view('films');
});

Route::get('/grammar', function () {
    return view('grammar');
});

Route::get('/informationcourse', function () {
    return view('informationcourse');
});

Route::get('/marks', function () {
    return view('marks');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/newaccount', function () {
    return view('newaccount');
});

Route::get('/onlinechat', function () {
    return view('onlinechat');
});

Route::get('/paymentmethod', function () {
    return view('paymentmethod');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/speakingclub', function () {
    return view('speakingclub');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/tests', function () {
    return view('tests');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/vocabulary', function () {
    return view('vocabulary');
});

Route::get('/vocabularyword', function () {
    return view('vocabularyword');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/user-register', [App\Http\Controllers\Admin\DashboardController::class, 'registered'])->name('user-register');
    Route::post('/user-register', [App\Http\Controllers\Admin\DashboardController::class, 'registerstore'])->name('user-register');
    Route::get('/user-edit/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'registeredit'])->name('user-edit');
    Route::put('/user-register-update/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'registerupdate'])->name('user-register-update');
    Route::delete('/user-delete/{id}' , [App\Http\Controllers\Admin\DashboardController::class, 'registerdelete'])->name('user-delete');
});
