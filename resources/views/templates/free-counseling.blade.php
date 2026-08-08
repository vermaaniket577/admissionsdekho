<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Banner Header -->
    <section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="Free Counseling Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/80"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-amber-400 uppercase bg-amber-950/80 border border-amber-800/80 rounded-full mb-4 shadow-md">
                100% FREE ADMISSION COUNSELING
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                Free Student Admission Counseling
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed max-w-3xl mx-auto">
                Unlock personalized 1:1 career guidance from senior academic experts. Get college cutoffs, fee comparisons, and scholarship assistance.
            </p>
            <div class="pt-6">
                <button @click="isModalOpen = true; modalTitle = 'Book Free 1:1 Admission Counseling'; selectedCourse = '1:1 Free Student Counseling'"
                        class="bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-extrabold px-8 py-4 rounded-xl shadow-xl shadow-amber-500/25 hover:scale-[1.02] transition-all text-sm sm:text-base">
                    Book Free Counseling Session Now
                </button>
            </div>
        </div>
    </section>

    <!-- Benefits & Workflow Section -->
    <section class="py-16 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Main Body -->
                <div class="lg:col-span-8 space-y-10">

                    <!-- Benefits Overview -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">1. Why Book a Free Counseling Session?</h2>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Choosing the right university program shapes your professional future. Our 30-minute 1:1 advisory sessions provide objective insights on institutional accreditations, entrance test ranks (CLAT, JEE, CAT, NEET, CUET), hostel fees, and merit scholarships.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 bg-amber-50 rounded-2xl border border-amber-100 flex items-start gap-3">
                                <span class="text-xl">🎯</span>
                                <div>
                                    <h4 class="font-bold text-amber-950 text-sm">Unbiased Shortlist</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Custom list of statutory-approved (UGC/AICTE/BCI) colleges matching your score.</p>
                                </div>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-2xl border border-blue-100 flex items-start gap-3">
                                <span class="text-xl">📊</span>
                                <div>
                                    <h4 class="font-bold text-blue-950 text-sm">Cutoff Analysis</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Realistic admission probability assessment based on opening/closing rank cutoffs.</p>
                                </div>
                            </div>
                            <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100 flex items-start gap-3">
                                <span class="text-xl">💰</span>
                                <div>
                                    <h4 class="font-bold text-emerald-950 text-sm">Scholarships & Fees</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Guidance on fee waivers, NSP central schemes, and education loan documentation.</p>
                                </div>
                            </div>
                            <div class="p-4 bg-indigo-50 rounded-2xl border border-indigo-100 flex items-start gap-3">
                                <span class="text-xl">📋</span>
                                <div>
                                    <h4 class="font-bold text-indigo-950 text-sm">Form Assistance</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Step-by-step application support for counseling registrations and seat lock.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Workflow Step-by-Step -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">2. Your 4-Step Counseling Session Roadmap</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 text-center">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 font-extrabold flex items-center justify-center mx-auto mb-2 text-sm">1</div>
                                <h4 class="font-bold text-slate-900 text-xs">Book Slot</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Select call mode</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 font-extrabold flex items-center justify-center mx-auto mb-2 text-sm">2</div>
                                <h4 class="font-bold text-slate-900 text-xs">Profile Audit</h4>
                                <p class="text-[11px] text-slate-500 mt-1">12th & exam scores</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 font-extrabold flex items-center justify-center mx-auto mb-2 text-sm">3</div>
                                <h4 class="font-bold text-slate-900 text-xs">College Match</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Compare fees</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 font-extrabold flex items-center justify-center mx-auto mb-2 text-sm">4</div>
                                <h4 class="font-bold text-slate-900 text-xs">Apply Free</h4>
                                <p class="text-[11px] text-slate-500 mt-1">Secure seat</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar Form -->
                <div class="lg:col-span-4">
                    <x-admission-form title="Book Free Counseling Session" streamInterest="Free Counseling Booking" />
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
