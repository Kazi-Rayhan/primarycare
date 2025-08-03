@extends('layouts.app')

@section('content')
<div class="py-16 bg-white dark:bg-dark-bg">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-black dark:text-dark-text">
                <li><a href="{{ route('home') }}" class="hover:text-blue dark:hover:text-blue motion-safe:transition-colors">Home</a></li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <a href="#resources" class="hover:text-blue dark:hover:text-blue motion-safe:transition-colors">Resources</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-black dark:text-dark-text">{{ $resource->title }}</span>
                </li>
            </ol>
        </nav>

        <!-- Resource Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-black dark:text-dark-text mb-4">{{ $resource->title }}</h1>
            <div class="flex items-center space-x-4 text-sm text-black dark:text-dark-text">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-light-purple text-black">
                    {{ ucfirst($resource->resource_type) }}
                </span>
                <span>Last updated: {{ $resource->updated_at->format('M j, Y') }}</span>
            </div>
        </div>

        <!-- Resource Content -->
        <div class="card">
            @if($resource->resource_type === 'page')
                <div class="prose prose-lg max-w-none text-black dark:text-dark-text">
                    {!! $resource->content !!}
                </div>
            @elseif($resource->resource_type === 'form' && $resource->file_path)
                <div class="space-y-6">
                    <div class="prose prose-lg max-w-none text-black dark:text-dark-text">
                        {!! $resource->content !!}
                    </div>
                    <div class="border-t border-silver dark:border-dark-surface pt-6">
                        <h3 class="text-lg font-semibold text-black dark:text-dark-text mb-4">Download Form</h3>
                        <a href="{{ $resource->file_url }}" 
                           class="inline-flex items-center px-4 py-2 bg-blue text-white rounded-lg hover:bg-blue-600 motion-safe:transition-colors"
                           download>
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            Download {{ $resource->title }}
                        </a>
                    </div>
                </div>
            @elseif($resource->resource_type === 'link' && $resource->external_link)
                <div class="space-y-6">
                    <div class="prose prose-lg max-w-none text-black dark:text-dark-text">
                        {!! $resource->content !!}
                    </div>
                    <div class="border-t border-silver dark:border-dark-surface pt-6">
                        <h3 class="text-lg font-semibold text-black dark:text-dark-text mb-4">External Resource</h3>
                        <a href="{{ $resource->external_link }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="inline-flex items-center px-4 py-2 bg-blue text-white rounded-lg hover:bg-blue-600 motion-safe:transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                            Visit External Resource
                        </a>
                    </div>
                </div>
            @else
                <div class="prose prose-lg max-w-none text-black dark:text-dark-text">
                    {!! $resource->content !!}
                </div>
            @endif
        </div>

        <!-- Back to Resources -->
        <div class="mt-8 text-center">
            <a href="{{ route('home') }}#resources" 
               class="inline-flex items-center text-blue dark:text-blue hover:underline motion-safe:transition-colors">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Patient Resources
            </a>
        </div>
    </div>
</div>
@endsection 