<?php

use App\Http\Controllers\Web\PagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
});

Route::get('/hello', function () {
    return view('pages.hello');
});

Route::get('/user/{id}', function ($id) {
    return "<h1>Тут будет выведен пользователь с ID – $id</h1>";
});

Route::get('/user', function (Request $request) {
    //    dd($request->all());
    return "<h1>Привет, меня зовут – {$request->get('name')}!</h1><h2>Мне {$request->get('age')} лет</h2><h2>Я родился {$request->get('dob')}</h2>";
});
