<?php

use Illuminate\Support\Facades\Route;
use App\Models\PatientResource;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/patient-resources', [HomeController::class, 'patientResources'])->name('patient.resources');

// Patient Resource Pages
Route::get('/resources/{slug}', function ($slug) {
    $resource = PatientResource::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('resources.show', compact('resource'));
})->name('resources.show');
