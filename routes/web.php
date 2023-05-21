<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Underwear;

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

Route::get('/admin', function () {
    return view('admin.underwears.index');
});

Route::get('/guest/checkout', function () {
    return view('guest.checkout');
});

Route::get('/guest/landing', function () {
    return view('guest.landing');
});

Route::get('/guest/thanks', function () {
    return view('guest.thanks');
});

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.') //name
    ->prefix('admin') //uri
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('underwears', 'HomeController');
    });

Route::get('{any?}', function ($name = null) {
    $underwears = Underwear::all();
    return view('guest.welcome', ['underwears' => $underwears]);
})->where('any', '.*');
