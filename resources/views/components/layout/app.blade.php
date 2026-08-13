
@props(['seo' => null, 'title' => null])

@php
    $metaTitle = $seo?->meta_title ?? $title ?? 'AdmissionsDekho: College Admission Counselling India';
    $metaDescription = $seo?->meta_description ?? 'Get free 1:1 admission counselling for UG, PG & PhD courses at 120+ UGC/AICTE-approved colleges in India. Book your free profile evaluation today!';
    $metaKeywords = $seo?->meta_keywords ?? 'admissionsdekho, college admissions, ugc approved colleges, free 1:1 counselling, btech admissions, mba colleges, law courses after 12th';
    $canonicalUrl = $seo?->canonical_url ?? url()->current();
    $ogImage = $seo?->og_image ?? 'https://admissionsdekho.com/images/og-admissionsdekho.jpg';
    $schemaType = $seo?->schema_type ?? 'EducationalOrganization';
@endphp

<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary SEO Meta Tags -->
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="AdmissionsDekho Advisory Editorial Team">
    <meta name="publisher" content="AdmissionsDekho">
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Favicon & App Icons -->
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:site_name" content="AdmissionsDekho">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <!-- Performance Pre-connects & Fonts -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Compiled Production Assets via Vite -->
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="/build/assets/app-f0_cnjoI.css">
        <script defer src="/build/assets/app-DUr89oQr.js"></script>
    @endif
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <!-- Dynamic Schema.org JSON-LD Output -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "EducationalOrganization",
                "@@id": "https://admissionsdekho.com/#organization",
                "name": "AdmissionsDekho",
                "url": "https://admissionsdekho.com",
                "logo": "https://admissionsdekho.com/images/logo.png",
                "description": "India's leading career counseling & college admission guidance portal for UG, PG, PhD & Nursing courses.",
                "telephone": "+91 9643802216",
                "email": "info@@admissionsdekho.com",
                "sameAs": [
                    "https://facebook.com/admissionsdekho",
                    "https://instagram.com/admissionsdekho",
                    "https://linkedin.com/company/admissionsdekho"
                ],
                "address": {
                    "@@type": "PostalAddress",
                    "addressLocality": "India",
                    "addressCountry": "IN"
                }
            },
            {
                "@@type": "WebPage",
                "@@id": "{{ $canonicalUrl }}#webpage",
                "url": "{{ $canonicalUrl }}",
                "name": "{{ $metaTitle }}",
                "description": "{{ $metaDescription }}",
                "isPartOf": {
                    "@@type": "WebSite",
                    "@@id": "https://admissionsdekho.com/#website",
                    "name": "AdmissionsDekho",
                    "url": "https://admissionsdekho.com"
                }
            }
        ]
    }
    </script>
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-900 flex flex-col min-h-screen selection:bg-blue-600 selection:text-white" 
      x-data="{ isModalOpen: false, modalTitle: 'Get Free Admission Counselling', selectedCourse: '', mobileMenuOpen: false, showBackToTop: false, pageLoaded: false }"
      x-init="window.addEventListener('load', () => pageLoaded = true); setTimeout(() => pageLoaded = true, 800)"
      @scroll.window="showBackToTop = (window.pageYOffset > 350)"
      @open-lead-modal.window="isModalOpen = true; modalTitle = $event.detail.title; selectedCourse = $event.detail.title">



    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white text-xs md:text-sm py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="bg-amber-500 text-slate-950 font-bold px-2 py-0.5 rounded-full text-[10px] sm:text-xs uppercase tracking-wide">Admission Season 2026</span>
                <span class="text-xs sm:text-sm truncate">Free Profile Evaluation & 100% Scholarship Assistance</span>
            </div>
            <div class="flex items-center gap-4 text-slate-300 text-xs">
                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $sitePhone ?? '+919643802216') }}" class="hover:text-white flex items-center gap-1 font-semibold transition">
                    <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    {{ $sitePhone ?? '+91 9643802216' }}
                </a>
                <a href="mailto:{{ $siteEmail ?? 'info@admissionsdekho.com' }}" class="hidden md:flex items-center gap-1 hover:text-white transition">
                    <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    {{ $siteEmail ?? 'info@admissionsdekho.com' }}
                </a>
            </div>
        </div>
    </div>

    <!-- Primary Header Navbar -->
    <header class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-40 shadow-sm transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20 gap-2">
                
                <!-- Brand Logo -->
                <a href="{{ url('/') }}" class="flex items-center group shrink-0">
                    <img src="{{ asset('/images/brand-logo.png') }}" alt="AdmissionsDekho Logo" class="h-12 sm:h-14 w-auto object-contain transition-transform group-hover:scale-105 drop-shadow-sm">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-7 text-sm lg:text-base font-bold text-slate-800">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-600 font-extrabold' : 'hover:text-blue-600' }} transition">Home</a>

                    <!-- Courses Mega Dropdown -->
                    <div class="relative" x-data="{ open: false }" x-on:mouseenter="open = true" x-on:mouseleave="open = false">
                        <button x-on:click="open = !open"
                                class="flex items-center gap-1.5 hover:text-blue-600 transition font-bold py-2 outline-none">
                            <span>Courses</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Floating Mega Menu Card -->
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             class="absolute -left-12 top-full mt-1 w-[740px] bg-white rounded-3xl p-6 shadow-2xl border border-slate-100 z-50 text-slate-900"
                             style="display: none;">
                            
                            <div class="grid grid-cols-4 gap-3">
                                <a href="{{ url('/best-engineering-courses-after-12th/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Engineering
                                </a>
                                <a href="{{ url('/courses-after-12th-science/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Science
                                </a>
                                <a href="{{ url('/best-courses-after-12th-arts-humanities/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Arts and Humanities
                                </a>
                                <a href="{{ url('/education-b-ed-college/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Education
                                </a>

                                <a href="{{ url('/best-courses-after-12th-commerce/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Commerce
                                </a>
                                <a href="{{ url('/law-programs/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Law
                                </a>
                                <a href="{{ url('/best-pharmacy-course-after-12th/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Pharmacy
                                </a>
                                <a href="{{ url('/best-nursing-course-after-12th/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Nursing
                                </a>

                                <a href="{{ url('/agriculture-courses-after-12th/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Agriculture
                                </a>
                                <a href="{{ url('/hospitality-vs-hotel-management/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Hospitality
                                </a>
                                <a href="{{ url('/bca-vs-b-sc-computer-science-which-is-better/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Computer Applications
                                </a>
                                <a href="{{ url('/top-mba-colleges-in-india/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    Management
                                </a>

                                <a href="{{ url('/phd-courses-admission-guidance/') }}" class="bg-slate-50/80 hover:bg-blue-50/80 text-slate-800 hover:text-blue-600 font-bold text-sm px-4 py-3 rounded-2xl border border-slate-100/90 hover:border-blue-200 transition-all block text-left shadow-sm hover:shadow">
                                    PhD
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/get-in-touch/') }}" class="{{ request()->is('get-in-touch*') ? 'text-blue-600 font-extrabold' : 'hover:text-blue-600' }} transition">Get In Touch</a>
                    <a href="{{ url('/top-colleges-universities-online-programs/') }}" class="{{ request()->is('top-colleges-universities-online-programs*') ? 'text-blue-600 font-extrabold' : 'hover:text-blue-600' }} transition">Online Programs</a>
                    <a href="{{ url('/blog/') }}" class="{{ request()->is('blog*') ? 'text-blue-600 font-extrabold' : 'hover:text-blue-600' }} transition">Blog</a>
                </nav>

                <!-- Action Button CTA & Mobile Hamburger -->
                <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                    <button x-on:click="isModalOpen = true; modalTitle = 'Book Free Admission Counselling'; selectedCourse = 'General Enquiry'"
                            class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold px-3.5 py-2 sm:px-6 sm:py-3 rounded-xl sm:rounded-2xl shadow-md sm:shadow-lg shadow-blue-600/25 transition-all flex items-center gap-1.5 text-xs sm:text-sm">
                        <svg class="w-4 h-4 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="hidden sm:inline">Book Free Counseling</span>
                        <span class="sm:hidden font-extrabold">Apply Now</span>
                    </button>

                    <!-- Mobile Hamburger Button -->
                    <button x-on:click="mobileMenuOpen = !mobileMenuOpen"
                            class="lg:hidden p-2 rounded-xl text-slate-700 hover:bg-slate-100 focus:outline-none transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" style="display:none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation Menu -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-2 shadow-xl"
             style="display: none;">
            
            <a href="{{ url('/') }}" class="block px-4 py-2.5 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-blue-600 transition">Home</a>
            
            <!-- Mobile Courses Accordion -->
            <div x-data="{ openCourses: false }">
                <button x-on:click="openCourses = !openCourses" class="w-full flex justify-between items-center px-4 py-2.5 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-blue-600 transition">
                    <span>All Courses</span>
                    <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': openCourses }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openCourses" class="pl-4 pr-2 py-2 grid grid-cols-2 gap-2 text-xs font-semibold" style="display:none;">
                    <a href="{{ url('/best-engineering-courses-after-12th/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Engineering</a>
                    <a href="{{ url('/courses-after-12th-science/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Science</a>
                    <a href="{{ url('/best-courses-after-12th-arts-humanities/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Arts & Humanities</a>
                    <a href="{{ url('/education-b-ed-college/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Education</a>
                    <a href="{{ url('/best-courses-after-12th-commerce/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Commerce</a>
                    <a href="{{ url('/law-programs/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Law</a>
                    <a href="{{ url('/best-pharmacy-course-after-12th/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Pharmacy</a>
                    <a href="{{ url('/best-nursing-course-after-12th/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Nursing</a>
                    <a href="{{ url('/agriculture-courses-after-12th/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Agriculture</a>
                    <a href="{{ url('/hospitality-vs-hotel-management/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Hospitality</a>
                    <a href="{{ url('/bca-vs-b-sc-computer-science-which-is-better/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Computer Applications</a>
                    <a href="{{ url('/top-mba-colleges-in-india/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600">Management</a>
                    <a href="{{ url('/phd-courses-admission-guidance/') }}" class="p-2.5 rounded-lg bg-slate-50 text-slate-700 hover:text-blue-600 col-span-2 text-center">PhD Guidance</a>
                </div>
            </div>

            <a href="{{ url('/get-in-touch/') }}" class="block px-4 py-2.5 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-blue-600 transition">Get In Touch</a>
            <a href="{{ url('/top-colleges-universities-online-programs/') }}" class="block px-4 py-2.5 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-blue-600 transition">Online Programs</a>
            <a href="{{ url('/blog/') }}" class="block px-4 py-2.5 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-blue-600 transition">Blog</a>

            <div class="pt-3 border-t border-slate-100 flex gap-2">
                <a href="tel:+919643802216" class="flex-1 bg-slate-900 text-white text-center py-3 rounded-xl font-extrabold text-xs flex items-center justify-center gap-1.5 shadow-md">
                    <span>📞 Call +91 9643802216</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    <!-- Global Student Ratings & Verified Reviews Section at Bottom of Page -->
    <section class="py-16 sm:py-20 bg-white text-slate-900 border-t border-b border-slate-200 optim-contain reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header & Overall Rating Summary -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mb-12 sm:mb-16 border-b border-slate-200 pb-12">
                <div class="lg:col-span-7 space-y-3 text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 bg-purple-50 border border-purple-200 text-purple-700 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full">
                        ⭐ VERIFIED STUDENT FEEDBACK
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        What Aspirants Say About AdmissionsDekho
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Read real experiences from thousands of students and parents who secured admissions in top UGC & statutory-approved colleges across India.
                    </p>
                </div>

                <!-- Rating Scoreboard -->
                <div class="lg:col-span-5 flex flex-col sm:flex-row items-center justify-center lg:justify-end gap-6 bg-slate-50 p-6 rounded-3xl border border-slate-200 shadow-md">
                    <div class="text-center">
                        <div class="text-4xl sm:text-5xl font-black text-amber-500">4.9 <span class="text-xl text-slate-400 font-bold">/ 5.0</span></div>
                        <div class="flex items-center justify-center gap-1 text-amber-400 text-lg mt-1">
                            ★★★★★
                        </div>
                        <p class="text-xs text-slate-500 mt-1 font-semibold">5,420+ Verified Reviews</p>
                    </div>
                    <div class="hidden sm:block h-16 w-px bg-slate-200"></div>
                    <div class="space-y-1.5 text-xs text-slate-700 font-semibold text-center sm:text-left">
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✔</span>
                            <span><strong>98.4%</strong> Admission Match Rate</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✔</span>
                            <span><strong>100%</strong> Free Advisory Sessions</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-600 font-bold">✔</span>
                            <span><strong>120+</strong> Approved Colleges</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infinite Auto-Scroll Reviews Ticker (Right to Left) -->
            <style>
                @keyframes reviewTickerScroll {
                    0% { transform: translate3d(0, 0, 0); }
                    100% { transform: translate3d(-50%, 0, 0); }
                }
                .animate-reviews-ticker {
                    display: flex;
                    width: max-content;
                    animation: reviewTickerScroll 35s linear infinite;
                    will-change: transform;
                    transform: translate3d(0, 0, 0);
                    backface-visibility: hidden;
                }
                .animate-reviews-ticker:hover {
                    animation-play-state: paused;
                }
            </style>

            <div class="overflow-hidden relative w-full py-4 -mx-4 px-4 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <!-- Left & Right Fade Gradients -->
                <div class="absolute top-0 bottom-0 left-0 w-12 sm:w-24 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
                <div class="absolute top-0 bottom-0 right-0 w-12 sm:w-24 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

                <div class="animate-reviews-ticker flex items-stretch gap-6 cursor-pointer">

                    <!-- LOOP SET 1 -->
                    <!-- Review 1 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "AdmissionsDekho helped me compare top engineering colleges and fee structures without any hidden charges. The 1:1 counselor guided me step-by-step for my B.Tech admission!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-blue-100 border border-blue-200 text-blue-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                RS
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Rohan Sharma</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Tech Computer Science</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "The counselors analyzed my CLAT score and explained NLU cutoff ranks clearly. Their guidance made the law counseling and seat locking process smooth and stress-free."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-purple-100 border border-purple-200 text-purple-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                AV
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Ananya Verma</h4>
                                <p class="text-[11px] text-slate-500">Admitted to BA LLB (5-Year Integrated)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "Free 1:1 counseling session was super helpful! They answered all my questions regarding INC approved nursing institutes and hospital clinical training details."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-emerald-100 border border-emerald-200 text-emerald-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                PN
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Priya Nair</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Sc Nursing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Aspirant</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "The Smart Profile Evaluator matched my CAT percentile to top B-schools fitting my annual budget. Really impressed by the transparency and advisor support!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-amber-100 border border-amber-200 text-amber-800 font-extrabold flex items-center justify-center text-sm shrink-0">
                                AG
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Aditya Gupta</h4>
                                <p class="text-[11px] text-slate-500">Admitted to MBA (Business Analytics)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "Got complete admission assistance for PCI-approved pharmacy colleges. They verified institutional credentials and helped me secure a tuition fee waiver!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-rose-100 border border-rose-200 text-rose-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                KP
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Kavya Patel</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Pharm</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "100% genuine admission advisory platform! They guided me between BCA and B.Sc CS options with total fee breakdown and IT placement comparisons."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                SM
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Siddharth Mehta</h4>
                                <p class="text-[11px] text-slate-500">Admitted to BCA (Software Development)</p>
                            </div>
                        </div>
                    </div>


                    <!-- LOOP SET 2 (DUPLICATE FOR SEAMLESS INFINITE SCROLL) -->
                    <!-- Review 1 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "AdmissionsDekho helped me compare top engineering colleges and fee structures without any hidden charges. The 1:1 counselor guided me step-by-step for my B.Tech admission!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-blue-100 border border-blue-200 text-blue-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                RS
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Rohan Sharma</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Tech Computer Science</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "The counselors analyzed my CLAT score and explained NLU cutoff ranks clearly. Their guidance made the law counseling and seat locking process smooth and stress-free."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-purple-100 border border-purple-200 text-purple-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                AV
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Ananya Verma</h4>
                                <p class="text-[11px] text-slate-500">Admitted to BA LLB (5-Year Integrated)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "Free 1:1 counseling session was super helpful! They answered all my questions regarding INC approved nursing institutes and hospital clinical training details."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-emerald-100 border border-emerald-200 text-emerald-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                PN
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Priya Nair</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Sc Nursing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Aspirant</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "The Smart Profile Evaluator matched my CAT percentile to top B-schools fitting my annual budget. Really impressed by the transparency and advisor support!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-amber-100 border border-amber-200 text-amber-800 font-extrabold flex items-center justify-center text-sm shrink-0">
                                AG
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Aditya Gupta</h4>
                                <p class="text-[11px] text-slate-500">Admitted to MBA (Business Analytics)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "Got complete admission assistance for PCI-approved pharmacy colleges. They verified institutional credentials and helped me secure a tuition fee waiver!"
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-rose-100 border border-rose-200 text-rose-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                KP
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Kavya Patel</h4>
                                <p class="text-[11px] text-slate-500">Admitted to B.Pharm</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="w-[300px] sm:w-[380px] shrink-0 bg-slate-50 p-6 rounded-3xl border border-slate-200/90 hover:border-purple-300 hover:bg-white hover:scale-[1.02] transition-all space-y-4 flex flex-col justify-between shadow-md hover:shadow-xl">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-amber-500 text-sm font-bold">
                                    ★★★★★
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200">Verified Student</span>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                                "100% genuine admission advisory platform! They guided me between BCA and B.Sc CS options with total fee breakdown and IT placement comparisons."
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-3 border-t border-slate-200">
                            <div class="w-10 h-10 rounded-full bg-indigo-100 border border-indigo-200 text-indigo-700 font-extrabold flex items-center justify-center text-sm shrink-0">
                                SM
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-bold text-slate-900">Siddharth Mehta</h4>
                                <p class="text-[11px] text-slate-500">Admitted to BCA (Software Development)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0B0F19] text-slate-300 text-sm mt-0 border-t border-slate-800 optim-contain">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-10">

                <!-- Column 1: Brand Info -->
                <div class="space-y-4 lg:col-span-1">
                    <a href="{{ url('/') }}" class="inline-flex items-center group">
                        <img src="{{ asset('/images/brand-logo.png') }}" alt="AdmissionsDekho Logo" class="h-16 sm:h-20 w-auto object-contain transition-transform group-hover:scale-105 drop-shadow-[0_4px_12px_rgba(234,179,8,0.3)]">
                    </a>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                        India's leading education portal for student counseling, profile evaluation, entrance test prep, and top university admissions.
                    </p>
                    <div class="space-y-2 text-xs sm:text-sm pt-1">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $sitePhone ?? '+919643802216') }}" class="flex items-center gap-2 text-slate-300 hover:text-white transition">
                            <span class="text-amber-400">📞</span>
                            <span>{{ $sitePhone ?? '+91 9643802216' }}</span>
                        </a>
                        <a href="mailto:{{ $siteEmail ?? 'info@admissionsdekho.com' }}" class="flex items-center gap-2 text-slate-300 hover:text-white transition">
                            <span class="text-amber-400">✉️</span>
                            <span>{{ $siteEmail ?? 'info@admissionsdekho.com' }}</span>
                        </a>
                        <div class="flex items-center gap-2 text-slate-300">
                            <span class="text-amber-400">📍</span>
                            <span>{{ $siteAddress ?? 'AdmissionsDekho, India' }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2.5 pt-3">
                        <!-- LinkedIn -->
                        <a href="{{ $siteLinkedin ?? 'https://linkedin.com/company/admissionsdekho' }}" target="_blank" aria-label="LinkedIn"
                           class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 text-slate-300 hover:text-white hover:bg-[#0A66C2] hover:border-[#0A66C2] hover:scale-110 shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                            </svg>
                        </a>
                        <!-- Facebook -->
                        <a href="{{ $siteFacebook ?? 'https://facebook.com/admissionsdekho' }}" target="_blank" aria-label="Facebook"
                           class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 text-slate-300 hover:text-white hover:bg-[#1877F2] hover:border-[#1877F2] hover:scale-110 shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H7.5v-3H10V9.69c0-2.47 1.47-3.83 3.72-3.83 1.08 0 2.2.19 2.2.19v2.42h-1.24c-1.23 0-1.61.76-1.61 1.54V12h2.73l-.44 3h-2.29v6.8c4.56-.93 8-4.96 8-9.8z"/>
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="{{ $siteInstagram ?? 'https://instagram.com/admissionsdekho' }}" target="_blank" aria-label="Instagram"
                           class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 text-slate-300 hover:text-white hover:bg-gradient-to-tr hover:from-amber-500 hover:via-rose-500 hover:to-purple-600 hover:border-transparent hover:scale-110 shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="{{ $siteYoutube ?? 'https://youtube.com/@admissionsdekho' }}" target="_blank" aria-label="YouTube"
                           class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 text-slate-300 hover:text-white hover:bg-[#FF0000] hover:border-[#FF0000] hover:scale-110 shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <!-- WhatsApp -->
                        <a href="{{ $siteWhatsappLink ?? 'https://wa.me/919643802216' }}" target="_blank" aria-label="WhatsApp"
                           class="w-10 h-10 rounded-xl bg-slate-800/90 border border-slate-700/60 text-slate-300 hover:text-white hover:bg-[#25D366] hover:border-[#25D366] hover:scale-110 shadow-md flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: QUICK LINKS -->
                <div>
                    <h3 class="text-white font-extrabold text-xs uppercase tracking-wider mb-5">QUICK LINKS</h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <li><a href="{{ url('/legal-support/') }}" class="hover:text-white transition">Legal Support</a></li>
                        <li><a href="{{ url('/privacy-policy/') }}" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="{{ url('/terms-conditions/') }}" class="hover:text-white transition">Terms & Conditions</a></li>
                        <li><a href="{{ url('/about-us/') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ url('/free-counseling/') }}" class="hover:text-white transition">Free Counseling</a></li>
                        <li><a href="{{ url('/evaluate-my-profile/') }}" class="hover:text-white transition">Evaluate My Profile</a></li>
                    </ul>
                </div>

                <!-- Column 3: UNIVERSITIES -->
                <div x-data="{ showMoreUniv: false }">
                    <h3 class="text-white font-extrabold text-xs uppercase tracking-wider mb-5">UNIVERSITIES</h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Madhyanchal Professional Univ, Bhopal</a></li>
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Sushant University, Gurgaon</a></li>
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Vidya University, Meerut</a></li>
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Dr Preeti Global Univ, Shivpuri</a></li>
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Mahakaushal Univ, Jabalpur</a></li>
                        <template x-if="showMoreUniv">
                            <div class="space-y-3 pt-3">
                                <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Mansarovar Global Univ</a></li>
                                <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Amity University, Noida</a></li>
                                <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Lovely Professional University</a></li>
                            </div>
                        </template>
                    </ul>
                    <button @click="showMoreUniv = !showMoreUniv" class="text-xs font-bold text-amber-400 hover:text-amber-300 mt-3.5 inline-flex items-center gap-1.5 transition-colors group">
                        <span x-text="showMoreUniv ? '- Show Less' : '+ Show More'">+ Show More</span>
                        <span class="w-4 h-4 rounded-full bg-amber-400/20 flex items-center justify-center text-amber-400 group-hover:bg-amber-400/30 transition-all">
                            <svg class="w-2.5 h-2.5 transition-transform duration-200" :class="{ 'rotate-180': showMoreUniv }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Column 4: COURSES -->
                <div x-data="{ showMoreCourses: false }">
                    <h3 class="text-white font-extrabold text-xs uppercase tracking-wider mb-5">COURSES</h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <li><a href="{{ url('/best-engineering-courses-after-12th/') }}" class="hover:text-white transition">Engineering (B.Tech / M.Tech)</a></li>
                        <li><a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-white transition">Mansarovar Global Univ</a></li>
                        <li><a href="{{ url('/courses-after-12th-science/') }}" class="hover:text-white transition">Science (B.Sc / M.Sc)</a></li>
                        <li><a href="{{ url('/best-courses-after-12th-arts-humanities/') }}" class="hover:text-white transition">Art & Humanities</a></li>
                        <li><a href="{{ url('/education-b-ed-college/') }}" class="hover:text-white transition">Education & B.Ed</a></li>
                        <template x-if="showMoreCourses">
                            <div class="space-y-3 pt-3">
                                <li><a href="{{ url('/best-pharmacy-course-after-12th/') }}" class="hover:text-white transition">Pharmacy (D.Pharm / B.Pharm)</a></li>
                                <li><a href="{{ url('/agriculture-courses-after-12th/') }}" class="hover:text-white transition">Agriculture Science</a></li>
                                <li><a href="{{ url('/hospitality-vs-hotel-management/') }}" class="hover:text-white transition">Hospitality & Hotel Mgmt</a></li>
                                <li><a href="{{ url('/bca-vs-b-sc-computer-science-which-is-better/') }}" class="hover:text-white transition">BCA & Computer Applications</a></li>
                                <li><a href="{{ url('/phd-courses-admission-guidance/') }}" class="hover:text-white transition">PhD Programs</a></li>
                            </div>
                        </template>
                    </ul>
                    <button @click="showMoreCourses = !showMoreCourses" class="text-xs font-bold text-amber-400 hover:text-amber-300 mt-3.5 inline-flex items-center gap-1.5 transition-colors group">
                        <span x-text="showMoreCourses ? '- Show Less' : '+ Show More'">+ Show More</span>
                        <span class="w-4 h-4 rounded-full bg-amber-400/20 flex items-center justify-center text-amber-400 group-hover:bg-amber-400/30 transition-all">
                            <svg class="w-2.5 h-2.5 transition-transform duration-200" :class="{ 'rotate-180': showMoreCourses }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Column 5: LOCATIONS -->
                <div x-data="{ showMoreLoc: false }">
                    <h3 class="text-white font-extrabold text-xs uppercase tracking-wider mb-5">LOCATIONS</h3>
                    <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Delhi</a></li>
                        <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Mumbai</a></li>
                        <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Bangalore</a></li>
                        <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Pune</a></li>
                        <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Bhopal</a></li>
                        <template x-if="showMoreLoc">
                            <div class="space-y-3 pt-3">
                                <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Noida</a></li>
                                <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Gurgaon</a></li>
                                <li><a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-white transition">Education Consultants in Lucknow</a></li>
                            </div>
                        </template>
                    </ul>
                    <button @click="showMoreLoc = !showMoreLoc" class="text-xs font-bold text-amber-400 hover:text-amber-300 mt-3.5 inline-flex items-center gap-1.5 transition-colors group">
                        <span x-text="showMoreLoc ? '- Show Less' : '+ Show More'">+ Show More</span>
                        <span class="w-4 h-4 rounded-full bg-amber-400/20 flex items-center justify-center text-amber-400 group-hover:bg-amber-400/30 transition-all">
                            <svg class="w-2.5 h-2.5 transition-transform duration-200" :class="{ 'rotate-180': showMoreLoc }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                </div>

            </div>

            <!-- Trust Bar / Highlights Banner -->
            <div class="border-t border-slate-800/80 mt-12 pt-6 pb-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-center sm:text-left text-xs sm:text-sm font-semibold text-slate-200">
                    <div class="flex items-center justify-center sm:justify-start gap-2">
                        <span class="text-amber-400 text-base">⭐</span>
                        <span>Rated 4.9/5 by 20,000+ Students</span>
                    </div>
                    <div class="flex items-center justify-center sm:justify-start gap-2">
                        <span class="text-amber-400 text-base">🏛️</span>
                        <span>120+ UGC & AICTE Approved Partners</span>
                    </div>
                    <div class="flex items-center justify-center sm:justify-start gap-2">
                        <span class="text-amber-400 text-base">👤</span>
                        <span>100% Free Career Counseling</span>
                    </div>
                    <div class="flex items-center justify-center sm:justify-start gap-2">
                        <span class="text-amber-400 text-base">💥</span>
                        <span>BCI & INC Recognized Programs</span>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Links -->
            <div class="border-t border-slate-800/80 pt-6 text-xs text-slate-400 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; 2026 <strong class="text-white font-bold">AdmissionsDekho.com</strong> — All Rights Reserved.</p>
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <a href="{{ url('/privacy-policy/') }}" class="hover:text-white transition">Privacy Policy</a>
                    <a href="{{ url('/terms-conditions/') }}" class="hover:text-white transition">Terms & Conditions</a>
                    <a href="{{ url('/get-in-touch/') }}" class="hover:text-white transition">Support</a>
                    <a href="{{ url('/get-in-touch/') }}" class="hover:text-white transition">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Lead Capture Modal Component -->
    @include('components.lead-modal')

    <!-- Floating AI Chatbot Component -->
    @include('components.chatbot')

    <!-- Floating Back-to-Top Button -->
    <button x-show="showBackToTop"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-6 scale-90"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 translate-y-6 scale-90"
            x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            aria-label="Back to top"
            class="fixed bottom-6 right-6 z-40 bg-blue-600 hover:bg-blue-700 text-white p-3.5 rounded-2xl shadow-2xl shadow-blue-600/40 border border-blue-400/30 hover:scale-110 active:scale-95 transition-all duration-200 cursor-pointer flex items-center justify-center"
            style="display: none;">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <!-- High Performance IntersectionObserver Scroll Reveal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -40px 0px',
                threshold: 0.08
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const initObserver = () => {
                document.querySelectorAll('.reveal-on-scroll').forEach(el => {
                    revealObserver.observe(el);
                });
            };

            initObserver();

            window.addEventListener('content-updated', initObserver);
        });
    </script>

</body>
</html>
