@extends('layouts.app')

@section('content')
    <!-- FAQ Section -->
    <section class="py-16 bg-white dark:bg-dark-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-dark-text mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-900 dark:text-gray-300">
                    Find answers to common questions about our services and policies.
                </p>
            </div>


            <div class="space-y-6">
                @foreach ($faqs as $faq)
                    <div class="card">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-3">{{ $faq->question }}</h3>
                        <p class="text-gray-900 dark:text-gray-300">
                            {{ $faq->answer }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
