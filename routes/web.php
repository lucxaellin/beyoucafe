<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeliveryController;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/user_desktop', function () {
    return view('user_desktop');
})->name('user_desktop');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery'); 

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/account_settings', function () {
    return view('account_settings');
})->name('account_settings');

