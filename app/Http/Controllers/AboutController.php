<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\Service;

class AboutController extends Controller
{
    public function index()
    {
        $providers = Provider::active()->ordered()->take(6)->get();
        $services = Service::active()->ordered()->take(8)->get();
        
        return view('about.index', compact('providers', 'services'));
    }
} 