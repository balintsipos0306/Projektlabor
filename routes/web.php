<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\CustomAuthMiddleware as CustomAuth;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\nature_ImageController;

Route::post('/login', [LoginController::class, 'authenticate']);
Route::delete('/logout', [LoginController::class, 'destroy']);

Route::post('/mail', [MailController::class, 'sendMail']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery/nature', function () {
    return view('gallery');
});

Route::get('/gallery/portraits', function () {
    return view('gallery_second');
});

Route::get('/gallery/events', function () {
    return view('gallery_third');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function(){
    return view('login');
});

Route::middleware('CustomAuth') -> group(function (){
    Route::get('/admin', function (){
        return view('adminView');
    });
});