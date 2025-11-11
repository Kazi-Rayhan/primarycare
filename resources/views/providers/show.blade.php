@extends('layouts.app')

@section('content')
    <div class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <li><a href="{{ route('home') }}"
                            class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">Home</a></li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="{{ route('about') }}"
                            class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">About</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-900 dark:text-gray-100 font-medium">{{ $provider->name }}</span>
                    </li>
                </ol>
            </nav>

            <!-- Provider Profile Card -->
            <div class="card mb-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Provider Photo -->
                    <div class="flex-shrink-0">
                        <div class="w-64 h-64 rounded-lg overflow-hidden">
                            <img src="{{ $provider->photo_url }}" alt="{{ $provider->name }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                                {{ $provider->specialty }}
                            </span>
                        </div>
                    </div>

                    <!-- Provider Info -->
                    <div class="flex-1">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-2">{{ $provider->name }}</h1>
                        <p class="text-xl text-blue-600 dark:text-blue-400 mb-4">{{ $provider->title }}</p>

                        <!-- Contact Information -->
                        <div class="space-y-3 mb-6">
                            @if ($provider->email)
                                <div class="flex items-center text-gray-700 dark:text-gray-300">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <a href="mailto:{{ $provider->email }}"
                                        class="hover:text-blue-600 dark:hover:text-blue-400">{{ $provider->email }}</a>
                                </div>
                            @endif

                            @if ($provider->phone)
                                <div class="flex items-center text-gray-700 dark:text-gray-300">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    <a href="tel:{{ $provider->phone }}"
                                        class="hover:text-blue-600 dark:hover:text-blue-400">{{ $provider->phone }}</a>
                                </div>
                            @endif
                        </div>

                        <!-- Quick Actions -->
                        {{-- <div class="flex flex-wrap gap-4">
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-lg hover:from-blue-600 hover:to-purple-600 transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Schedule Appointment
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Biography Section -->
            <div class="card mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">About {{ $provider->name }}</h2>
                <div class="rich-content text-gray-700 dark:text-gray-300">
                    {!! nl2br(e($provider->bio)) !!}
                </div>
            </div>

            <!-- Back to Team -->
            <div class="text-center">
                <a href="{{ route('about') }}"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Our Team
                </a>
            </div>
        </div>
    </div>
@endsection
