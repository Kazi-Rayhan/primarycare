<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\Service;

class AboutController extends Controller
{
    public function index()
    {
        $providers = Provider::active()->ordered()->get();
        $services = Service::active()->ordered()->get();
        
        return view('about.index', compact('providers', 'services'));
    }
} 