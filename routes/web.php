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

Volt::route('/', 'frontend-new.home')->name('home_new');
Volt::route('/courses1', 'frontend-new.courses')->name('courses_new');
Volt::route('/contact', 'frontend-new.contact')->name('contact_new');
Volt::route('/about', 'frontend-new.about')->name('about_new');

// Volt::route('/', 'frontend.index.home')->name('home');
// Volt::route('about', 'frontend.index.about')->name('about');
// Volt::route('contact-us', 'frontend.index.contact')->name('contact');
Volt::route('courses', 'frontend.course.index')->name('courses');
Volt::route('courses/{id}', 'frontend.course.course-item')->name('course-item');
Volt::route('cart', 'frontend.cart.index')->name('cart-section');

Route::view('course/course1', 'backend.course-video')->name('user_course');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::group(['middleware' => ['role:instructor']], function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::view('subscribe-courses', 'subscribe-courses')->name('subscribe-courses');
    
        Volt::route('instructor-courses', 'instructor.courses.table')->name('instructor-courses');
        Volt::route('instructor-courses/add', 'instructor.courses.add')->name('instructor-courses-add');
        Volt::route('instructor-courses/edit/{id}', 'instructor.courses.edit')->name('instructor-courses-edit');
        Route::view('instructor-courses/{id}/announcement', 'backend.instructor.courses.add-announcement')->name('instructor-courses-add-announcement');
    });

    Route::group(['middleware' => ['role:student']], function () {
        Volt::route('student/dashboard', 'backend.student.dashboard')->name('student-dashboard');
        Volt::route('student/my-courses', 'backend.student.my-courses')->name('student-my-courses');
        Volt::route('/cart', 'frontend-new.cart')->name('cart');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
