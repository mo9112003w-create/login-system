<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PricingPlanController;
use App\Models\PricingPlan;
use App\Models\Doctor;
use App\Http\Controllers\BookingController;

// الصفحة الرئيسية
Route::get('/welcome', function () {
    $plans = PricingPlan::all();// جلب كل الباقات من الداتابيز
    $doctors = Doctor::all();
    return view('welcome', compact('plans'),compact('doctors'));
});

Route::get('/pricing', [PricingPlanController::class, 'index'])
    ->name('pricing');

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});


Route::get('/team', [PricingPlanController::class, 'doctor'])->name('doctors');

// عرض صفحة الحجز (GET)
Route::get('/Apointment', [BookingController::class, 'create'])->name('booking.create');

// حفظ الحجز (POST)
Route::post('/Apointment', [BookingController::class, 'store'])->name('booking.store');

Route::get('contact', function () {
    return view('contact');
});