<?php

use Illuminate\Support\Facades\Route;
use App\Models\PatientResource;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Patient Resource Pages
Route::get('/resources/{slug}', function ($slug) {
    $resource = PatientResource::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('resources.show', compact('resource'));
})->name('resources.show');
