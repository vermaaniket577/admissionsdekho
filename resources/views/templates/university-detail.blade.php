<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Section with Semi-Transparent Glassmorphic Header Card -->
    <section class="relative bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-12 sm:py-20 border-b border-slate-800 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="{{ $college->name }} Campus" class="w-full h-full object-cover opacity-15">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/95 to-slate-950/85"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <a href="{{ url('/universities') }}" class="hover:text-amber-400 transition">Universities</a>
                <span>/</span>
                <span class="text-amber-400 font-bold">{{ $college->name }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <!-- Badges -->
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="bg-blue-500/10 border border-blue-500/30 text-blue-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                            🏛️ {{ $details['naac_grade'] }}
                        </span>
                        <span class="bg-slate-900/90 border border-slate-700/80 text-amber-400 text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-1">
                            📍 {{ $college->location }}
                        </span>
                        <span class="bg-slate-900/90 border border-slate-700/80 text-emerald-400 text-xs font-bold px-3 py-1.5 rounded-full">
                            ★ {{ $college->rating }} / 5.0 (Verified Campus)
                        </span>
                    </div>

                    <!-- Dynamic H1 Title -->
                    <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        {{ $college->name }}
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-3xl">
                        Official Admissions 2026, UGC/NAAC Accreditations, Fee Breakdown, Entrance Cutoffs, and Placement Records.
                    </p>

                    <!-- Quick Info Stats Bar -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-4 border-t border-slate-800 text-xs">
                        <div class="bg-slate-900/80 p-3 rounded-2xl border border-slate-800">
                            <span class="text-slate-400 block text-[11px]">AVERAGE CTC</span>
                            <span class="text-emerald-400 font-black text-base">{{ $details['avg_package'] }}</span>
                        </div>
                        <div class="bg-slate-900/80 p-3 rounded-2xl border border-slate-800">
                            <span class="text-slate-400 block text-[11px]">HIGHEST CTC</span>
                            <span class="text-amber-400 font-black text-base">{{ $details['highest_package'] }}</span>
                        </div>
                        <div class="bg-slate-900/80 p-3 rounded-2xl border border-slate-800">
                            <span class="text-slate-400 block text-[11px]">CAMPUS SIZE</span>
                            <span class="text-slate-200 font-bold text-xs mt-1 block">{{ $details['campus_size'] }}</span>
                        </div>
                        <div class="bg-slate-900/80 p-3 rounded-2xl border border-slate-800">
                            <span class="text-slate-400 block text-[11px]">PLACEMENT RATE</span>
                            <span class="text-blue-400 font-black text-base">{{ $details['placement_rate'] }}</span>
                        </div>
                    </div>

                    <!-- Primary & Secondary Action CTAs -->
                    <div class="pt-4 flex flex-wrap items-center gap-4">
                        <button @click="isModalOpen = true; modalTitle = 'Apply for 2026 Admissions - {{ $college->name }}'; selectedCourse = '{{ $college->name }} Admission Inquiry'"
                                class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-extrabold px-7 py-3.5 rounded-xl shadow-xl shadow-blue-600/30 hover:scale-[1.02] transition-all text-xs sm:text-sm">
                            Apply for 2026 Admissions Now →
                        </button>

                        <button @click="isModalOpen = true; modalTitle = 'Download Official PDF Brochure - {{ $college->name }}'; selectedCourse = '{{ $college->name }} Brochure Download'"
                                class="bg-slate-900 hover:bg-slate-800 text-white border border-slate-700 font-bold px-6 py-3.5 rounded-xl transition text-xs sm:text-sm flex items-center gap-2">
                            <span>📄 Download Brochure (PDF)</span>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-4 hidden lg:block">
                    <div class="bg-slate-900/90 border border-slate-700/80 p-6 rounded-3xl backdrop-blur-xl space-y-3">
                        <div class="text-xs font-mono font-bold text-amber-400 uppercase tracking-wider">OFFICIAL ADMISSION DESK</div>
                        <h3 class="text-lg font-black text-white">Direct Counselor Helpline</h3>
                        <p class="text-xs text-slate-300">Speak directly with official admission counselors for cutoff eligibility and seat booking.</p>
                        <a href="tel:+919643802216" class="block w-full bg-amber-500 hover:bg-amber-400 text-slate-950 text-center font-black py-3 rounded-xl text-xs transition">
                            📞 Call Counseling Hotline: +91 9643802216
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Sub-Navigation Anchor Bar -->
    <div class="sticky top-20 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-6 overflow-x-auto py-3 text-xs font-bold text-slate-600 no-scrollbar">
                <a href="#overview" class="hover:text-blue-600 whitespace-nowrap transition">Overview</a>
                <a href="#courses-fees" class="hover:text-blue-600 whitespace-nowrap transition">Courses & Fees</a>
                <a href="#admissions" class="hover:text-blue-600 whitespace-nowrap transition">Admission Process</a>
                <a href="#placements" class="hover:text-blue-600 whitespace-nowrap transition">Placements & Recruiters</a>
                <a href="#facilities" class="hover:text-blue-600 whitespace-nowrap transition">Campus Facilities</a>
                <a href="#faqs" class="hover:text-blue-600 whitespace-nowrap transition">FAQs</a>
                <button @click="isModalOpen = true; modalTitle = 'Apply Now - {{ $college->name }}'" class="ml-auto text-blue-600 hover:underline whitespace-nowrap font-extrabold">
                    Apply Online →
                </button>
            </nav>
        </div>
    </div>

    <!-- Main Content Grid (70/30 Split) -->
    <section class="py-12 sm:py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Column (70%) -->
                <div class="lg:col-span-8 space-y-12">

                    <!-- Module 1: Overview & Key Highlights -->
                    <article id="overview" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">ABOUT THE INSTITUTION</span>
                        </div>
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Overview & Statutory Recognition</h2>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            {{ $details['overview'] }}
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-slate-100">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <span class="text-slate-400 font-mono text-[10px] uppercase block">STATUTORY APPROVALS</span>
                                <span class="text-slate-900 font-bold text-xs mt-1 block">{{ $college->approval_body }}</span>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <span class="text-slate-400 font-mono text-[10px] uppercase block">TOTAL DEGREE COURSES</span>
                                <span class="text-slate-900 font-bold text-xs mt-1 block">{{ $college->total_courses }}+ Programs Offered</span>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <span class="text-slate-400 font-mono text-[10px] uppercase block">PLACEMENT HIGHEST CTC</span>
                                <span class="text-emerald-700 font-bold text-xs mt-1 block">{{ $details['highest_package'] }}</span>
                            </div>
                        </div>
                    </article>

                    <!-- Module 2: Popular Programs & Fee Structure Table -->
                    <article id="courses-fees" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <div>
                            <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">ACADEMIC DEGREES</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-1">Popular Programs & Fee Structure</h2>
                            <p class="text-slate-500 text-xs mt-1">Annual tuition fee estimates and eligibility criteria for major degrees.</p>
                        </div>

                        <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                            <table class="w-full text-left border-collapse text-xs sm:text-sm">
                                <thead>
                                    <tr class="bg-slate-900 text-white font-mono text-[11px] uppercase">
                                        <th class="p-4">Course Name</th>
                                        <th class="p-4">Duration</th>
                                        <th class="p-4">Eligibility Criteria</th>
                                        <th class="p-4">Approx Total Fee</th>
                                        <th class="p-4 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 text-slate-700">
                                    @foreach($details['programs'] as $prog)
                                        <tr class="hover:bg-slate-50 transition">
                                            <td class="p-4 font-bold text-slate-900">
                                                {{ $prog['name'] }}
                                                <span class="block text-[10px] font-mono text-blue-600 uppercase mt-0.5">{{ $prog['stream'] }}</span>
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-xs text-slate-500">{{ $prog['duration'] }}</td>
                                            <td class="p-4 text-xs text-slate-600">{{ $prog['eligibility'] }}</td>
                                            <td class="p-4 whitespace-nowrap font-extrabold text-emerald-700 text-xs">{{ $prog['total_fee'] }}</td>
                                            <td class="p-4 text-center whitespace-nowrap">
                                                <button @click="isModalOpen = true; modalTitle = 'Inquire for {{ $prog['name'] }} - {{ $college->name }}'; selectedCourse = '{{ $prog['name'] }}'"
                                                        class="bg-blue-50 hover:bg-blue-100 text-blue-700 font-extrabold text-xs px-3.5 py-2 rounded-xl transition border border-blue-200">
                                                    Apply
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </article>

                    <!-- Module 3: Admission Process Walkthrough -->
                    <article id="admissions" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <div>
                            <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-widest">ADMISSION PROCEDURE</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-1">4-Step Admission Walkthrough</h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-center">
                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-black text-sm flex items-center justify-center mx-auto">1</div>
                                <h4 class="font-bold text-slate-900 text-xs">1. Online Registration</h4>
                                <p class="text-[11px] text-slate-500">Submit inquiry form & document copies.</p>
                            </div>

                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-black text-sm flex items-center justify-center mx-auto">2</div>
                                <h4 class="font-bold text-slate-900 text-xs">2. Merit / Rank Evaluation</h4>
                                <p class="text-[11px] text-slate-500">Verify JEE/CLAT/CAT or 12th marks cutoff.</p>
                            </div>

                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-black text-sm flex items-center justify-center mx-auto">3</div>
                                <h4 class="font-bold text-slate-900 text-xs">3. Document Verification</h4>
                                <p class="text-[11px] text-slate-500">Original certificate & ID audit.</p>
                            </div>

                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200 space-y-2">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-black text-sm flex items-center justify-center mx-auto">4</div>
                                <h4 class="font-bold text-slate-900 text-xs">4. Seat Confirmation</h4>
                                <p class="text-[11px] text-slate-500">Pay initial seat lock fee & receive offer letter.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Module 4: Placements & Top Recruiters Grid -->
                    <article id="placements" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <div>
                            <span class="text-xs font-mono font-bold text-emerald-600 uppercase tracking-widest">CAREER & PLACEMENTS</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-1">Placements & Corporate Hiring Partners</h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                            <div class="p-5 bg-emerald-50 border border-emerald-100 rounded-2xl">
                                <div class="text-xs text-emerald-800 font-bold uppercase">Highest CTC Package</div>
                                <div class="text-2xl font-black text-emerald-950 mt-1">{{ $details['highest_package'] }}</div>
                            </div>

                            <div class="p-5 bg-blue-50 border border-blue-100 rounded-2xl">
                                <div class="text-xs text-blue-800 font-bold uppercase">Average CTC Package</div>
                                <div class="text-2xl font-black text-blue-950 mt-1">{{ $details['avg_package'] }}</div>
                            </div>

                            <div class="p-5 bg-purple-50 border border-purple-100 rounded-2xl">
                                <div class="text-xs text-purple-800 font-bold uppercase">Overall Placement Rate</div>
                                <div class="text-2xl font-black text-purple-950 mt-1">{{ $details['placement_rate'] }}</div>
                            </div>
                        </div>

                        <!-- Top Corporate Recruiters Badges -->
                        <div class="space-y-3 pt-2">
                            <h4 class="text-xs font-mono font-bold text-slate-400 uppercase tracking-wider">TOP CORPORATE RECRUITERS</h4>
                            <div class="flex flex-wrap items-center gap-3">
                                @foreach($details['recruiters'] as $recruiter)
                                    <span class="bg-slate-100 border border-slate-200 text-slate-800 text-xs font-extrabold px-4 py-2 rounded-xl shadow-xs">
                                        🏢 {{ $recruiter }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </article>

                    <!-- Module 5: Campus Infrastructure & Facilities -->
                    <article id="facilities" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <div>
                            <span class="text-xs font-mono font-bold text-purple-600 uppercase tracking-widest">CAMPUS AMENITIES</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-1">Infrastructure & Campus Facilities</h2>
                        </div>

                        <div class="space-y-3 text-xs sm:text-sm text-slate-700">
                            @foreach($details['facilities'] as $fac)
                                <div class="flex items-start gap-3 p-3.5 bg-slate-50 rounded-2xl border border-slate-200/80">
                                    <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                    <span>{{ $fac }}</span>
                                </div>
                            @endforeach
                        </div>
                    </article>

                    <!-- Module 6: Accordion FAQ -->
                    <article id="faqs" class="scroll-mt-36 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6" x-data="{ activeFaq: null }">
                        <div>
                            <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">FREQUENTLY ASKED QUESTIONS</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight mt-1">Frequently Asked Questions</h2>
                        </div>

                        <div class="space-y-3">
                            @foreach($details['faqs'] as $idx => $faq)
                                <div class="border border-slate-200 rounded-2xl overflow-hidden">
                                    <button @click="activeFaq = activeFaq === {{ $idx }} ? null : {{ $idx }}" 
                                            class="w-full text-left p-4 sm:p-5 bg-slate-50 hover:bg-slate-100 font-bold text-slate-900 text-xs sm:text-sm flex justify-between items-center transition">
                                        <span>{{ $faq['q'] }}</span>
                                        <span class="text-slate-400 font-mono text-base" x-text="activeFaq === {{ $idx }} ? '−' : '+'">+</span>
                                    </button>
                                    <div x-show="activeFaq === {{ $idx }}" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed">
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </article>

                </div>

                <!-- Right Column (30% Sticky Inquiry Form) -->
                <aside class="lg:col-span-4 sticky top-28 space-y-6">
                    
                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-xl space-y-4">
                        <div class="space-y-1">
                            <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-wider">OFFICIAL COUNSELING DESK</span>
                            <h3 class="text-lg font-black text-slate-900 tracking-tight">Inquire for {{ $college->name }}</h3>
                            <p class="text-xs text-slate-500">Get fee waivers, cutoff eligibility, and instant seat confirmation.</p>
                        </div>

                        <!-- Inquiry Form Component -->
                        <x-admission-form title="Inquire for {{ $college->name }}" streamInterest="{{ $college->name }} Admission Inquiry" />
                    </div>

                </aside>

            </div>

        </div>
    </section>

</x-layout.app>
