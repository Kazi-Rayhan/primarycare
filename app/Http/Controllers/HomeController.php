<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Provider;
use App\Models\PatientResource;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::active()->ordered()->take(6)->get();
        $providers = Provider::active()->ordered()->take(6)->get();
        $patientResources = PatientResource::active()->ordered()->take(6)->get();
        
        return view('welcome', compact('services', 'providers', 'patientResources'));
    }
} 