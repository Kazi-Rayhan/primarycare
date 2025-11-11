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
                        <a href="{{ route('services') }}"
                            class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">Services</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-gray-900 dark:text-gray-100 font-medium">{{ $service->title }}</span>
                    </li>
                </ol>
            </nav>

            <!-- Service Header -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">{{ $service->title }}</h1>
                <div class="flex items-center space-x-4 text-sm text-gray-600 dark:text-gray-400">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                        Service
                    </span>
                    <span>Last updated: {{ $service->updated_at->format('M j, Y') }}</span>
                </div>
            </div>

            <!-- Service Content -->
            <div class="card">
                <div class="rich-content text-gray-900 dark:text-gray-300">
                    {!! $service->description !!}
                </div>
            </div>

            <!-- Back to Services -->
            <div class="mt-8 text-center">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Services
                </a>
            </div>
        </div>
    </div>
@endsection
