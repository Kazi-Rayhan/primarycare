<?php

use Illuminate\Support\Facades\Route;
use App\Models\PatientResource;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Patient Resource Pages
Route::get('/resources/{slug}', function ($slug) {
    $resource = PatientResource::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('resources.show', compact('resource'));
})->name('resources.show');

// Contact Form Handler
Route::post('/contact', function () {
    // Handle contact form submission
    return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon.');
})->name('contact.submit');
