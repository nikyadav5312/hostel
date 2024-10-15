<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formcontroller;
 
use App\Http\Controllers\Hostelcontroller;
use function PHPSTORM_META\registerArgumentsSet;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index');
Route::view('login', 'login');
Route::post('/login', 'Formcontroller@login');
Route::post('/register', 'Formcontroller@insertdata');
Route::view('/register', 'register');
Route::get('/logout', 'Formcontroller@logout')->name('logout');

 
 



Route::post('/hostel', 'Hostelcontroller@adhostel');
Route::view('hostel', 'hostel');
Route::get('/', 'Hostelcontroller@showHostel');