<?php

use App\Http\Controllers\UcupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', [UcupController::class, 'index']);

// Route::get('/home', [UcupController::class, 'create']);

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/layout-test', function () {
//     return view('layout.main');
// });

// Route::get('/test', function () {
//     return view('test');
// });
