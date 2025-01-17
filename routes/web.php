<?php

use Illuminate\Support\Facades\Route;


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/login', 'LoginController@index');

use App\Http\Controllers\LoginController;

// Route::get('/login', 'LoginController@index');

//Route::get('/login', [LoginController::class, 'index']);



Route::get('/login', [LoginController::class, 'index']);
//Route::post('/login', [LoginController::class, 'login']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});


Route::get('/list', function () {
    return view('list');
});

Route::get('/pages/category/dokhan', function () {
    return view('/pages/category/dokhan');
});


Route::get('/pages/category/domat', function () {
    return view('/pages/category/domat');
});


Route::get('/pages/category/dvlinhvuc', function () {
    return view('/pages/category/dvlinhvuc');
});


Route::get('/pages/category/linhvuc', function () {
    return view('/pages/category/linhvuc');
});


Route::get('/pages/category/loaivb', function () {
    return view('/pages/category/loaivb');
});


Route::get('/pages/category/nguoiky', function () {
    return view('/pages/category/nguoiky');
});

Route::get('/pages/incomingtext/vaoso', function () {
    return view('/pages/incomingtext/vaoso');
});

Route::get('/pages/incomingtext/butphe', function () {
    return view('/pages/incomingtext/butphe');
});
Route::get('/pages/incomingtext/chuyenvb', function () {
    return view('/pages/incomingtext/chuyenvb');
});
Route::get('/pages/incomingtext/theodoi', function () {
    return view('/pages/incomingtext/theodoi');
});
Route::get('/pages/incomingtext/xuly', function () {
    return view('/pages/incomingtext/xuly');
});

Route::get('/pages/textaway/vaosodi', function () {
    return view('/pages/textaway/vaosodi');
});
Route::get('/pages/textaway/dsvbdi', function () {
    return view('/pages/textaway/dsvbdi');
});
Route::get('/pages/textaway/baocaodi', function () {
    return view('/pages/textaway/baocaodi');
});
Route::get('/pages/internal/baocaoin', function () {
    return view('/pages/internal/baocaoin');
});
Route::get('/pages/internal/dsvbin', function () {
    return view('/pages/internal/dsvbin');
});
Route::get('/pages/internal/vaosoin', function () {
    return view('/pages/internal/vaosoin');
});

