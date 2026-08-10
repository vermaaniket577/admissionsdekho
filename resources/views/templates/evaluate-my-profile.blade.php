<x-layout.app :seo="$seo" :title="$page->title ?? 'Discover Your Admission Odds | Smart Profile Evaluator'">

    <!-- Hero Header with Live Teaser Gauge -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-12 sm:py-16 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-slate-300">Tools</span>
                <span>/</span>
                <span class="text-emerald-400 font-bold">Smart Profile Evaluator</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left Column: Copy & Authority Stats -->
                <div class="lg:col-span-7 space-y-5">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                            ⚡ AI-POWERED PROFILE ASSESSMENT
                        </span>
                        <span class="inline-flex items-center gap-1 text-xs text-amber-400 font-bold bg-slate-900/90 border border-slate-700 px-3 py-1 rounded-full">
                            ★ 50,000+ Profiles Evaluated
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                        Discover Your Admission & College Odds in 2 Minutes
                    </h1>

                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Instant, data-driven assessment cross-referencing your Class 12th or Entrance Score against opening and closing rank cutoffs of 120+ statutory UGC/AICTE/BCI approved universities across India.
                    </p>

                    <!-- Trust Stats Bar -->
                    <div class="grid grid-cols-3 gap-4 pt-3 border-t border-slate-800">
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-emerald-400">98.4%</div>
                            <div class="text-[11px] text-slate-400 font-medium">Cutoff Accuracy</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-emerald-400">120+</div>
                            <div class="text-[11px] text-slate-400 font-medium">Approved Partner Colleges</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-emerald-400">100%</div>
                            <div class="text-[11px] text-slate-400 font-medium">Free & Confidential</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Live Teaser Gauge Card -->
                <div class="lg:col-span-5">
                    <div class="bg-slate-900/90 border border-slate-700/80 rounded-3xl p-6 shadow-2xl backdrop-blur-xl space-y-5">
                        <div class="flex justify-between items-center border-b border-slate-800 pb-3">
                            <span class="text-xs font-mono font-bold text-emerald-400 uppercase tracking-widest">LIVE SCORECARD PREVIEW</span>
                            <span class="bg-emerald-500/20 text-emerald-400 text-[10px] font-bold px-2 py-0.5 rounded border border-emerald-500/30">SAMPLE AUDIT</span>
                        </div>

                        <!-- Gauge Circle Simulation -->
                        <div class="flex items-center gap-5">
                            <div class="relative w-24 h-24 shrink-0 flex items-center justify-center">
                                <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                                    <path class="text-slate-800" stroke-width="3.5" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                                    <path class="text-emerald-400" stroke-dasharray="88, 100" stroke-width="3.5" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                                </svg>
                                <div class="absolute inset-0 flex flex-col items-center justify-center">
                                    <span class="text-xl font-black text-white">88%</span>
                                    <span class="text-[9px] font-mono text-emerald-400">HIGH MATCH</span>
                                </div>
                            </div>

                            <div class="space-y-1.5 text-xs text-slate-300">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                    <span><strong>Academic Eligibility:</strong> 94% High</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                                    <span><strong>Cutoff Probability:</strong> Strong Match</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                    <span><strong>Scholarship Waiver:</strong> Eligible 50%</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-[11px] text-slate-400 italic">
                            Complete the 4-step wizard below to generate your personalized university report!
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Main Section: Interactive Multi-Step Evaluation Wizard -->
    <section class="py-14 sm:py-20 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-3xl border border-slate-200 p-6 sm:p-10 shadow-xl space-y-8" 
                 x-data="{ 
                    step: 1, 
                    degree: '12th Standard', 
                    marks: '75% - 89%', 
                    stream: 'Engineering & CS',
                    exam: 'JEE Main', 
                    scoreBand: 'Top 15% (85-94 Percentile)',
                    budget: '₹1 Lakh - ₹3 Lakhs/Yr', 
                    location: 'Delhi NCR',
                    name: '', email: '', phone: '',
                    submitted: false
                 }">

                <!-- Wizard Progress Bar Header -->
                <div class="space-y-3">
                    <div class="flex justify-between items-center text-xs font-mono font-bold text-slate-500 uppercase tracking-widest">
                        <span x-text="'STEP ' + step + ' OF 4'">STEP 1 OF 4</span>
                        <span class="text-emerald-600 font-extrabold" x-text="step === 1 ? '1. Academic Background' : (step === 2 ? '2. Entrance Exam & Scores' : (step === 3 ? '3. Budget & Preferences' : '4. Unlock Instant Report'))"></span>
                    </div>

                    <!-- Progress Bar Track -->
                    <div class="w-full h-2.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-emerald-500 to-blue-600 transition-all duration-300 rounded-full"
                             :style="'width: ' + (step * 25) + '%'"></div>
                    </div>
                </div>

                <!-- STEP 1: Academic Background -->
                <div x-show="step === 1" x-transition class="space-y-6">
                    <div class="space-y-1">
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">Step 1: Your Academic Background</h2>
                        <p class="text-xs sm:text-sm text-slate-500">Select your current education level and average marks band.</p>
                    </div>

                    <!-- Degree Pill Selector -->
                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Education Level / Degree</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <template x-for="item in ['12th Standard', 'Undergraduate Degree', 'Postgraduate Degree']">
                                <button type="button" @click="degree = item"
                                        :class="degree === item ? 'bg-emerald-600 text-white border-emerald-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-4 rounded-xl border text-xs sm:text-sm transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <!-- Marks Pill Selector -->
                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Class 12th / Graduation Percentage Band</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <template x-for="item in ['90%+', '75% - 89%', '60% - 74%', '45% - 59%']">
                                <button type="button" @click="marks = item"
                                        :class="marks === item ? 'bg-blue-600 text-white border-blue-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-4 rounded-xl border text-xs sm:text-sm transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <!-- Stream Pill Selector -->
                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Major Stream of Interest</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <template x-for="item in ['Engineering & CS', 'Law', 'Management / BBA', 'Pharmacy & Nursing', 'Arts & Science', 'PhD & Research']">
                                <button type="button" @click="stream = item"
                                        :class="stream === item ? 'bg-purple-600 text-white border-purple-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-3.5 rounded-xl border text-xs transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <div class="pt-4 flex justify-end">
                        <button type="button" @click="step = 2" class="bg-slate-900 hover:bg-slate-800 text-white font-extrabold px-6 py-3 rounded-xl text-xs sm:text-sm flex items-center gap-2 shadow-lg">
                            <span>Next: Entrance Scores</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: Entrance Exam & Scores -->
                <div x-show="step === 2" x-transition class="space-y-6" style="display:none;">
                    <div class="space-y-1">
                        <h2 class="text-1xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">Step 2: Entrance Exam & Rank</h2>
                        <p class="text-xs sm:text-sm text-slate-500">Select any national/state entrance test taken or planned.</p>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Entrance Test</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <template x-for="item in ['JEE Main', 'CLAT', 'CAT / MAT', 'NEET', 'CUET', 'Direct Merit']">
                                <button type="button" @click="exam = item"
                                        :class="exam === item ? 'bg-emerald-600 text-white border-emerald-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-4 rounded-xl border text-xs transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Score / Percentile Band</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template x-for="item in ['Top 5% (95+ Percentile)', 'Top 15% (85-94 Percentile)', 'Top 30% (70-84 Percentile)', 'Awaiting Results / Direct Merit']">
                                <button type="button" @click="scoreBand = item"
                                        :class="scoreBand === item ? 'bg-blue-600 text-white border-blue-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-4 rounded-xl border text-xs transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <div class="pt-4 flex justify-between">
                        <button type="button" @click="step = 1" class="bg-slate-100 text-slate-700 font-bold px-5 py-3 rounded-xl text-xs">
                            ← Back
                        </button>
                        <button type="button" @click="step = 3" class="bg-slate-900 hover:bg-slate-800 text-white font-extrabold px-6 py-3 rounded-xl text-xs sm:text-sm flex items-center gap-2 shadow-lg">
                            <span>Next: Preferences & Budget</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 3: Budget & Preferences -->
                <div x-show="step === 3" x-transition class="space-y-6" style="display:none;">
                    <div class="space-y-1">
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">Step 3: Location & Annual Budget</h2>
                        <p class="text-xs sm:text-sm text-slate-500">Filter colleges fitting your geographic preference and budget.</p>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Annual Tuition Budget Range</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template x-for="item in ['Under ₹1 Lakh/Yr', '₹1 Lakh - ₹3 Lakhs/Yr', '₹3 Lakhs - ₹6 Lakhs/Yr', 'Above ₹6 Lakhs/Yr']">
                                <button type="button" @click="budget = item"
                                        :class="budget === item ? 'bg-amber-600 text-white border-amber-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-4 rounded-xl border text-xs transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">Preferred Location Region</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                            <template x-for="item in ['Delhi NCR', 'North India', 'South India', 'Pan-India / Any']">
                                <button type="button" @click="location = item"
                                        :class="location === item ? 'bg-emerald-600 text-white border-emerald-600 font-extrabold shadow-md' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'"
                                        class="py-3 px-3 rounded-xl border text-xs transition text-center" x-text="item"></button>
                            </template>
                        </div>
                    </div>

                    <div class="pt-4 flex justify-between">
                        <button type="button" @click="step = 2" class="bg-slate-100 text-slate-700 font-bold px-5 py-3 rounded-xl text-xs">
                            ← Back
                        </button>
                        <button type="button" @click="step = 4" class="bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold px-6 py-3 rounded-xl text-xs sm:text-sm flex items-center gap-2 shadow-lg">
                            <span>Unlock Instant Report</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 4: Lead Capture & Instant Report -->
                <div x-show="step === 4" x-transition class="space-y-6" style="display:none;">
                    <div x-show="!submitted" class="space-y-6">
                        <div class="space-y-1">
                            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight">Step 4: Unlock Your Full Profile Audit</h2>
                            <p class="text-xs sm:text-sm text-slate-500">Enter your contact details to receive your itemized college match PDF.</p>
                        </div>

                        <!-- Form Submit -->
                        <form action="{{ route('lead.submit') }}" method="POST" @submit="submitted = true" class="space-y-4">
                            @csrf
                            <input type="hidden" name="stream_interest" x-model="stream">
                            <input type="hidden" name="course_interest" x-model="degree">
                            <input type="hidden" name="source_page" value="Smart Profile Evaluator Tool">

                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Full Name *</label>
                                <input type="text" name="name" required placeholder="Enter full name" x-model="name"
                                       class="w-full bg-slate-50 border border-slate-300 focus:border-emerald-500 text-slate-900 rounded-xl px-4 py-3 text-xs outline-none transition">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Email Address *</label>
                                    <input type="email" name="email" required placeholder="student@example.com" x-model="email"
                                           class="w-full bg-slate-50 border border-slate-300 focus:border-emerald-500 text-slate-900 rounded-xl px-4 py-3 text-xs outline-none transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase text-slate-700 mb-1">Mobile Phone Number *</label>
                                    <input type="tel" name="phone" required placeholder="+91 9876543210" x-model="phone"
                                           class="w-full bg-slate-50 border border-slate-300 focus:border-emerald-500 text-slate-900 rounded-xl px-4 py-3 text-xs outline-none transition">
                                </div>
                            </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-black py-4 px-6 rounded-xl shadow-lg shadow-emerald-600/30 text-sm flex items-center justify-center gap-2 transition-all">
                                <span>Calculate Admission Score & Generate Report →</span>
                            </button>
                        </form>
                    </div>

                    <!-- Submitted Success State -->
                    <div x-show="submitted" class="text-center py-8 space-y-4" style="display:none;">
                        <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 text-3xl flex items-center justify-center mx-auto font-black">
                            ✓
                        </div>
                        <h3 class="text-2xl font-black text-slate-900">Profile Audit Report Generated!</h3>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-md mx-auto leading-relaxed">
                            Thank you, <strong class="text-slate-900" x-text="name"></strong>! Your profile score report for <strong class="text-emerald-700" x-text="stream"></strong> has been calculated. A senior advisor will contact you shortly with your custom PDF breakdown.
                        </p>
                    </div>
                </div>

            </div>

            <!-- What Your Profile Report Includes (4 Visual Highlight Cards) -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8">
                <div class="text-center max-w-2xl mx-auto space-y-2">
                    <span class="text-xs font-mono font-bold text-emerald-600 uppercase tracking-widest">REPORT CONTENTS</span>
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight">What Your Evaluation Report Includes</h2>
                    <p class="text-slate-600 text-xs sm:text-sm">Itemized score breakdown sent directly to your phone and email.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-2">
                        <div class="text-2xl">📊</div>
                        <h4 class="font-bold text-slate-900 text-sm">Profile Score (out of 100)</h4>
                        <p class="text-xs text-slate-600">Overall academic strength rating compiled from 12th & entrance percentiles.</p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-2">
                        <div class="text-2xl">🏛️</div>
                        <h4 class="font-bold text-slate-900 text-sm">University Match Tiers</h4>
                        <p class="text-xs text-slate-600">Categorized list into Safety Colleges, Target Cutoffs, and Dream Institutions.</p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-2">
                        <div class="text-2xl">💰</div>
                        <h4 class="font-bold text-slate-900 text-sm">Scholarship Tier</h4>
                        <p class="text-xs text-slate-600">Direct indication of institutional tuition waivers & NSP central government grants.</p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-2">
                        <div class="text-2xl">📋</div>
                        <h4 class="font-bold text-slate-900 text-sm">Recommended Action Plan</h4>
                        <p class="text-xs text-slate-600">Step-by-step guidance on document preparation and counseling seat lock.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8" x-data="{ activeFaq: null }">
                <div>
                    <span class="text-xs font-mono font-bold text-purple-600 uppercase tracking-widest">EVALUATION FAQ</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight mt-1">Frequently Asked Questions</h2>
                </div>

                <div class="space-y-4">
                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 1 ? null : 1" 
                                class="w-full text-left p-5 bg-slate-50 font-bold text-slate-900 text-sm flex justify-between items-center">
                            <span>1. Is the profile evaluation tool 100% free?</span>
                            <span class="text-slate-400 font-mono" x-text="activeFaq === 1 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 1" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs text-slate-700">
                            Yes! The Smart Profile Evaluator tool is 100% free with zero hidden consultation fees.
                        </div>
                    </div>

                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 2 ? null : 2" 
                                class="w-full text-left p-5 bg-slate-50 font-bold text-slate-900 text-sm flex justify-between items-center">
                            <span>2. How accurate are the college cutoff match scores?</span>
                            <span class="text-slate-400 font-mono" x-text="activeFaq === 2 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 2" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs text-slate-700">
                            Our algorithms cross-reference real opening and closing rank data from previous academic counseling cycles, achieving a 98.4% match accuracy rate.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
