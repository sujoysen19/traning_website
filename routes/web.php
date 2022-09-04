<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageContact;
// use App\Http\Controllers\SubjectController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tutorials', function () {
    return view('tutorials');
})->name('tutorials');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/web-design', function () {
    return view('web-design');
})->name('web-design');

Route::get('/web-development', function () {
    return view('web-development');
})->name('web-development');

Route::get('/full-stack', function () {
    return view('full-stack');
})->name('full-stack');





Route::post('/send-message',[MessageContact::class,'sendMessage'])->name('send-message');

Route::post('/send-subject-mail',[MessageContact::class,'subjectMail'])->name('send-subject-mail');
