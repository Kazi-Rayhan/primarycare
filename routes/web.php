<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\PatientResource;
use App\Models\Provider;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/patient-resources', [HomeController::class, 'patientResources'])->name('patient.resources');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
// Service Detail Page
Route::get('/services/{slug}', function ($slug) {
    $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('services.show', compact('service'));
})->name('services.show');

// Provider Detail Page
Route::get('/providers/{id}', function ($id) {
    $provider = Provider::where('id', $id)->where('is_active', true)->firstOrFail();
    return view('providers.show', compact('provider'));
})->name('providers.show');

// Patient Resource Pages
Route::get('/resources/{slug}', function ($slug) {
    $resource = PatientResource::where('slug', $slug)->where('is_active', true)->firstOrFail();
    return view('resources.show', compact('resource'));
})->name('resources.show');
