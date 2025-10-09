@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-br from-blue-50 via-light-purple to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white dark:text-dark-text mb-6">
                    {{ setting('about.page.title', 'About Our Clinic') }}
                </h1>
                <p class="text-xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('about.page.description', 'Dedicated to providing exceptional primary care services with compassion, expertise, and a commitment to your health and well-being.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-900 dark:text-gray-300 mb-6">
                        {{ setting('about.mission', 'At Primary Care Clinic, we believe that everyone deserves access to high-quality, personalized healthcare. Our mission is to provide comprehensive primary care services that promote health, prevent illness, and support our community\'s well-being.') }}
                    </p>
                    <p class="text-lg text-gray-900 dark:text-gray-300 mb-8">
                        {{ setting('about.vision', 'We are committed to building lasting relationships with our patients, understanding their unique health needs, and working together to achieve optimal health outcomes.') }}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-dark-text">Patient-Centered Care</h3>
                                <p class="text-sm text-gray-900 dark:text-gray-300">We put our patients first in everything
                                    we do.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-dark-text">Excellence</h3>
                                <p class="text-sm text-gray-900 dark:text-gray-300">Committed to the highest standards of
                                    medical care.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-dark-text">Innovation</h3>
                                <p class="text-sm text-gray-900 dark:text-gray-300">Embracing new technologies and treatment
                                    approaches.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-dark-text">Community</h3>
                                <p class="text-sm text-gray-900 dark:text-gray-300">Serving and supporting our local
                                    community.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl transform rotate-3">
                    </div>
                    <div class="relative bg-white dark:bg-dark-surface rounded-2xl p-8 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Medical team" class="w-full h-64 object-cover rounded-xl">
                        <div class="mt-6 text-center">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-2">
                                {{ setting('about.team.image.title', 'Our Team') }}</h3>
                            <p class="text-gray-900 dark:text-gray-300">
                                {{ setting('about.team.image.description', 'Dedicated healthcare professionals committed to your health') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white dark:text-dark-text mb-4">
                    {{ setting('history.section.title', 'Our Story') }}</h2>
                <p class="text-lg text-white dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('history.section.description', 'Founded with a vision to provide accessible, high-quality healthcare to our community.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white dark:text-dark-text mb-2">
                        {{ setting('history.timeline.2018.title', '2018') }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        {{ setting('history.timeline.2018.description', 'Founded with a small team of dedicated healthcare professionals') }}
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white dark:text-dark-text mb-2">
                        {{ setting('history.timeline.2020.title', '2020') }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        {{ setting('history.timeline.2020.description', 'Expanded services and added telehealth capabilities') }}
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white dark:text-dark-text mb-2">
                        {{ setting('history.timeline.2024.title', '2024') }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">
                        {{ setting('history.timeline.2024.description', 'Leading primary care provider serving thousands of patients') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-4">
                    {{ setting('services.section.title', 'Our Services') }}</h2>
                <p class="text-lg text-gray-900 dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('services.section.description', 'Comprehensive primary care services designed to meet all your healthcare needs.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($services as $service)
                    <div class="card text-center group hover:shadow-2xl transition-all duration-300">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-2">{{ $service->title }}
                        </h3>
                        <p class="text-sm text-gray-900 dark:text-gray-300">{{ Str::limit($service->description, 100) }}
                        </p>
                        <a href="{{ route('resources.show', $service->slug) }}"
                            class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm mt-2">
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

    <!-- Team Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white dark:text-dark-text mb-4">
                    {{ setting('team.section.title', 'Meet Our Team') }}</h2>
                <p class="text-lg text-white dark:text-gray-300 max-w-3xl mx-auto">
                    {{ setting('team.section.description', 'Our experienced healthcare professionals are dedicated to providing you with the best possible care.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($providers as $provider)
                    <div class="team-card group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="relative mb-6">
                            <div class="w-full aspect-square overflow-hidden rounded-lg">
                                <img src="{{ $provider->photo_url }}" alt="{{ $provider->name }}"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            </div>
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    {{ $provider->specialty }}
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-dark-text mb-1">{{ $provider->name }}
                        </h3>
                        <p class="text-blue-600 dark:text-blue-400 mb-3">{{ $provider->title }}</p>
                        <p class="text-sm text-gray-700 dark:text-gray-300 mb-4">{!! Str::limit($provider->bio, 150) !!}p>

                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-blue-500 to-purple-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Ready to Experience Better Healthcare?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join our community of patients who trust us with their health and well-being.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    Schedule an Appointment
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
