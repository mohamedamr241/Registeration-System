<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\APIController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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

/* PAGES */

Route::get('/', function () { //signUp
    return view('index');
});
Route::get('/login', function () { //Login
    return view('Login');
});

Route::get('/profile', function () { //Profile
    return view('profile');
});

Route::get('/logout', function () { //Profile
    if (session()->has('img') && session()->has('username') && session()->has('email')) {
        session()->pull('img');
        session()->pull('username');
        session()->pull('email');
    }
    return redirect('login');
})->name('loggingOut');

/*CONTROLLERS*/
Route::post('/register', [signUpController::class, 'register'])->name('sendData');
Route::post('/verify', [SignInController::class, 'signIn'])->name('sendUserData');
Route::post('/getAPIData', [APIController::class, 'ContactWithAPI'])->name('GetAPIData');
Route::get('/testroute', function () {
    $name = "MAHY :)";

    // The email sending is done using the to method on the Mail facade
    Mail::to('mahymahrous44@gmail.com')->send(new WelcomeMail($name));
});
