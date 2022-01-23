<?php

use App\Http\Livewire\Live;
use App\Http\Livewire\Lesson;
use App\Http\Livewire\Student;
use App\Http\Livewire\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BackendController;

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

Route::get('/', function () {
    if (Auth::check()) {
       if (auth()->user()->hasRole('lecturer')) {
        return view('admin.panel');
       }
       else{
        return redirect('/classes');
       }
    }
    return view('auth.login');
});

// emails
Route::view('contact-response', 'emails.contact-response');
Route::view('contact-mail', 'emails.contact-form');


Route::get('/students', Student::class)->name('students')->middleware('auth');
Route::get('/attendance', Attendance::class)->name('attendance')->middleware('auth');
Route::get('/classes', Lesson::class)->name('classes')->middleware('auth');
Route::get('/live', Live::class)->name('live')->middleware('auth');
Route::get('all-books', [BookController::class, 'index'])->name('admin.book')->middleware('role:librarian');
