<?php
namespace App\Http\Controllers;

use App\Models\PatientResource;
use App\Models\Provider;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {

        $providers = Provider::active()->ordered()->take(6)->get();

        return view('welcome', compact('providers'));
    }
    public function services()
    {
        $services = Service::active()->ordered()->get();
        return view('services.index', compact('services'));
    }
    public function patientResources()
    {
        $patientResources = PatientResource::active()->ordered()->get();
        return view('patient.index', compact('patientResources'));
    }
}
