<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.name', config('app.name', 'Primary Care Clinic')) }}</title>
    <meta name="description"
        content="{{ setting('site.description', 'Comprehensive primary care services for you and your family. Local doctors who care.') }}">
    <meta property="og:title" content="{{ setting('site.name', 'Primary Care Clinic') }}">
    <meta property="og:description"
        content="{{ setting('site.description', 'Comprehensive primary care services for you and your family.') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Pre-load theme and accessibility preferences -->
    <script>
        // Theme and accessibility persistence
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            const highContrast = localStorage.getItem('highContrast') === 'true';
            const largeText = localStorage.getItem('largeText') === 'true';
            const reducedMotion = localStorage.getItem('reducedMotion') === 'true';

            document.documentElement.classList.toggle('dark', theme === 'dark');
            document.documentElement.classList.toggle('accessibility-high-contrast', highContrast);
            document.documentElement.classList.toggle('accessibility-large-text', largeText);
            document.documentElement.classList.toggle('accessibility-reduced-motion', reducedMotion);
        })();
    </script>
</head>

<body class="font-sans antialiased bg-white dark:bg-dark-bg text-gray-900 dark:text-dark-text">
    <!-- Skip to main content link -->
    <a href="#main-content" class="skip-link sr-only focus:not-sr-only">Skip to main content</a>

    <!-- Header -->
    <header
        class="sticky top-0 z-50 bg-white/95 dark:bg-dark-bg/95 backdrop-blur-sm border-b border-gray-200 dark:border-dark-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-3">
                        @if (setting('site.logo'))
                            <img src="{{ asset('storage/' . setting('site.logo')) }}"
                                alt="{{ setting('site.name', 'Primary Care Clinic') }}"
                                class="h-16 w-auto max-w-[200px] object-contain">
                        @else
                            <div
                                class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        <span
                            class="text-xl font-bold text-gray-900 dark:text-dark-text">{{ setting('site.name', 'Primary Care Clinic') }}</span>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    @menu('header')
                </nav>

                <!-- Right side controls -->
                <div class="flex items-center space-x-4">
                    <!-- Accessibility Toggle -->
                    <button id="accessibility-toggle"
                        class="p-2 text-gray-900 dark:text-dark-text hover:text-blue-600 dark:hover:text-blue-400 motion-safe:transition-colors"
                        aria-label="Accessibility options">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Theme Toggle -->
                    <button id="theme-toggle"
                        class="p-2 text-gray-900 dark:text-dark-text hover:text-blue-600 dark:hover:text-blue-400 motion-safe:transition-colors"
                        aria-label="Toggle dark mode">
                        <!-- Sun icon for light mode -->
                        <svg id="sun-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd" />
                        </svg>
                        <!-- Moon icon for dark mode -->
                        <svg id="moon-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                    </button>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button"
                        class="md:hidden p-2 text-gray-900 dark:text-dark-text hover:text-blue-600 dark:hover:text-blue-400 motion-safe:transition-colors"
                        aria-label="Toggle mobile menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <nav class="flex flex-col space-y-2">
                    @menu('mobile')
                </nav>
            </div>
        </div>
    </header>

    <!-- Accessibility Panel -->
    <div id="accessibility-panel"
        class="hidden fixed top-16 right-4 z-50 bg-white dark:bg-dark-surface rounded-lg shadow-2xl border border-gray-200 dark:border-dark-surface p-4 w-64">
        <h3 class="font-semibold mb-3 text-gray-900 dark:text-dark-text">Accessibility Options</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-sm text-gray-900 dark:text-dark-text">High Contrast</span>
                <button id="high-contrast-toggle"
                    class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 dark:bg-gray-700 transition-colors">
                    <span
                        class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-200 ease-in-out"></span>
                </button>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm text-gray-900 dark:text-dark-text">Large Text</span>
                <button id="large-text-toggle"
                    class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 dark:bg-gray-700 transition-colors">
                    <span
                        class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-200 ease-in-out"></span>
                </button>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm text-gray-900 dark:text-dark-text">Reduced Motion</span>
                <button id="reduced-motion-toggle"
                    class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 dark:bg-gray-700 transition-colors">
                    <span
                        class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform duration-200 ease-in-out"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">
                        {{ setting('site.name', 'Primary Care Clinic') }}</h3>
                    <p class="text-sm text-gray-300 mb-4">{{ setting('site.tagline', 'Local doctors who care') }}.
                        {{ setting('site.description', 'Providing comprehensive primary care services for you and your family.') }}
                    </p>
                    <div class="space-y-2 text-sm text-gray-300">
                        {{ setting('contact.address.street', '123 Main Street') }}<br>{{ setting('contact.address.city', 'City') }},
                        {{ setting('contact.address.state', 'State') }}
                        {{ setting('contact.address.zip', '12345') }}
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4 text-white">Quick Links</h4>
                    @menu('footer')
                </div>

                <!-- Office Hours -->
                <div>
                    <h4 class="font-semibold mb-4 text-white">Office Hours</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>Monday - Friday: {{ setting('contact.hours.monday_friday', '8:00 AM - 6:00 PM') }}</li>
                        <li>Saturday: {{ setting('contact.hours.saturday', '9:00 AM - 2:00 PM') }}</li>
                        <li>Sunday: {{ setting('contact.hours.sunday', 'Closed') }}</li>
                        <li>Holidays: {{ setting('contact.hours.holidays', 'Closed (call for emergency)') }}</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-300">
                <p>&copy; {{ date('Y') }} {{ setting('site.name', 'Primary Care Clinic') }}. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for theme and accessibility toggles -->
    <script>
        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        const html = document.documentElement;

        function updateThemeToggle() {
            const isDark = html.classList.contains('dark');
            if (isDark) {
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        }

        themeToggle.addEventListener('click', () => {
            const isDark = html.classList.contains('dark');
            html.classList.toggle('dark', !isDark);
            localStorage.setItem('theme', !isDark ? 'dark' : 'light');
            updateThemeToggle();
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Accessibility panel toggle
        const accessibilityToggle = document.getElementById('accessibility-toggle');
        const accessibilityPanel = document.getElementById('accessibility-panel');

        accessibilityToggle.addEventListener('click', () => {
            accessibilityPanel.classList.toggle('hidden');
        });

        // Close accessibility panel when clicking outside
        document.addEventListener('click', (e) => {
            if (!accessibilityToggle.contains(e.target) && !accessibilityPanel.contains(e.target)) {
                accessibilityPanel.classList.add('hidden');
            }
        });

        // Accessibility toggles
        const highContrastToggle = document.getElementById('high-contrast-toggle');
        const largeTextToggle = document.getElementById('large-text-toggle');
        const reducedMotionToggle = document.getElementById('reduced-motion-toggle');

        function updateAccessibilityToggle(toggle, className, storageKey) {
            const isEnabled = html.classList.contains(className);
            const thumb = toggle.querySelector('span');

            if (isEnabled) {
                thumb.style.transform = 'translateX(1.25rem)';
                toggle.classList.add('bg-blue-600');
            } else {
                thumb.style.transform = 'translateX(0)';
                toggle.classList.remove('bg-blue-600');
            }
        }

        highContrastToggle.addEventListener('click', () => {
            const isEnabled = html.classList.contains('accessibility-high-contrast');
            html.classList.toggle('accessibility-high-contrast', !isEnabled);
            localStorage.setItem('highContrast', !isEnabled);
            updateAccessibilityToggle(highContrastToggle, 'accessibility-high-contrast', 'highContrast');
        });

        largeTextToggle.addEventListener('click', () => {
            const isEnabled = html.classList.contains('accessibility-large-text');
            html.classList.toggle('accessibility-large-text', !isEnabled);
            localStorage.setItem('largeText', !isEnabled);
            updateAccessibilityToggle(largeTextToggle, 'accessibility-large-text', 'largeText');
        });

        reducedMotionToggle.addEventListener('click', () => {
            const isEnabled = html.classList.contains('accessibility-reduced-motion');
            html.classList.toggle('accessibility-reduced-motion', !isEnabled);
            localStorage.setItem('reducedMotion', !isEnabled);
            updateAccessibilityToggle(reducedMotionToggle, 'accessibility-reduced-motion', 'reducedMotion');
        });

        // Initialize toggle states
        function initializeToggles() {
            updateThemeToggle();
            updateAccessibilityToggle(highContrastToggle, 'accessibility-high-contrast', 'highContrast');
            updateAccessibilityToggle(largeTextToggle, 'accessibility-large-text', 'largeText');
            updateAccessibilityToggle(reducedMotionToggle, 'accessibility-reduced-motion', 'reducedMotion');
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', initializeToggles);

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
