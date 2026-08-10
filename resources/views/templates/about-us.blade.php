<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Banner Header -->
    <section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="About AdmissionsDekho" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/75"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-amber-400 uppercase bg-amber-950/80 border border-amber-800/80 rounded-full mb-4 shadow-md">
                ABOUT ADMISSIONSDEKHO
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                Empowering Aspirants Across India
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed max-w-3xl mx-auto">
                India's leading independent student counseling portal providing transparent, 100% objective guidance for UG, PG & PhD admissions at top UGC & statutory-approved universities.
            </p>
        </div>
    </section>

    <!-- Cream Aesthetic Metric Stats & Partner Universities Section -->
    <x-partner-stats />

    @if(!empty($page->content))
        <section class="py-12 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">
                    {!! $page->content !!}
                </div>
            </div>
        </section>
    @endif

    <!-- Main Content Section -->
    <section class="py-16 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Story Column -->
                <div class="lg:col-span-7 space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Our Story & Commitment</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Founded with a vision to eliminate misinformation and hidden charges from university admissions, AdmissionsDekho serves as a trusted compass for students navigating higher education after 12th grade and graduation.
                    </p>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Our panel of senior education consultants evaluates candidate academic percentages, entrance ranks (CLAT, JEE, CAT, NEET, CUET), financial budgets, and career preferences to curate personalized college shortlists.
                    </p>

                    <!-- Mission & Vision Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-2">
                            <h3 class="font-extrabold text-blue-600 text-base">🎯 Our Mission</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">To democratize higher education guidance through transparent, unbiased, and 100% free 1:1 advisory sessions.</p>
                        </div>
                        <div class="p-5 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-2">
                            <h3 class="font-extrabold text-indigo-600 text-base">👁️ Our Vision</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">To build India's most trusted, technology-driven admission ecosystem connecting aspirants with statutory-accredited institutes.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="lg:col-span-5">
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900 aspect-[4/3]">
                        <img src="{{ asset('/images/page-assets/contact-hero.png') }}" alt="AdmissionsDekho Team" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="mt-16 sm:mt-20">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Core Values That Guide Us</h2>
                    <p class="text-slate-500 text-sm mt-2">Built on integrity, student-first advocacy, and statutory excellence.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-xl">💡</div>
                        <h4 class="font-extrabold text-slate-900 text-base">100% Transparency</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Clear details regarding tuition fees, hostel expenses, and statutory approvals.</p>
                    </div>
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xl">🎓</div>
                        <h4 class="font-extrabold text-slate-900 text-base">Statutory Quality</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Guiding students exclusively to UGC, AICTE, BCI, PCI, INC & NCTE accredited institutions.</p>
                    </div>
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">🤝</div>
                        <h4 class="font-extrabold text-slate-900 text-base">Student First</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Tailoring college recommendations around student strengths and budget capability.</p>
                    </div>
                    <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xl">🚀</div>
                        <h4 class="font-extrabold text-slate-900 text-base">Lifetime Support</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Providing post-admission mentorship, internship opportunities, and career guidance.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Why Education Consultants Are Key Section -->
    <x-why-it-matters />

</x-layout.app>
