<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSubmission;
use App\Models\Provider;
use App\Models\FAQ;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $selectedProvider = null;
        
        if ($request->has('provider')) {
            $selectedProvider = Provider::find($request->provider);
        }
        
        $faqs = FAQ::active()->ordered()->get();
        
        return view('contact.index', compact('selectedProvider', 'faqs'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
            'provider_id' => 'nullable|exists:providers,id',
        ]);

        // Save the contact submission to database
        ContactSubmission::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'provider_id' => $request->provider_id,
            'status' => 'pending',
        ]);

        // Here you would typically send an email notification
        // For now, we'll just redirect with a success message
        
        $message = 'Thank you for your message. We will get back to you within 24 hours.';
        
        if ($request->provider_id) {
            $provider = Provider::find($request->provider_id);
            $message = "Thank you for your message regarding Dr. {$provider->name}. We will get back to you within 24 hours.";
        }
        
        return redirect()->back()->with('success', $message);
    }
} 