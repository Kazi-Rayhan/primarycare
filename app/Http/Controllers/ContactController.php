<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSubmission;
use App\Models\Provider;
use App\Models\FAQ;
use App\Mail\ContactFormSubmitted;

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
        $submission = ContactSubmission::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'provider_id' => $request->provider_id,
            'status' => 'pending',
        ]);

        // Send email notification to admin
        $adminEmail = setting('contact.email.admin');
        
        if ($adminEmail) {
            try {
                Mail::to($adminEmail)->send(new ContactFormSubmitted([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'message' => $request->message,
                    'provider_id' => $request->provider_id,
                    'submission_id' => $submission->id,
                ]));
            } catch (\Exception $e) {
                // Log the error but don't fail the submission
                \Log::error('Failed to send contact form notification: ' . $e->getMessage());
            }
        }
        
        $message = 'Thank you for your message. We will get back to you within 24 hours.';
        
        if ($request->provider_id) {
            $provider = Provider::find($request->provider_id);
            $message = "Thank you for your message regarding Dr. {$provider->name}. We will get back to you within 24 hours.";
        }
        
        return redirect()->back()->with('success', $message);
    }
} 