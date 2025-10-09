@extends('layouts.app')
@section('content')
    <!-- Resources Section with Modern Design -->
    <section id="resources" class="py-16 bg-gradient-to-r from-blue-500 to-teal-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-4 py-2 bg-white/20 text-white rounded-full text-sm font-medium mb-4">
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
@endsection
