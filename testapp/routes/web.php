<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'entry'], function () {
    Route::get('/', function () {
        return view('entry');
    })->name('entry');

    Route::post('/save', function () {
        return "Elligile !!";
    })->middleware('checkReq');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return '<a href="/user/Random User">Greet</a>';
    })->name('randomGreet');

    Route::get('/{username}', function ($username) {
        return view('greet', ['username' => $username]);
    })->name('userGreet');
});

# This route sends the number and the view gives table(1-10) of that number.
Route::get('/table/{number?}', function ($number = 2) {
    return view('table', ['number' => $number]);
})->where('number', '[0-9]*');


Route::group(['prefix' => 'user'], function () {
    Route::get("/home", function () {
        return "Welcome to home page of this app";
    })->name("userHome");
});

Route::get('/login', function () {
    return view('login');
})->name('loginPage')
    ->middleware('preventFromAccessingPage');


#Auth Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardPage')->middleware('redirectIfAuthenticated');


Route::post('/login', [UserController::class, 'verifyCredentials']);


Route::get("/logout", [UserController::class, "logoutUser"]);



# for blade demonstration
Route::get("/home", function () {
    return view('home');    
});