@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 via-light-purple to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-dark-text mb-6">
                    Contact Us
                </h1>
                <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                    We're here to help. Get in touch with us for appointments, questions, or to learn more about our services.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Details -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-8">Get in Touch</h2>
                    
                    <div class="space-y-8">
                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">Visit Our Clinic</h3>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">123 Main Street</p>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">City, State 12345</p>
                                <p class="text-gray-700 dark:text-gray-300">United States</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">Call Us</h3>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">Main Office: (555) 123-4567</p>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">Emergency: (555) 911-0000</p>
                                <p class="text-gray-700 dark:text-gray-300">Fax: (555) 123-4568</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">Email Us</h3>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">General: info@primarycareclinic.com</p>
                                <p class="text-gray-700 dark:text-gray-300 mb-1">Appointments: appointments@primarycareclinic.com</p>
                                <p class="text-gray-700 dark:text-gray-300">Billing: billing@primarycareclinic.com</p>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">Office Hours</h3>
                                <div class="space-y-1 text-gray-700 dark:text-gray-300">
                                    <p><span class="font-medium">Monday - Friday:</span> 8:00 AM - 6:00 PM</p>
                                    <p><span class="font-medium">Saturday:</span> 9:00 AM - 2:00 PM</p>
                                    <p><span class="font-medium">Sunday:</span> Closed</p>
                                    <p><span class="font-medium">Holidays:</span> Closed (call for emergency)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Information -->
                    <div class="mt-8 p-6 bg-red-50 dark:bg-red-900/20 rounded-lg border border-red-200 dark:border-red-800">
                        <h3 class="text-lg font-semibold text-red-800 dark:text-red-200 mb-2">Emergency Care</h3>
                        <p class="text-red-700 dark:text-red-300 mb-3">
                            For medical emergencies, please call 911 or go to the nearest emergency room immediately.
                        </p>
                        <p class="text-sm text-red-600 dark:text-red-400">
                            Our clinic is not equipped for emergency care outside of regular business hours.
                        </p>
                    </div>
                </div>

                <!-- Map -->
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-dark-text mb-6">Our Location</h3>
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-lg h-96 mb-6 overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.4685894148215!2d90.34812327408235!3d22.710818227892624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37553535680490d1%3A0x72ca830e6c94a34b!2sSohojware!5e0!3m2!1sen!2sbd!4v1754223193244!5m2!1sen!2sbd"
                            class="w-full h-full"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    
                    <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                        <p><span class="font-medium">Parking:</span> Free parking available in front of the building</p>
                        <p><span class="font-medium">Accessibility:</span> Wheelchair accessible entrance and facilities</p>
                        <p><span class="font-medium">Public Transit:</span> Bus routes 15, 23, and 45 stop nearby</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-4">Send Us a Message</h2>
                <p class="text-lg text-gray-700 dark:text-gray-300 max-w-2xl mx-auto">
                    Have a question or need to schedule an appointment? Fill out the form below and we'll get back to you within 24 hours.
                </p>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
                    <p class="text-green-800 dark:text-green-200">{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-2">
                            First Name *
                        </label>
                        <input type="text" 
                               id="first_name" 
                               name="first_name" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('first_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-2">
                            Last Name *
                        </label>
                        <input type="text" 
                               id="last_name" 
                               name="last_name" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('last_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-2">
                            Email Address *
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-2">
                            Phone Number
                        </label>
                        <input type="tel" 
                               id="phone" 
                               name="phone"
                               class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('phone')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-2">
                        Message *
                    </label>
                    <textarea id="message" 
                              name="message" 
                              rows="6" 
                              required
                              placeholder="Please describe your inquiry or appointment request..."
                              class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    @error('message')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" 
                            class="btn-primary inline-flex items-center px-8 py-3 text-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-700 dark:text-gray-300">
                    Find answers to common questions about our services and policies.
                </p>
            </div>

            <div class="space-y-6">
                <div class="card">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-3">How do I schedule an appointment?</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        You can schedule an appointment by calling us at (555) 123-4567, using our online booking system, or by filling out the contact form above. We typically respond within 24 hours.
                    </p>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-3">Do you accept insurance?</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        Yes, we accept most major insurance plans. Please contact our office to verify your specific insurance coverage before your appointment.
                    </p>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-3">What should I bring to my first appointment?</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        Please bring your ID, insurance card, list of current medications, and any relevant medical records. New patients should arrive 15 minutes early to complete paperwork.
                    </p>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-3">Do you offer telehealth appointments?</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        Yes, we offer telehealth appointments for many types of visits. Please call us to determine if your appointment type is suitable for telehealth.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection 