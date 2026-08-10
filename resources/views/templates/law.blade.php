<x-layout.app :seo="$seo" :title="$page->title">

@if(request()->is('*ba-llb*') || (isset($page) && str_contains($page->slug ?? '', 'ba-llb')))
    <!-- BA LLB Specific Hero Banner Header Section -->
    <section class="relative bg-slate-950 text-white overflow-hidden py-14 sm:py-20 border-b border-slate-800">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/law-hero.png') }}" alt="BA LLB Background" class="w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl space-y-4 sm:space-y-6">
                <!-- Breadcrumbs -->
                <div class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-300">
                    <a href="/" class="hover:text-white transition">Home</a>
                    <span>&gt;</span>
                    <a href="/law" class="hover:text-white transition">Law Courses</a>
                    <span>&gt;</span>
                    <span class="text-blue-400 font-bold">BA LLB (Bachelor of Arts & Bachelor of Laws)</span>
                </div>

                <!-- Hero Title -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                    BA LLB (Bachelor of Arts & Bachelor of Laws)
                </h1>

                <!-- Hero Subtitle -->
                <p class="text-slate-300 text-sm sm:text-base lg:text-lg leading-relaxed">
                    5-Year Integrated Law Programme Combining Humanities, Social Sciences, and Legal Practice.
                </p>

                <!-- Action Button -->
                <div class="pt-2">
                    <button @click="isModalOpen = true; modalTitle = 'Request Course Syllabus & Fees - BA LLB'; selectedCourse = 'BA LLB Syllabus & Fees'"
                            class="inline-flex items-center gap-2.5 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs sm:text-sm px-6 py-3.5 rounded-xl shadow-lg shadow-blue-600/30 hover:scale-[1.02] transition-all">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Request Course Syllabus & Fees</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($page->content))
        <section class="py-12 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">
                    {!! $page->content !!}
                </div>
            </div>
        </section>
    @endif

    <!-- 4 Overview Highlight Stat Cards Section -->
    <section class="py-8 bg-slate-50/80 border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                
                <!-- 1. DURATION -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-[11px] font-extrabold tracking-wider text-slate-400 uppercase">DURATION</span>
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-extrabold text-slate-900">5 Years (10 Semesters)</h4>
                    </div>
                </div>

                <!-- 2. ELIGIBILITY -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            </svg>
                        </div>
                        <span class="text-[11px] font-extrabold tracking-wider text-slate-400 uppercase">ELIGIBILITY</span>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-snug">10+2 in any stream with min 45% (40% SC/ST)</h4>
                    </div>
                </div>

                <!-- 3. AVERAGE FEES -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-[11px] font-extrabold tracking-wider text-slate-400 uppercase">AVERAGE FEES</span>
                    </div>
                    <div>
                        <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-snug">₹1.5 Lakhs – ₹3.5 Lakhs / Year</h4>
                    </div>
                </div>

                <!-- 4. AVERAGE SALARY -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <span class="text-[11px] font-extrabold tracking-wider text-slate-400 uppercase">AVERAGE SALARY</span>
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-extrabold text-emerald-600">₹6.5 LPA – ₹14.0 LPA</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
@else
    <!-- 1. Law Hero Banner Section (Law After 12th Complete Admission Guidance) -->
    <section class="bg-gradient-to-br from-sky-50/80 via-blue-50/40 to-slate-50 py-12 sm:py-16 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Column Content -->
                <div class="lg:col-span-7 space-y-5">
                    <!-- Top Pill Badge -->
                    <div class="inline-flex items-center gap-2 bg-sky-100/80 text-sky-800 border border-sky-200/90 rounded-full px-4 py-1.5 text-xs sm:text-sm font-semibold shadow-sm">
                        <span class="text-amber-500 font-bold">★</span>
                        <span>Rated 4.9/5 | 5,000+ Students Counseled | India's #1 Law Admission Consultants</span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        Law After 12th:
                        <span class="text-blue-600 block mt-1.5">Complete Admission Guidance</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-2xl">
                        Choosing the right career after Class 12 is one of the most important decisions for any student, and pursuing law has become one of the most rewarding options in India. Whether you dream of becoming an advocate, judge, corporate lawyer, or civil servant, enrolling in an integrated law programme after 12th is the first step toward a successful legal career. This comprehensive guide explains everything about law after 12th, including eligibility, entrance exams, and top colleges.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <button @click="isModalOpen = true; modalTitle = 'Evaluate My Profile Free'; selectedCourse = 'Law Admission Evaluation'"
                                class="bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-extrabold px-6 py-3.5 rounded-xl shadow-lg shadow-amber-500/25 hover:shadow-xl hover:scale-[1.02] transition-all flex items-center gap-2 text-sm sm:text-base">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Evaluate My Profile Free</span>
                        </button>

                        <a href="https://wa.me/919643802216?text=Hi%20AdmissionsDekho%2C%20I%20want%20admission%20guidance%20for%20Law%20courses" target="_blank"
                           class="bg-blue-600 hover:bg-blue-700 text-white font-extrabold px-6 py-3.5 rounded-xl shadow-lg shadow-blue-600/25 hover:shadow-xl hover:scale-[1.02] transition-all flex items-center gap-2 text-sm sm:text-base">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Chat on WhatsApp Now</span>
                        </a>
                    </div>

                    <!-- Bullet Points Below Buttons -->
                    <div class="pt-2 flex flex-wrap gap-4 sm:gap-6 text-xs sm:text-sm font-bold text-slate-800">
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>100% BCI Approved</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>Top NLU Guidance</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>Dedicated Counselors</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column Visual Image with Floating Overlay Cards -->
                <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        
                        <!-- Main Image Container -->
                        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900 aspect-[4/3]">
                            <img src="{{ asset('/images/page-assets/law-books-hero.png') }}" alt="Law After 12th Complete Admission Guidance" class="w-full h-full object-cover">
                        </div>

                        <!-- Top Right Floating Card -->
                        <div class="absolute -top-5 -right-3 sm:-right-5 bg-white/95 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-slate-100 shadow-xl flex items-center gap-3 z-10">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl shrink-0">
                                🎓
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">Top NLUs & Pvt Colleges</h4>
                                <p class="text-[11px] font-semibold text-slate-500">Integrated BA/BBA LLB</p>
                            </div>
                        </div>

                        <!-- Bottom Left Floating Card -->
                        <div class="absolute -bottom-5 -left-3 sm:-left-5 bg-white/95 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-slate-100 shadow-xl flex items-center gap-3 z-10">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl shrink-0">
                                🏛️
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">100+ Law Colleges</h4>
                                <p class="text-[11px] font-semibold text-slate-500">NAAC Grade A / A++</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. Top BCI Approved Law Colleges Info Section -->
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Image Visual -->
                <div class="lg:col-span-5">
                    <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white bg-slate-100 aspect-[4/3]">
                        <img src="{{ asset('/images/page-assets/law-corporate-building.png') }}" alt="Top BCI Approved Law Colleges in India" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="lg:col-span-7 space-y-4">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug">
                        Top BCI Approved Law Colleges in India – Admission Guidance & Fees
                    </h2>
                    
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        AdmissionsDekho is a trusted online platform helping students secure admission to the Top BCI Approved Law Colleges in India. We provide expert guidance for LLB, BA LLB, BBA LLB, BCom LLB, BSc LLB, LLM, Integrated Law Programs, CLAT, AILET, LSAT India, SLAT, CUET Law, BCI-approved colleges, eligibility guidance, admission counselling, scholarships, documentation support, and complete law admission assistance to help students build successful legal careers.
                    </p>

                    <div class="pt-2 space-y-3">
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-blue-600 mb-1">
                                Integrated Law Course Details
                            </h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Cover key subjects like Constitutional Law, Criminal Law, Corporate Law, and Cyber Law alongside moot court competitions, legal aid clinics, and internships.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-blue-600 mb-1">
                                Career Paths & Salary Scope
                            </h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Graduates can practice as High Court Advocates, Corporate Legal Associates, or Judicial Officers (PCS-J) with entry-level salaries ranging from <strong class="text-slate-900 font-bold">₹4–12 LPA</strong>.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif

    <!-- About BA LLB Section (COURSE DETAILS) -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Image Visual -->
                <div class="lg:col-span-5">
                    <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white bg-slate-100 aspect-[4/3]">
                        <img src="{{ asset('/images/page-assets/law-books-hero.png') }}" alt="About BA LLB Course Details" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="lg:col-span-7 space-y-5">
                    <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full shadow-sm">
                        COURSE DETAILS
                    </span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        About ba-llb
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        BA LLB combines humanities (Political Science, Sociology, History, Economics) with core law (Constitutional Law, Criminal Law, Corporate Law). It equips candidates with a holistic analytical foundation required for litigation, judiciary, and corporate counsel roles.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-center gap-3 text-slate-800 text-xs sm:text-sm font-bold">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                            <span>100% Bar Council of India (BCI) Approved Program</span>
                        </div>
                        <div class="flex items-center gap-3 text-slate-800 text-xs sm:text-sm font-bold">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                            <span>Saves 1 Year compared to traditional 3+3 Year LLB</span>
                        </div>
                        <div class="flex items-center gap-3 text-slate-800 text-xs sm:text-sm font-bold">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs shrink-0">✓</span>
                            <span>High recruitment by Corporate Law Firms & Govt PSUs</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Step-by-Step Admission Process Section (5-STEP ROADMAP) -->
    <section class="py-16 sm:py-20 bg-slate-50/70 border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    5-STEP ROADMAP
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4 leading-tight">
                    Step-by-Step Admission Process
                </h2>
            </div>

            <!-- 5 Process Step Cards Grid -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 sm:gap-6">

                <!-- Step 1 -->
                <div class="bg-white rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm text-center space-y-3 hover:shadow-md transition-all duration-200">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-black text-base flex items-center justify-center mx-auto shadow-md shadow-blue-600/30">
                        1
                    </div>
                    <h3 class="text-base sm:text-lg font-extrabold text-slate-900">Register</h3>
                    <p class="text-slate-500 text-xs font-medium leading-normal">
                        Fill online application form
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm text-center space-y-3 hover:shadow-md transition-all duration-200">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-black text-base flex items-center justify-center mx-auto shadow-md shadow-blue-600/30">
                        2
                    </div>
                    <h3 class="text-base sm:text-lg font-extrabold text-slate-900">Entrance Exam</h3>
                    <p class="text-slate-500 text-xs font-medium leading-normal">
                        Appear for CLAT/SLAT
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm text-center space-y-3 hover:shadow-md transition-all duration-200">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-black text-base flex items-center justify-center mx-auto shadow-md shadow-blue-600/30">
                        3
                    </div>
                    <h3 class="text-base sm:text-lg font-extrabold text-slate-900">Merit Rank</h3>
                    <p class="text-slate-500 text-xs font-medium leading-normal">
                        Check NLU Cut-off score
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm text-center space-y-3 hover:shadow-md transition-all duration-200">
                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-black text-base flex items-center justify-center mx-auto shadow-md shadow-blue-600/30">
                        4
                    </div>
                    <h3 class="text-base sm:text-lg font-extrabold text-slate-900">Counseling</h3>
                    <p class="text-slate-500 text-xs font-medium leading-normal">
                        Select college preference
                    </p>
                </div>

                <!-- Step 5 -->
                <div class="bg-white rounded-3xl p-5 sm:p-6 border border-slate-200/90 shadow-sm text-center space-y-3 hover:shadow-md transition-all duration-200">
                    <div class="w-10 h-10 rounded-full bg-emerald-500 text-white font-black text-base flex items-center justify-center mx-auto shadow-md shadow-emerald-500/30">
                        5
                    </div>
                    <h3 class="text-base sm:text-lg font-extrabold text-slate-900">Final Admission</h3>
                    <p class="text-slate-500 text-xs font-medium leading-normal">
                        Verify documents & fee
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- 3. Higher Studies, Why Choose BCI & Admission Form Section -->
    <section class="py-12 sm:py-16 bg-slate-50/70 border-b border-slate-200/70" x-data="{ formSubmitted: false, isSubmitting: false, formData: { name_first: '', name_last: '', email: '', phone: '', state: '', city: '', message: '' } }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Left Column Text Content -->
                <div class="lg:col-span-7 space-y-6 pt-2">
                    
                    <!-- Subsection 1 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Higher Studies and NLU Law Master's Admissions
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Graduates can enroll in LL.M. programs in Corporate Law, Criminal Law, Cyber Law, Intellectual Property, or pursue legal research via <strong class="text-slate-900 font-bold">National Law Universities (NLUs)</strong> admission. NLUs are India's premier legal education institutes under BCI, with national-level entrance exams like CLAT PG and AILET PG for master's degrees.
                        </p>
                    </div>

                    <!-- Subsection 2 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Why Choose BCI Approved Law Colleges?
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            BCI and UGC-approved law colleges ensure academic rigor, experienced faculty, access to moot courts, legal aid clinics, and corporate law firm collaborations. Always verify the BCI recognition and placement record before applying.
                        </p>
                    </div>

                    <!-- Subsection 3 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Book Your Free Law Counseling Session
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Unsure which <strong class="text-slate-900 font-bold">law courses after 12th</strong> suit your profile? Our experts at AdmissionsDekho help you shortlist the best options, colleges, and career strategies. Schedule your free session and start your journey in the prestigious legal world!
                        </p>
                    </div>

                </div>

                <!-- Right Column Inline Lead Form -->
                <div class="lg:col-span-5">
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-xl">
                        
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 text-center mb-6 leading-tight">
                            Get in Touch with Our Admission Experts
                        </h3>

                        <!-- Success Message -->
                        <template x-if="formSubmitted">
                            <div class="p-6 bg-emerald-50 border border-emerald-200 rounded-2xl text-center space-y-2 my-4">
                                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-2xl mx-auto">✓</div>
                                <h4 class="text-lg font-extrabold text-emerald-900">Thank You!</h4>
                                <p class="text-xs sm:text-sm text-emerald-700">Your law admission enquiry has been received. Our counselor will contact you shortly.</p>
                            </div>
                        </template>

                        <!-- Form -->
                        <form x-show="!formSubmitted" @submit.prevent="
                            isSubmitting = true;
                            fetch('{{ route('lead.submit') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    name: formData.name_first + ' ' + formData.name_last,
                                    email: formData.email,
                                    phone: formData.phone,
                                    city: formData.city + (formData.state ? ', ' + formData.state : ''),
                                    course: 'Law Courses (BA LLB / BBA LLB / LLM)',
                                    message: formData.message
                                })
                            })
                            .then(res => res.json())
                            .then(data => {
                                isSubmitting = false;
                                formSubmitted = true;
                            })
                            .catch(err => {
                                isSubmitting = false;
                                alert('Thank you! Your enquiry has been submitted.');
                                formSubmitted = true;
                            });
                        " class="space-y-4">
                            
                            <!-- Name Inputs -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Name *</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <input type="text" x-model="formData.name_first" placeholder="First" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                    <input type="text" x-model="formData.name_last" placeholder="Last" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Email *</label>
                                <input type="email" x-model="formData.email" placeholder="you@example.com" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                            </div>

                            <!-- Phone Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Phone / Contact *</label>
                                <input type="tel" x-model="formData.phone" placeholder="+1234567890" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                            </div>

                            <!-- State & City -->
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">State</label>
                                    <input type="text" x-model="formData.state" placeholder="State" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">City</label>
                                    <input type="text" x-model="formData.city" placeholder="City" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                            </div>

                            <!-- Message Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Message *</label>
                                <textarea x-model="formData.message" rows="3" placeholder="Your message here..." required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium resize-y"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2">
                                <button type="submit" :disabled="isSubmitting" class="w-auto px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-extrabold rounded-xl shadow-md transition-all text-sm flex items-center justify-center gap-2">
                                    <span x-text="isSubmitting ? 'Submitting...' : 'Submit'">Submit</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Key Statistics & Achievements Grid Section -->
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
                
                <!-- Stat Card 1 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🎓
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        5,000+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Law Aspirants Guided
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🏛️
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        120+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        BCI Approved Colleges
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🏆
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        98%
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Admission Success Rate
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🕒
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        15+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Years Academic Experience
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. Top Law Courses After 12th Section -->
    @if(!request()->is('*ba-llb*') && (!isset($page) || !str_contains($page->slug ?? '', 'ba-llb')))
    <section class="py-16 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    POPULAR PROGRAMMES
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    Top Law Courses After 12th
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Choose from India's most popular Law courses after Class 12. Click any course to explore eligibility, admission process, colleges, syllabus, career opportunities, salary, and FAQs.
                </p>
            </div>

            <!-- Course Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. BA LLB -->
                <a href="{{ url('/law-programs/ba-llb/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">BA LLB</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Integrated 5-year law programme combining Arts and Law. Learn Constitutional Law, Political Science, Sociology, Criminal Law, and Legal Drafting.
                        </p>
                    </div>
                </a>

                <!-- 2. BBA LLB -->
                <a href="{{ url('/law-programs/bba-llb/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">BBA LLB</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Integrated Business Administration and Law degree covering Corporate Law, Business Law, Management, Finance, Company Law, and Legal Compliance.
                        </p>
                    </div>
                </a>

                <!-- 3. BCom LLB -->
                <a href="{{ url('/law-programs/bcom-llb/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">BCom LLB</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Commerce with Law programme focusing on Taxation, Corporate Finance, Business Accounting, Company Law, Banking Law, and Commercial Litigation.
                        </p>
                    </div>
                </a>

                <!-- 4. BSc LLB -->
                <a href="{{ url('/law-programs/bsc-llb/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">BSc LLB</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Science integrated Law programme covering Intellectual Property, Biotechnology Law, Environmental Law, Forensic Science, and Cyber Law.
                        </p>
                    </div>
                </a>

                <!-- 5. BA LLB (Hons.) -->
                <a href="{{ url('/law-programs/ba-llb-hons/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">BA LLB (Hons.)</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Honours programme offering advanced legal studies with specialization in Constitutional Law, Criminal Law, Human Rights, International Law, and Research.
                        </p>
                    </div>
                </a>

                <!-- 6. LLM (Master of Laws) -->
                <a href="{{ url('/law-programs/llm/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">LLM (Master of Laws)</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            1-Year & 2-Year Postgraduate Law programme covering Corporate Law, Criminal Law, Cyber Law, IPR, Constitutional Law, and International Law.
                        </p>
                    </div>
                </a>

                <!-- 7. Other Law Specializations -->
                <a href="{{ url('/law-programs/') }}"
                   class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/60 transition-all duration-200 group relative flex flex-col justify-between cursor-pointer block">
                    <div>
                        <div class="flex justify-between items-center mb-5">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-blue-500 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Other Law Specializations</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Explore LLM, Corporate Law, Cyber Law, Intellectual Property Rights, Criminal Law, Constitutional Law, Environmental Law, and International Law.
                        </p>
                    </div>
                </a>

            </div>

        </div>
    </section>
    @endif

    <!-- BA LLB Career Opportunities & Salary Packages Section -->
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    CAREER SCOPE
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4 leading-tight">
                    BA LLB Career Opportunities & Salary Packages
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    High-paying career pathways available to integrated law graduates in India:
                </p>
            </div>

            <!-- 6 Career Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Card 1: Corporate Lawyer -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Corporate Lawyer</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            ₹8 – ₹25 LPA
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Advise multinational companies on contracts, M&A, compliance, and corporate governance.
                    </p>
                </div>

                <!-- Card 2: Judicial Magistrate / Judge -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9-4 9 4v2H3V6zm2 4h2v8H5v-8zm6 0h2v8h-2v-8zm6 0h2v8h-2v-8zM2 20h20v2H2v-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Judicial Magistrate / Judge</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            ₹10 – ₹20 LPA + Govt Perks
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Qualify Judicial Service Exams (PCS-J) to serve in District & Judicial Courts.
                    </p>
                </div>

                <!-- Card 3: Litigation Advocate -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Litigation Advocate</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            ₹6 – ₹30+ LPA
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Represent clients independently before High Courts and the Supreme Court of India.
                    </p>
                </div>

                <!-- Card 4: Cyber & IPR Specialist -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Cyber & IPR Specialist</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            ₹9 – ₹22 LPA
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Manage patent prosecutions, digital copyright disputes, and DPDP compliance.
                    </p>
                </div>

                <!-- Card 5: Legal Advisor / Public Prosecutor -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Legal Advisor / Public Prosecutor</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            ₹7 – ₹18 LPA
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Work with government agencies, SEBI, RBI, and public sector undertakings (PSUs).
                    </p>
                </div>

                <!-- Card 6: Civil Services (IAS / IPS / IFS) -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-blue-500/50 transition-all duration-200 space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/70 text-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900">Civil Services (IAS / IPS / IFS)</h3>
                    <div>
                        <span class="inline-block bg-emerald-100/90 text-emerald-800 text-xs sm:text-sm font-bold px-3 py-1 rounded-lg">
                            Government Pay Level 10+
                        </span>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Law graduates hold one of the highest success rates in the UPSC Civil Services Exam.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Average Salary Growth in BA LLB (Per Annum) Section -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    SALARY PROGRESSION
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4 leading-tight">
                    Average Salary Growth in BA LLB<br class="hidden sm:block"> (Per Annum)
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Visualizing salary progression for corporate law professionals from Junior Associate to Senior Partner:
                </p>
            </div>

            <!-- Salary Bar Chart Visual Container -->
            <div class="max-w-5xl mx-auto bg-slate-50/80 rounded-3xl p-6 sm:p-10 border border-slate-200/80 shadow-sm">
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 items-end min-h-[300px] pt-8">

                    <!-- 1. Entry Level (0-2 Yrs) -->
                    <div class="flex flex-col items-center group">
                        <div class="w-full bg-blue-600 rounded-2xl h-24 sm:h-28 flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:scale-[1.02] transition-transform duration-200">
                            <span class="text-white font-black text-sm sm:text-base tracking-wide">₹6 – 9 LPA</span>
                        </div>
                        <div class="mt-4 text-center">
                            <h4 class="text-xs sm:text-sm font-extrabold text-slate-900">Entry Level (0-2 Yrs)</h4>
                        </div>
                    </div>

                    <!-- 2. Mid Level (3-5 Yrs) -->
                    <div class="flex flex-col items-center group">
                        <div class="w-full bg-indigo-600 rounded-2xl h-36 sm:h-44 flex items-center justify-center shadow-lg shadow-indigo-600/20 group-hover:scale-[1.02] transition-transform duration-200">
                            <span class="text-white font-black text-sm sm:text-base tracking-wide">₹12 – 18 LPA</span>
                        </div>
                        <div class="mt-4 text-center">
                            <h4 class="text-xs sm:text-sm font-extrabold text-slate-900">Mid Level (3-5 Yrs)</h4>
                        </div>
                    </div>

                    <!-- 3. Senior Associate (6-9 Yrs) -->
                    <div class="flex flex-col items-center group">
                        <div class="w-full bg-violet-600 rounded-2xl h-52 sm:h-64 flex items-center justify-center shadow-lg shadow-violet-600/20 group-hover:scale-[1.02] transition-transform duration-200">
                            <span class="text-white font-black text-sm sm:text-base tracking-wide">₹22 – 35 LPA</span>
                        </div>
                        <div class="mt-4 text-center">
                            <h4 class="text-xs sm:text-sm font-extrabold text-slate-900">Senior Associate (6-9 Yrs)</h4>
                        </div>
                    </div>

                    <!-- 4. Partner / General Counsel -->
                    <div class="flex flex-col items-center group">
                        <div class="w-full bg-emerald-600 rounded-2xl h-60 sm:h-72 flex items-center justify-center shadow-lg shadow-emerald-600/20 group-hover:scale-[1.02] transition-transform duration-200">
                            <span class="text-white font-black text-sm sm:text-base tracking-wide">₹45 – 90+ LPA</span>
                        </div>
                        <div class="mt-4 text-center">
                            <h4 class="text-xs sm:text-sm font-extrabold text-slate-900">Partner / General Counsel</h4>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- 2. Top Law Entrance Exams in India Section -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    QUALIFYING EXAMS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    Top Law Entrance Exams in India
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Key national and university-level entrance examinations you need to qualify for top law colleges:
                </p>
            </div>

            <!-- Entrance Exam Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. CLAT 2026 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-blue-600"></div>
                    <div>
                        <div class="mb-3">
                            <span class="bg-blue-600 text-white text-[11px] font-bold px-3 py-1 rounded-full inline-block">
                                National Level
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">CLAT 2026</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed mb-4">
                            Common Law Admission Test for 24 National Law Universities (NLUs) in India.
                        </p>
                        
                        <div class="bg-slate-50 p-4 rounded-xl space-y-1.5 text-xs text-slate-700 font-medium mb-6 border border-slate-100">
                            <div><strong class="font-bold text-slate-900">Eligibility:</strong> 10+2 with 45% aggregate <span class="text-blue-600 font-semibold">(40% SC/ST)</span></div>
                            <div><strong class="font-bold text-slate-900">Exam Month:</strong> December 2025</div>
                        </div>
                    </div>

                    <button @click="isModalOpen = true; modalTitle = 'CLAT 2026 Exam Pattern & Dates'; selectedCourse = 'CLAT 2026'"
                            class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold text-xs sm:text-sm py-3 rounded-xl transition text-center">
                        Exam Pattern & Dates
                    </button>
                </div>

                <!-- 2. AILET 2026 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-blue-600"></div>
                    <div>
                        <div class="mb-3">
                            <span class="bg-purple-600 text-white text-[11px] font-bold px-3 py-1 rounded-full inline-block">
                                NLU Delhi
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">AILET 2026</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed mb-4">
                            All India Law Entrance Test for exclusive admission to NLU Delhi.
                        </p>
                        
                        <div class="bg-slate-50 p-4 rounded-xl space-y-1.5 text-xs text-slate-700 font-medium mb-6 border border-slate-100">
                            <div><strong class="font-bold text-slate-900">Eligibility:</strong> 10+2 with 45% aggregate</div>
                            <div><strong class="font-bold text-slate-900">Exam Month:</strong> December 2025</div>
                        </div>
                    </div>

                    <button @click="isModalOpen = true; modalTitle = 'AILET 2026 Exam Pattern & Dates'; selectedCourse = 'AILET 2026'"
                            class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold text-xs sm:text-sm py-3 rounded-xl transition text-center">
                        Exam Pattern & Dates
                    </button>
                </div>

                <!-- 3. SLAT 2026 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-blue-600"></div>
                    <div>
                        <div class="mb-3">
                            <span class="bg-emerald-600 text-white text-[11px] font-bold px-3 py-1 rounded-full inline-block">
                                Symbiosis Group
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">SLAT 2026</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed mb-4">
                            Symbiosis Law Admission Test for Symbiosis Law Schools (Pune, Noida, Hyderabad, Nagpur).
                        </p>
                        
                        <div class="bg-slate-50 p-4 rounded-xl space-y-1.5 text-xs text-slate-700 font-medium mb-6 border border-slate-100">
                            <div><strong class="font-bold text-slate-900">Eligibility:</strong> 10+2 with 45% marks</div>
                            <div><strong class="font-bold text-slate-900">Exam Month:</strong> May 2026</div>
                        </div>
                    </div>

                    <button @click="isModalOpen = true; modalTitle = 'SLAT 2026 Exam Pattern & Dates'; selectedCourse = 'SLAT 2026'"
                            class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold text-xs sm:text-sm py-3 rounded-xl transition text-center">
                        Exam Pattern & Dates
                    </button>
                </div>

                <!-- 4. LSAT—India 2026 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-blue-600"></div>
                    <div>
                        <div class="mb-3">
                            <span class="bg-amber-600 text-white text-[11px] font-bold px-3 py-1 rounded-full inline-block">
                                Pearson VUE
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">LSAT—India 2026</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed mb-4">
                            Accepted by Jindal Global Law School (JGLS) and premier private law institutions.
                        </p>
                        
                        <div class="bg-slate-50 p-4 rounded-xl space-y-1.5 text-xs text-slate-700 font-medium mb-6 border border-slate-100">
                            <div><strong class="font-bold text-slate-900">Eligibility:</strong> 10+2 in any stream</div>
                            <div><strong class="font-bold text-slate-900">Exam Month:</strong> January & May 2026</div>
                        </div>
                    </div>

                    <button @click="isModalOpen = true; modalTitle = 'LSAT India 2026 Exam Pattern & Dates'; selectedCourse = 'LSAT India 2026'"
                            class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold text-xs sm:text-sm py-3 rounded-xl transition text-center">
                        Exam Pattern & Dates
                    </button>
                </div>

                <!-- 5. CUET UG Law 2026 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-blue-600"></div>
                    <div>
                        <div class="mb-3">
                            <span class="bg-red-600 text-white text-[11px] font-bold px-3 py-1 rounded-full inline-block">
                                NTA Exam
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">CUET UG Law 2026</h3>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed mb-4">
                            Central Universities Entrance Test for BHU, Allahabad University, and Central Universities.
                        </p>
                        
                        <div class="bg-slate-50 p-4 rounded-xl space-y-1.5 text-xs text-slate-700 font-medium mb-6 border border-slate-100">
                            <div><strong class="font-bold text-slate-900">Eligibility:</strong> 10+2 passed</div>
                            <div><strong class="font-bold text-slate-900">Exam Month:</strong> May 2026</div>
                        </div>
                    </div>

                    <button @click="isModalOpen = true; modalTitle = 'CUET UG Law 2026 Exam Pattern & Dates'; selectedCourse = 'CUET UG Law 2026'"
                            class="w-full bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold text-xs sm:text-sm py-3 rounded-xl transition text-center">
                        Exam Pattern & Dates
                    </button>
                </div>

            </div>

        </div>
    </section>

    <!-- 3. Top Law Colleges in India Section (PREMIER INSTITUTIONS) -->
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    PREMIER INSTITUTIONS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    Top BA LLB Colleges in India
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Explore leading National Law Universities (NLUs) and top-ranked private law institutions:
                </p>
            </div>

            <!-- Colleges Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- College 1: NLSIU Bangalore -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="NLSIU Bangalore" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    NIRF #1
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">NLSIU Bangalore</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Bengaluru, Karnataka</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹3.5 Lakhs/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹18.5 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - NLSIU Bangalore'; selectedCourse = 'NLSIU Bangalore'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

                <!-- College 2: NLU Delhi (NLUD) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/law-corporate-building.png') }}" alt="NLU Delhi" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    NIRF #2
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">NLU Delhi (NLUD)</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>New Delhi</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹3.2 Lakhs/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹17.0 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - NLU Delhi'; selectedCourse = 'NLU Delhi'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

                <!-- College 3: NALSAR University of Law -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/law-books-hero.png') }}" alt="NALSAR University of Law" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    NIRF #3
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">NALSAR University of Law</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Hyderabad, Telangana</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹3.1 Lakhs/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹16.5 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - NALSAR Hyderabad'; selectedCourse = 'NALSAR Hyderabad'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

                <!-- College 4: Symbiosis Law School (SLS) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/stream-banner.png') }}" alt="Symbiosis Law School" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    NIRF #6
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">Symbiosis Law School (SLS)</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Pune, Maharashtra</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹4.2 Lakhs/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹14.0 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - Symbiosis Law School'; selectedCourse = 'Symbiosis Pune'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

                <!-- College 5: Jindal Global Law School (JGLS) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="Jindal Global Law School" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    QS Rank #1 Pvt
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">Jindal Global Law School (JGLS)</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Sonipat, Haryana</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹6.5 Lakhs/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹14.5 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - Jindal Global Law School'; selectedCourse = 'Jindal Global Law School'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

                <!-- College 6: Government Law College (GLC) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('/images/page-assets/law-corporate-building.png') }}" alt="Government Law College Mumbai" class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3">
                                <span class="bg-slate-950/90 text-amber-400 border border-amber-400/40 text-[10px] font-black px-2.5 py-1 rounded-full shadow-md uppercase tracking-wide">
                                    Heritage NLU
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">Government Law College (GLC)</h3>
                            <div class="flex items-center gap-1 text-slate-500 text-xs mt-1 mb-4">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Mumbai, Maharashtra</span>
                            </div>

                            <div class="flex justify-between items-center text-xs border-t border-b border-slate-100 py-3 mb-5">
                                <div>
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Fees</span>
                                    <span class="font-bold text-slate-900">₹12,000/Yr</span>
                                </div>
                                <div class="text-right">
                                    <span class="text-slate-400 block text-[10px] font-semibold uppercase">Placement</span>
                                    <span class="font-bold text-slate-900">₹11.5 LPA Avg</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <button @click="isModalOpen = true; modalTitle = 'Check Cut-off & Seat Info - Government Law College Mumbai'; selectedCourse = 'Government Law College Mumbai'"
                                class="w-full border border-blue-600 text-blue-600 hover:bg-blue-50 font-bold text-xs sm:text-sm py-2.5 rounded-xl transition text-center">
                            Check Cut-off & Seat Info
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Top Law Firms & Corporate Recruiters Section (TOP EMPLOYERS) -->
    <section class="py-16 sm:py-20 bg-slate-50/70 border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    TOP EMPLOYERS
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4 leading-tight">
                    Top Law Firms & Corporate Recruiters
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Top employers hiring law graduates from leading law schools in India:
                </p>
            </div>

            <!-- Recruiter Badges Cloud -->
            <div class="max-w-5xl mx-auto flex flex-wrap justify-center items-center gap-3.5 sm:gap-4">
                
                <!-- 1. Shardul Amarchand Mangaldas -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Shardul Amarchand Mangaldas</span>
                </div>

                <!-- 2. Cyril Amarchand Mangaldas -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Cyril Amarchand Mangaldas</span>
                </div>

                <!-- 3. Trilegal -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Trilegal</span>
                </div>

                <!-- 4. Khaitan & Co. -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Khaitan & Co.</span>
                </div>

                <!-- 5. AZB & Partners -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>AZB & Partners</span>
                </div>

                <!-- 6. Deloitte -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Deloitte</span>
                </div>

                <!-- 7. EY India -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>EY India</span>
                </div>

                <!-- 8. KPMG -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>KPMG</span>
                </div>

                <!-- 9. TCS Legal -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>TCS Legal</span>
                </div>

                <!-- 10. Wipro Corporate -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Wipro Corporate</span>
                </div>

                <!-- 11. SEBI -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>SEBI</span>
                </div>

                <!-- 12. Reserve Bank of India -->
                <div class="bg-white border border-slate-200/90 hover:border-blue-400/80 hover:shadow-md text-slate-900 font-extrabold text-xs sm:text-sm px-5 sm:px-6 py-3 rounded-full shadow-sm flex items-center gap-2.5 transition-all duration-200 cursor-pointer">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 v5m-4 0h4"></path>
                    </svg>
                    <span>Reserve Bank of India</span>
                </div>

            </div>

        </div>
    </section>

    <!-- What Law Aspirants Say About Us Section (STUDENT FEEDBACK) -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    STUDENT FEEDBACK
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight mb-4 leading-tight">
                    What Law Aspirants Say About Us
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Real experiences from students guided into top National Law Universities:
                </p>
            </div>

            <!-- 3 Testimonial Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-1 text-amber-400 text-lg">
                            ★★★★★
                        </div>
                        <p class="text-slate-700 text-sm sm:text-base italic leading-relaxed font-medium">
                            "The admission counseling guidance was spot-on! They helped me prepare for CLAT counseling preferences and get my dream seat."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-extrabold text-slate-900">Ananya Sharma</h4>
                        <p class="text-xs sm:text-sm text-slate-500 font-semibold mt-0.5">BA LLB Student (NALSAR Hyderabad)</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-1 text-amber-400 text-lg">
                            ★★★★★
                        </div>
                        <p class="text-slate-700 text-sm sm:text-base italic leading-relaxed font-medium">
                            "Clear insights into eligibility and exam cut-offs. I got complete assistance regarding fee structures and scholarship programs."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-extrabold text-slate-900">Rohan Mehta</h4>
                        <p class="text-xs sm:text-sm text-slate-500 font-semibold mt-0.5">BBA LLB Student (Symbiosis Pune)</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center gap-1 text-amber-400 text-lg">
                            ★★★★★
                        </div>
                        <p class="text-slate-700 text-sm sm:text-base italic leading-relaxed font-medium">
                            "Highly professional counseling team. They explained the exact differences between BA LLB and BBA LLB, saving me lots of confusion."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-base sm:text-lg font-extrabold text-slate-900">Priya Nair</h4>
                        <p class="text-xs sm:text-sm text-slate-500 font-semibold mt-0.5">BA LLB (Hons.) Student (NLSIU)</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 4. Law Career Opportunities & Salary Packages Section (CAREER SCOPE) -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    CAREER SCOPE
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    Law Career Opportunities & Salary Packages
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    High-paying career pathways available to integrated law graduates in India:
                </p>
            </div>

            <!-- Career Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. Corporate Lawyer -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m3 0h1m-1-4h.01M9 16h.01M9 12h.01M9 8h.01M15 16h.01M15 12h.01M15 8h.01"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Corporate Lawyer</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            ₹8 – ₹25 LPA
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Advise multinational companies on contracts, M&A, compliance, and corporate governance.
                        </p>
                    </div>
                </div>

                <!-- 2. Judicial Magistrate / Judge -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9-4 9 4v2H3V6zm2 6h14v2H5v-2zm3 4h8v2H8v-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Judicial Magistrate / Judge</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            ₹10 – ₹20 LPA + Govt Perks
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Qualify Judicial Service Exams (PCS-J) to serve in District & Judicial Courts.
                        </p>
                    </div>
                </div>

                <!-- 3. Litigation Advocate -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457-.315-2.84-.882-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Litigation Advocate</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            ₹6 – ₹30+ LPA
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Represent clients independently before High Courts and the Supreme Court of India.
                        </p>
                    </div>
                </div>

                <!-- 4. Cyber & IPR Specialist -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Cyber & IPR Specialist</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            ₹9 – ₹22 LPA
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Manage patent prosecutions, digital copyright disputes, and DPDP compliance.
                        </p>
                    </div>
                </div>

                <!-- 5. Legal Advisor / Public Prosecutor -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Legal Advisor / Public Prosecutor</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            ₹7 – ₹18 LPA
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Work with government agencies, SEBI, RBI, and public sector undertakings (PSUs).
                        </p>
                    </div>
                </div>

                <!-- 6. Civil Services (IAS / IPS / IFS) -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Civil Services (IAS / IPS / IFS)</h3>
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-full inline-block mt-2 mb-3">
                            Government Pay Level 10+
                        </span>
                        <p class="text-slate-500 text-xs sm:text-sm leading-relaxed">
                            Law graduates hold one of the highest success rates in the UPSC Civil Services Exam.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 5. BCI Approved Colleges & Campuses Carousel Slide Section -->
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Title with Decorative Waves -->
            <div class="flex items-center justify-center gap-3 sm:gap-4 mb-10 text-center">
                <!-- Left Squiggly SVG -->
                <svg class="w-12 sm:w-16 h-4 text-slate-400 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 100 25">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2 12c5-10 10 10 15 0s10-10 15 0 10 10 15 0 10-10 15 0 10 10 15 0 10-10 15 0 10 10 15 0"></path>
                </svg>

                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-slate-900">
                    Some of Our <span class="text-blue-600 font-extrabold">120+ BCI Approved</span> Law Colleges & Campuses
                </h2>

                <!-- Right Squiggly SVG -->
                <svg class="w-12 sm:w-16 h-4 text-slate-400 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 100 25">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2 12c5-10 10 10 15 0s10-10 15 0 10 10 15 0 10-10 15 0 10 10 15 0 10-10 15 0 10 10 15 0"></path>
                </svg>
            </div>

            <!-- Alpine.js Carousel -->
            <div x-data="{ 
                    activeSlide: 0,
                    slides: [
                        { img: '{{ asset('/images/page-assets/campus-hero.png') }}', title: 'Graduation & Convocation Ceremony' },
                        { img: '{{ asset('/images/page-assets/law-books-hero.png') }}', title: 'State-of-the-Art Law Libraries' },
                        { img: '{{ asset('/images/page-assets/law-corporate-building.png') }}', title: 'Corporate Law Placement Partners' },
                        { img: '{{ asset('/images/page-assets/stream-banner.png') }}', title: 'Moot Court & Lecture Halls' },
                        { img: '{{ asset('/images/page-assets/campus-hero.png') }}', title: 'NLU & Premier Private Campuses' }
                    ],
                    next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length },
                    prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length }
                 }"
                 class="relative max-w-6xl mx-auto">

                <!-- 3 Cards Visible Carousel Container -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 relative overflow-hidden">

                    <!-- Prev Arrow Overlay Button -->
                    <button @click="prev()"
                            class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-slate-950/70 hover:bg-slate-900 text-white flex items-center justify-center shadow-lg transition backdrop-blur-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    <!-- Slide Card 1 (Active) -->
                    <div class="h-64 sm:h-72 rounded-3xl overflow-hidden shadow-md border border-slate-200/80 bg-slate-900 relative group">
                        <img :src="slides[activeSlide].img" :alt="slides[activeSlide].title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Slide Card 2 (Next) -->
                    <div class="hidden md:block h-64 sm:h-72 rounded-3xl overflow-hidden shadow-md border border-slate-200/80 bg-slate-900 relative group">
                        <img :src="slides[(activeSlide + 1) % slides.length].img" :alt="slides[(activeSlide + 1) % slides.length].title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Slide Card 3 (Next + 1) -->
                    <div class="hidden md:block h-64 sm:h-72 rounded-3xl overflow-hidden shadow-md border border-slate-200/80 bg-slate-900 relative group">
                        <img :src="slides[(activeSlide + 2) % slides.length].img" :alt="slides[(activeSlide + 2) % slides.length].title" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Next Arrow Overlay Button -->
                    <button @click="next()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-slate-950/70 hover:bg-slate-900 text-white flex items-center justify-center shadow-lg transition backdrop-blur-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                </div>

                <!-- Pagination Dots Indicator -->
                <div class="flex items-center justify-center gap-2 mt-8">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="activeSlide = index"
                                class="transition-all duration-300 rounded-full"
                                :class="activeSlide === index ? 'w-8 h-2.5 bg-slate-900' : 'w-2.5 h-2.5 bg-slate-300 hover:bg-slate-400'">
                        </button>
                    </template>
                </div>

            </div>

        </div>
    </section>

    <!-- 6. What Law Aspirants Say About Us Section (STUDENT FEEDBACK) -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    STUDENT FEEDBACK
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    What Law Aspirants Say About Us
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Real experiences from students guided into top National Law Universities:
                </p>
            </div>

            <!-- Feedback Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Feedback 1: Ananya Sharma -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <!-- Star Rating -->
                        <div class="flex items-center gap-1 text-amber-400 text-base mb-4">
                            ★★★★★
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-6">
                            "The admission counseling guidance was spot-on! They helped me prepare for CLAT counseling preferences and get my dream seat."
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base">Ananya Sharma</h4>
                        <span class="text-slate-400 text-xs font-medium block mt-0.5">BA LLB Student (NALSAR Hyderabad)</span>
                    </div>
                </div>

                <!-- Feedback 2: Rohan Mehta -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <!-- Star Rating -->
                        <div class="flex items-center gap-1 text-amber-400 text-base mb-4">
                            ★★★★★
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-6">
                            "Clear insights into eligibility and exam cut-offs. I got complete assistance regarding fee structures and scholarship programs."
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base">Rohan Mehta</h4>
                        <span class="text-slate-400 text-xs font-medium block mt-0.5">BBA LLB Student (Symbiosis Pune)</span>
                    </div>
                </div>

                <!-- Feedback 3: Priya Nair -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between">
                    <div>
                        <!-- Star Rating -->
                        <div class="flex items-center gap-1 text-amber-400 text-base mb-4">
                            ★★★★★
                        </div>
                        <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed mb-6">
                            "Highly professional counseling team. They explained the exact differences between BA LLB and BBA LLB, saving me lots of confusion."
                        </p>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm sm:text-base">Priya Nair</h4>
                        <span class="text-slate-400 text-xs font-medium block mt-0.5">BA LLB (Hons.) Student (NLSIU)</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 7. Additional Overview & Application Form Section -->
    <section class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-8 space-y-8">
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm">
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Why Pursue a Law Degree in India?</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Law is one of the most prestigious and dynamic career fields in India. Graduating from a BCI (Bar Council of India) recognized law college opens diverse career avenues including Judicial Services, Corporate Counsel, Legal Advisory, Criminal & Civil Litigation, Public Advocacy, and Legal Research.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6 text-xs sm:text-sm">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                <span class="font-bold text-slate-900 block text-base">Eligibility Criteria</span>
                                <span class="text-slate-500 mt-1 block">50% aggregate in 10+2 (Arts, Science, or Commerce)</span>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                <span class="font-bold text-slate-900 block text-base">Key Entrance Exams</span>
                                <span class="text-slate-500 mt-1 block">CLAT, LSAT, AILET, SLAT & Direct College Test</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4">
                    <x-admission-form title="Free Law Admission Guidance" streamInterest="Law Courses" />
                </div>
            </div>
        </div>
    </section>

    <!-- 8. 20 FAQs About Law Section at Bottom of Page (FREQUENTLY ASKED QUESTIONS) -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeFaq: null }">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-3.5 py-1 text-[11px] font-bold tracking-wider text-blue-600 uppercase bg-blue-100/70 rounded-full mb-3">
                    FREQUENTLY ASKED QUESTIONS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    20 FAQs About LLB
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Everything you need to know about eligibility, exams, fees, colleges, and career scope:
                </p>
            </div>

            <!-- FAQ List -->
            <div class="space-y-3.5">

                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>1. Can I study law after Class 12?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 1 }">+</span>
                    </button>
                    <div x-show="activeFaq === 1" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes! You can join a 5-year integrated law program like BA LLB, BBA LLB, BCom LLB, or BSc LLB directly after completing Class 12 from any recognized board in India.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>2. What is the minimum percentage required in Class 12 for law admission?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 2 }">+</span>
                    </button>
                    <div x-show="activeFaq === 2" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Most top law colleges and entrance exams (like CLAT/AILET) require a minimum of 45% aggregate marks for General/OBC candidates and 40% for SC/ST candidates in Class 12.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 3 ? null : 3)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>3. Which entrance exam is best for law after 12th?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 3 }">+</span>
                    </button>
                    <div x-show="activeFaq === 3" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        CLAT (Common Law Admission Test) is the premier national-level exam for admission to 24 National Law Universities (NLUs). Other top exams include AILET (NLU Delhi), SLAT (Symbiosis), LSAT-India, and CUET UG Law.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 4 ? null : 4)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>4. Can Science or Commerce stream students apply for BA LLB?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 4 }">+</span>
                    </button>
                    <div x-show="activeFaq === 4" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Absolutely! Students from any stream (Science, Commerce, or Arts/Humanities) in Class 12 are fully eligible to apply for 5-year integrated law courses.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 5 ? null : 5)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>5. What is the duration of integrated law programs?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 5 }">+</span>
                    </button>
                    <div x-show="activeFaq === 5" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Integrated law programs (BA LLB, BBA LLB, BCom LLB, BSc LLB) are 5 years in duration, structured across 10 semesters.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 6 ? null : 6)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>6. What is the average starting salary for BA LLB graduates?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 6 }">+</span>
                    </button>
                    <div x-show="activeFaq === 6" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Fresh law graduates from top NLUs and tier-1 law colleges receive average starting salary packages ranging from ₹8 to ₹18 LPA in corporate law firms, MNCs, and legal consultancies.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 7 ? null : 7)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>7. Is there an upper age limit for CLAT exam?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 7 }">+</span>
                    </button>
                    <div x-show="activeFaq === 7" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        No, as per Supreme Court & BCI directives, there is no upper age limit for appearing in the CLAT exam for undergraduate (BA LLB) admissions.
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 8 ? null : 8)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>8. What is the difference between BA LLB and BBA LLB?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 8 }">+</span>
                    </button>
                    <div x-show="activeFaq === 8" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        BA LLB integrates humanities subjects (Political Science, Sociology, History) with legal studies, ideal for litigation and civil services. BBA LLB integrates management & business concepts (Finance, Corporate Governance, Marketing) with Law, ideal for corporate careers.
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 9 ? null : 9)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>9. What is BSc LLB and who should opt for it?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 9 }">+</span>
                    </button>
                    <div x-show="activeFaq === 9" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        BSc LLB combines science disciplines (Biotechnology, Chemistry, Computer Science) with Law. It is specifically designed for students aspiring to specialize in Intellectual Property Rights (IPR), Patent Law, Biotechnology Law, and Cyber Security Law.
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 10 ? null : 10)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>10. Can I become a Judge after completing 5-year integrated law?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 10 }">+</span>
                    </button>
                    <div x-show="activeFaq === 10" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes! Upon completing your 5-year law degree and registering with a State Bar Council, you can immediately appear for the Judicial Services Examination (PCS-J) in your state to become a Civil Judge / Judicial Magistrate.
                    </div>
                </div>

                <!-- FAQ 11 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 11 ? null : 11)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>11. What are the top National Law Universities (NLUs) in India?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 11 }">+</span>
                    </button>
                    <div x-show="activeFaq === 11" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        The top-ranked NLUs include NLSIU Bengaluru (NIRF #1), NLU Delhi (NIRF #2), NALSAR Hyderabad (NIRF #3), WBNUJS Kolkata, NLIU Bhopal, GNLU Gandhinagar, and NLU Jodhpur.
                    </div>
                </div>

                <!-- FAQ 12 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 12 ? null : 12)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>12. What documents are required during law admission counseling?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 12 }">+</span>
                    </button>
                    <div x-show="activeFaq === 12" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Required documents include Class 10th & 12th Marksheets/Certificates, Entrance Scorecard (CLAT/AILET/SLAT), Transfer Certificate (TC), Migration Certificate, Category/Reservation Certificate (if applicable), Aadhaar Card, and Passport-size Photographs.
                    </div>
                </div>

                <!-- FAQ 13 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 13 ? null : 13)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>13. What is the fee structure for 5-year law courses?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 13 }">+</span>
                    </button>
                    <div x-show="activeFaq === 13" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Tuition fees at NLUs average ₹2.5 to ₹3.5 Lakhs per year. Top private universities (like Jindal & Symbiosis) cost ₹3.5 to ₹6.5 Lakhs per year, while government law colleges (like GLC Mumbai & Faculty of Law DU) charge ₹12,000 to ₹30,000 per year.
                    </div>
                </div>

                <!-- FAQ 14 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 14 ? null : 14)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>14. Is corporate law a high-demand career in India?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 14 }">+</span>
                    </button>
                    <div x-show="activeFaq === 14" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes! Corporate Law is currently among the most lucrative careers in India due to high demand for legal advisors in Mergers & Acquisitions (M&A), corporate compliance, contract management, fintech regulations, and IP disputes.
                    </div>
                </div>

                <!-- FAQ 15 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 15 ? null : 15)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>15. Can 12th board appearing candidates fill the CLAT form?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 15 }">+</span>
                    </button>
                    <div x-show="activeFaq === 15" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes, students appearing for their 12th board exams in the academic year can fill out the CLAT application form and appear for the exam on a provisional basis.
                    </div>
                </div>

                <!-- FAQ 16 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 16 ? null : 16)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>16. What is the syllabus pattern for CLAT entrance exam?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 16 }">+</span>
                    </button>
                    <div x-show="activeFaq === 16" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        CLAT consists of 120 passage-based multiple-choice questions covering 5 core sections: English Language, Current Affairs & General Knowledge, Legal Reasoning, Logical Reasoning, and Quantitative Techniques.
                    </div>
                </div>

                <!-- FAQ 17 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 17 ? null : 17)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>17. Are scholarships available for law students in India?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 17 }">+</span>
                    </button>
                    <div x-show="activeFaq === 17" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes! Merit-cum-means scholarships, state government fee concessions for SC/ST/OBC students, Central Sector Scholarships (NSP), and university-specific financial aid are available for deserving law students.
                    </div>
                </div>

                <!-- FAQ 18 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 18 ? null : 18)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>18. What is the role of the Bar Council of India (BCI)?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 18 }">+</span>
                    </button>
                    <div x-show="activeFaq === 18" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        The Bar Council of India (BCI) is the apex statutory body regulating legal education and professional legal practice in India. It approves law colleges, grants licenses to practice, and conducts the All India Bar Examination (AIBE).
                    </div>
                </div>

                <!-- FAQ 19 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 19 ? null : 19)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>19. Do law students need to complete mandatory internships?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 19 }">+</span>
                    </button>
                    <div x-show="activeFaq === 19" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Yes, BCI regulations mandate a minimum of 20 weeks of practical internship across the 5-year program under practicing advocates, law firms, corporate legal departments, judicial courts, or NGOs.
                    </div>
                </div>

                <!-- FAQ 20 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                    <button @click="activeFaq = (activeFaq === 20 ? null : 20)"
                            class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                        <span>20. How can Admissions Dekho help in law admissions?</span>
                        <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === 20 }">+</span>
                    </button>
                    <div x-show="activeFaq === 20" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                        Admissions Dekho offers 100% free personalized counseling, NLU cutoff analysis, college comparisons, fee structure guidance, and direct application assistance for top law institutes across India.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Bottom Apply for LLB Counseling 2026 Banner Section -->
    <section class="py-16 sm:py-20 bg-slate-950 text-white border-t border-slate-800">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
                Apply for {{ request()->is('*ba-llb*') ? 'BA LLB' : 'LLB' }} Counseling 2026
            </h2>

            <p class="text-slate-300 text-sm sm:text-base lg:text-lg max-w-2xl mx-auto leading-relaxed">
                Get personalized guidance on university eligibility, entrance cut-offs, and scholarship options.
            </p>

            <div class="pt-3">
                <button @click="isModalOpen = true; modalTitle = 'Evaluate My {{ request()->is('*ba-llb*') ? 'BA LLB' : 'LLB' }} Eligibility Free'; selectedCourse = '{{ request()->is('*ba-llb*') ? 'BA LLB' : 'LLB' }} 2026 Counseling'"
                        class="inline-flex items-center gap-2.5 bg-blue-600 hover:bg-blue-500 text-white font-extrabold px-8 py-4 rounded-xl shadow-xl shadow-blue-600/30 hover:scale-[1.03] transition-all text-sm sm:text-base mx-auto">
                    <svg class="w-5 h-5 text-white transform -rotate-45" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                    <span>Evaluate My Eligibility Free</span>
                </button>
            </div>

        </div>
    </section>

</x-layout.app>
