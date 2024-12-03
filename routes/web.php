<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::view('/', 'welcome');
Volt::route('courses', 'frontend.course.index')->name('courses');
Volt::route('courses/{id}', 'frontend.course.course-item')->name('course-item');
Volt::route('cart', 'frontend.cart.index')->name('cart-section');

Route::view('course/course1', 'backend.course-video')->name('user_course');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::group(['middleware' => ['role:instructor']], function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::view('subscribe-courses', 'subscribe-courses')->name('subscribe-courses');
    
        Route::view('instructor-courses', 'backend.instructor.courses.index-courses-section')->name('instructor-courses');
        Route::view('instructor-courses/add', 'backend.instructor.courses.add-courses-section')->name('instructor-courses-add');
    });

    Route::group(['middleware' => ['role:student']], function () {
        Volt::route('student/dashboard', 'backend.student.dashboard')->name('student-dashboard');
        Volt::route('student/my-courses', 'backend.student.my-courses')->name('student-my-courses');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
