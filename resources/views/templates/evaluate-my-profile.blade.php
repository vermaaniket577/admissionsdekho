<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Banner Header -->
    <section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="Evaluate My Profile Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/80"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-emerald-400 uppercase bg-emerald-950/80 border border-emerald-800/80 rounded-full mb-4 shadow-md">
                SMART ADMISSION PROFILE EVALUATION
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                Evaluate My Profile Free
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed max-w-3xl mx-auto">
                Get an instant, data-driven assessment of your university eligibility, entrance rank cutoffs, and college fit based on your 12th percentage or entrance score.
            </p>
        </div>
    </section>

    <!-- Content & Interactive Form Section -->
    <section class="py-16 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Overview Column -->
                <div class="lg:col-span-6 space-y-8">

                    <!-- How Profile Evaluation Works -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">1. How Profile Evaluation Works</h2>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Our Smart Profile Evaluation tool cross-references your academic background against opening and closing cutoffs of over 120+ statutory-approved (UGC, AICTE, BCI, PCI, INC) partner colleges across India.
                        </p>
                        
                        <div class="space-y-3 pt-2">
                            <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-100 flex items-start gap-3">
                                <span class="w-7 h-7 rounded-xl bg-emerald-600 text-white font-bold flex items-center justify-center shrink-0 text-xs mt-0.5">1</span>
                                <div>
                                    <h4 class="font-bold text-emerald-950 text-sm">Academic Percentage Audit</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Verifying 10+2 aggregate marks against minimum 45%–50% eligibility rules.</p>
                                </div>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-2xl border border-blue-100 flex items-start gap-3">
                                <span class="w-7 h-7 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center shrink-0 text-xs mt-0.5">2</span>
                                <div>
                                    <h4 class="font-bold text-blue-950 text-sm">Entrance Rank Matching</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Comparing CLAT, JEE, CAT, NEET, or CUET ranks with institutional closing ranks.</p>
                                </div>
                            </div>
                            <div class="p-4 bg-indigo-50 rounded-2xl border border-indigo-100 flex items-start gap-3">
                                <span class="w-7 h-7 rounded-xl bg-indigo-600 text-white font-bold flex items-center justify-center shrink-0 text-xs mt-0.5">3</span>
                                <div>
                                    <h4 class="font-bold text-indigo-950 text-sm">Budget & Domicile Alignment</h4>
                                    <p class="text-xs text-slate-600 mt-0.5">Factoring in state quotas, hostal fees, and specified annual budget ranges.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Evaluation Report Benefits -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">2. What You Get in Your Report</h2>
                        <ul class="space-y-3 text-xs sm:text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✔</span>
                                <span><strong>Probability Rating:</strong> Green (High Fit), Yellow (Moderate Target), Blue (Reach/Dream College).</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✔</span>
                                <span><strong>Fee Transparency:</strong> Complete itemized breakdown of tuition fees, hostel expenses, and bus fees.</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✔</span>
                                <span><strong>Scholarship Status:</strong> Direct indication of merit-cum-means fee waivers you qualify for.</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <!-- Right Column Form -->
                <div class="lg:col-span-6">
                    <x-admission-form title="Evaluate My Admission Profile Free" streamInterest="Profile Evaluation Request" />
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
