<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');

    Route::get('/problems', function () {
        return view('pages.problems');
    })->name('problems');

    Route::get('/attendanceSchedule', function () {
        return view('pages.attendanceSchedule');
    })->name('attendanceSchedule');

    Route::get('/examSchedule', function () {
        return view('pages.examSchedule');
    })->name('examSchedule');

    Route::get('/transportLines', function () {
        return view('pages.transportLines');
    })->name('transportLines');

    Route::get('/dailyLines', function () {
        return view('pages.dailyLines');
    })->name('dailyLines');

    Route::get('/tsmmStudentsData', function () {
        return view('pages.tsmmStudentsData');
    })->name('tsmmStudentsData');

    Route::get('/remoteMonitoring', function () {
        return view('pages.remoteMonitoring');
    })->name('remoteMonitoring');

});

