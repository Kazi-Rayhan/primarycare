@extends('layouts.app')
<style>
    @keyframes slide-up {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-up {
        animation: slide-up 1s ease-out both;
    }
</style>
@section('content')

    <!-- Image Slider Section -->
    <section class="relative w-full overflow-hidden" style="margin-top: 15px">
        <div id="homepage-slider" class="flex transition-transform duration-700 ease-in-out">

            @foreach (setting('homepage.slider', []) as $slide)
                <div class="w-full flex-shrink-0 relative">
                    <!-- Background Image -->
                    <img src="{{ Storage::url($slide['image']) }}" alt="{{ $slide['title'] ?? 'Slide' }}"
                        class="w-full h-[600px] object-cover">

                    <!-- Content Overlay -->
                    {{-- @if (!empty($slide['title']) || !empty($slide['description']))
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent flex items-center">
                            <div class="max-w-2xl px-6 md:px-12 lg:px-20 text-left space-y-4 animate-slide-up">
                                <h2 class="text-4xl md:text-6xl font-extrabold text-white leading-tight drop-shadow-md">
                                    {{ $slide['title'] ?? '' }}
                                </h2>
                                <p class="text-lg md:text-xl text-gray-200 max-w-xl leading-relaxed drop-shadow">
                                    {{ $slide['description'] ?? '' }}
                                </p>

                            </div>
                        </div>
                    @endif --}}
                </div>
            @endforeach

        </div>

        <!-- Controls -->
        <button onclick="prevSlide()"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 text-2xl font-bold px-3 py-2 rounded-full shadow">
            ‹
        </button>
        <button onclick="nextSlide()"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 text-2xl font-bold px-3 py-2 rounded-full shadow">
            ›
        </button>
    </section>




    <!-- About Section with Modern Cards -->
    <section id="about" class="py-16 bg-gray-50 dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                {{-- <div
                    class="inline-flex items-center px-4 py-2 bg-light-purple text-blue-800 rounded-full text-sm font-medium mb-4">
                    About Us
                </div> --}}
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    {{ setting('about.section.title', 'About Primary Care Clinic') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('about.section.description', 'We are a team of dedicated healthcare professionals committed to providing personalized, compassionate care to our community.') }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card text-center group hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">
                        {{ setting('about.features.comprehensive.title', 'Comprehensive Care') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        {{ setting('about.features.comprehensive.description', 'From routine checkups to chronic disease management, we provide complete primary care services.') }}
                    </p>
                </div>
                <div class="card text-center group hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">
                        {{ setting('about.features.patient_centered.title', 'Patient-Centered') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        {{ setting('about.features.patient_centered.description', 'We listen to your concerns and work with you to develop personalized treatment plans.') }}
                    </p>
                </div>
                <div class="card text-center group hover:shadow-2xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">
                        {{ setting('about.features.convenient.title', 'Convenient Access') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        {{ setting('about.features.convenient.description', 'Easy scheduling, telehealth options, and extended hours to fit your busy lifestyle.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section with Modern Design -->
    <section id="services" class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                    Our Services
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    {{ setting('services.section.title', 'Our Services') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('services.section.description', 'We offer a comprehensive range of primary care services to meet your health needs.') }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="card group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300">{!! Str::limit($service->description, 120) !!}</p>
                        <div class="mt-4">
                            <a href="{{ route('resources.show', $service->slug) }}"
                                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                Learn More
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Section with Polished Doctor Cards -->
    <section id="team" class="py-16 bg-gradient-to-br from-gray-50 to-blue-50 dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-4">
                    {{ setting('team.section.title', 'Meet Our Team') }}
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    {{ setting('team.section.title', 'Meet Our Team') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('team.section.description', 'Our experienced healthcare professionals are dedicated to providing you with the best care possible.') }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($providers as $provider)
                    <div class="team-card group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="relative mb-6">
                            <img src="{{ $provider->photo_url }}" alt="{{ $provider->name }}"
                                class="doctor-image mx-auto group-hover:scale-105 transition-transform duration-300">
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    {{ $provider->specialty }}
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-1">{{ $provider->name }}</h3>
                        <p class="text-blue-600 dark:text-blue-400 mb-3">{{ $provider->title }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">{!! Str::limit($provider->bio, 150) !!}</p>
                        <a href="{{ route('contact') }}?provider={{ $provider->id }}"
                            class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white py-2 px-4 rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 transition-all duration-300 inline-block text-center">
                            Make an Appointment
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Opening Hours & Location Section -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-4">
                    Location & Hours
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    Visit Our Clinic
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Conveniently located with extended hours to serve your healthcare needs.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Opening Hours -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Office Hours</h3>
                    <div class="space-y-1 text-gray-600 dark:text-gray-300">
                        <p>
                            <span class="font-medium">Monday - Friday:</span>
                            {{ setting('contact.hours.monday_friday', '8:00 AM - 6:00 PM') }}
                        </p>
                        <p>
                            <span class="font-medium">Saturday:</span>
                            {{ setting('contact.hours.saturday', '9:00 AM - 2:00 PM') }}
                        </p>
                        <p>
                            <span class="font-medium">Sunday:</span>
                            {{ setting('contact.hours.sunday', 'Closed') }}
                        </p>
                        <p>
                            <span class="font-medium">Holidays:</span>
                            {{ setting('contact.hours.holidays', 'Closed (call for emergency)') }}
                        </p>
                    </div>
                </div>


                <!-- Map -->
                <div class="map-container">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-dark-text mb-6">Our Location</h3>
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-lg h-64 mb-4 overflow-hidden">
                        <iframe
                            src="{{ setting('contact.location.map_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.4685894148215!2d90.34812327408235!3d22.710818227892624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37553535680490d1%3A0x72ca830e6c94a34b!2sSohojware!5e0!3m2!1sen!2sbd!4v1754223193244!5m2!1sen!2sbd') }}"
                            class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <p><strong>Address:</strong>
                            {{ setting('contact.address.street', '123 Main Street') }}<br>{{ setting('contact.address.city', 'City') }},
                            {{ setting('contact.address.state', 'State') }}
                            {{ setting('contact.address.zip', '12345') }}</p>
                        <p><strong>Phone:</strong> {{ setting('contact.phone.main', '(555) 123-4567') }}</p>
                        <p><strong>Email:</strong> {{ setting('contact.email.general', 'info@primarycareclinic.com') }}</p>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section with Modern Design -->
    <section id="resources" class="py-16 bg-gradient-to-r from-blue-500 to-teal-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/20 text-white rounded-full text-sm font-medium mb-4">
                    Patient Resources
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Patient Resources
                </h2>
                <p class="text-lg text-white/90 max-w-3xl mx-auto">
                    Everything you need to know about our services, policies, and patient information.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($patientResources as $resource)
                    <div
                        class="card bg-white/90 backdrop-blur-sm group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $resource->title }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{!! Str::limit(strip_tags($resource->content), 100) !!}</p>
                        <a href="{{ route('resources.show', $resource->slug) }}"
                            class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                            Learn More
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- Contact Section with Modern Design -->
    <section id="contact" class="py-16 bg-gray-50 dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                {{-- <div
                    class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-4">
                    {{ setting('contact.section.title', 'Contact Us') }}
                </div> --}}
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    {{ setting('contact.section.title', 'Contact Us') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('contact.section.description', 'Ready to schedule an appointment? Get in touch with us today.') }}
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-dark-text mb-6">Get In Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-dark-text">Address</h4>
                                <p class="text-gray-600 dark:text-gray-300">
                                    {{ setting('contact.address.street', '123 Main Street') }}<br>{{ setting('contact.address.city', 'City') }},
                                    {{ setting('contact.address.state', 'State') }}
                                    {{ setting('contact.address.zip', '12345') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-dark-text">Phone</h4>
                                <p class="text-gray-600 dark:text-gray-300">
                                    {{ setting('contact.phone.main', '(555) 123-4567') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-dark-text">Email</h4>
                                <p class="text-gray-600 dark:text-gray-300">
                                    {{ setting('contact.email.general', 'info@primarycareclinic.com') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-semibold text-gray-900 dark:text-dark-text mb-4">Office Hours</h4>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                            <p>Monday - Friday: {{ setting('contact.hours.monday_friday', '8:00 AM - 6:00 PM') }}</p>
                            <p>Saturday: {{ setting('contact.hours.saturday', '9:00 AM - 2:00 PM') }}</p>
                            <p>Sunday: {{ setting('contact.hours.sunday', 'Closed') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="card bg-white shadow-xl">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-dark-text mb-6">
                        {{ setting('contact.form.title', 'Send Us a Message') }}</h3>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name"
                                    class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-1">First
                                    Name</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-dark-surface rounded-lg bg-white dark:bg-dark-surface text-gray-900 dark:text-dark-text focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-1">Last
                                    Name</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-dark-surface rounded-lg bg-white dark:bg-dark-surface text-gray-900 dark:text-dark-text focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-1">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-3 py-2 border border-gray-300 dark:border-dark-surface rounded-lg bg-white dark:bg-dark-surface text-gray-900 dark:text-dark-text focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-1">Phone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-dark-surface rounded-lg bg-white dark:bg-dark-surface text-gray-900 dark:text-dark-text focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-900 dark:text-dark-text mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-3 py-2 border border-gray-300 dark:border-dark-surface rounded-lg bg-white dark:bg-dark-surface text-gray-900 dark:text-dark-text focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white py-3 px-6 rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        const slider = document.getElementById('homepage-slider');
        let currentIndex = 0;

        function showSlide(index) {
            const totalSlides = slider.children.length;
            if (index < 0) index = totalSlides - 1;
            if (index >= totalSlides) index = 0;
            currentIndex = index;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        setInterval(nextSlide, 6000); // auto-slide every 6s
    </script>
@endsection
