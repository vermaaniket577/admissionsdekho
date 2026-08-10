<x-layout.app :seo="$seo" :title="$page->title ?? 'Book Free 1-on-1 Admission Counseling | AdmissionsDekho'">

    <!-- Hero Section (Split 2-Column Layout) -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-12 sm:py-20 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-slate-300">Services</span>
                <span>/</span>
                <span class="text-amber-400 font-bold">1:1 Free Counseling</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left Column: Copy & Social Proof Badges -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 bg-amber-500/10 border border-amber-500/30 text-amber-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                            🎓 100% ZERO-COST COUNSELING
                        </span>
                        <span class="inline-flex items-center gap-1 text-xs text-amber-400 font-bold bg-slate-900/90 border border-slate-700 px-3 py-1 rounded-full">
                            ★ 4.9/5.0 (10,000+ Sessions Conducted)
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                        Book Your Free 1-on-1 Admission Counseling Session
                    </h1>

                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Get personalized 30-minute 1:1 guidance from senior academic experts. Compare UGC & statutory-approved colleges, Opening/Closing rank cutoffs, annual fee breakdowns, and 100% tuition scholarship eligibility.
                    </p>

                    <!-- Trust Stats Bar -->
                    <div class="grid grid-cols-3 gap-4 pt-2 border-t border-slate-800">
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-amber-400">10,000+</div>
                            <div class="text-[11px] text-slate-400 font-medium">Students Guided</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-amber-400">120+</div>
                            <div class="text-[11px] text-slate-400 font-medium">UGC Partner Colleges</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-black text-amber-400">98.4%</div>
                            <div class="text-[11px] text-slate-400 font-medium">Match Accuracy</div>
                        </div>
                    </div>

                    <!-- Counselor Avatars Showcase -->
                    <div class="flex items-center gap-3 pt-2">
                        <div class="flex -space-x-2">
                            <img src="{{ asset('/images/3d_counselor_illustrator.png') }}" class="w-10 h-10 rounded-full border-2 border-slate-900 object-cover">
                            <img src="{{ asset('/images/3d_student_illustrator.png') }}" class="w-10 h-10 rounded-full border-2 border-slate-900 object-cover">
                            <div class="w-10 h-10 rounded-full border-2 border-slate-900 bg-blue-600 text-white font-black text-xs flex items-center justify-center">
                                +12
                            </div>
                        </div>
                        <p class="text-xs text-slate-300">
                            <strong>Certified Senior Advisors</strong> on-call today for your stream.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Glassmorphism Interactive Booking Form -->
                <div class="lg:col-span-5">
                    <div class="bg-white/95 backdrop-blur-xl border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-2xl space-y-4">
                        <div class="text-center space-y-1">
                            <span class="text-xs font-mono font-bold uppercase tracking-wider text-amber-600">RESERVE YOUR TIME SLOT</span>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight">Schedule Free 1:1 Call</h3>
                            <p class="text-xs text-slate-500">Fill in your profile details to lock a 30-min slot.</p>
                        </div>

                        <!-- Form Component -->
                        <x-admission-form title="Book Free 1:1 Session" streamInterest="Free 1:1 Counseling Booking" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Body Content Sections -->
    <section class="py-14 sm:py-20 bg-slate-50 min-h-screen space-y-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <!-- Section 1: What You'll Get (4 Concrete Takeaways) -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8">
                <div class="text-center max-w-3xl mx-auto space-y-2">
                    <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-widest">SESSION VALUE BREAKDOWN</span>
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight">What You Get in Your Free 30-Min Session</h2>
                    <p class="text-slate-600 text-xs sm:text-sm">Actionable takeaways designed to eliminate confusion and give you a clear admission path.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-3 hover:border-amber-400 hover:bg-white transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 font-black text-2xl flex items-center justify-center">🎯</div>
                        <h3 class="font-extrabold text-slate-900 text-base">1. Custom College Match</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            A curated list of statutory UGC/AICTE/BCI approved colleges matching your 12th marks or entrance percentiles.
                        </p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-3 hover:border-amber-400 hover:bg-white transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-800 font-black text-2xl flex items-center justify-center">📊</div>
                        <h3 class="font-extrabold text-slate-900 text-base">2. Cutoff Analysis</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Opening and closing rank cutoff audits for JEE, CLAT, CAT, NEET, and CUET merit lists.
                        </p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-3 hover:border-amber-400 hover:bg-white transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 font-black text-2xl flex items-center justify-center">💰</div>
                        <h3 class="font-extrabold text-slate-900 text-base">3. Fee & Scholarship Match</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Complete fee breakdown comparisons and 100% merit scholarship assistance & NSP central schemes.
                        </p>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/90 space-y-3 hover:border-amber-400 hover:bg-white transition-all shadow-sm">
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-800 font-black text-2xl flex items-center justify-center">📋</div>
                        <h3 class="font-extrabold text-slate-900 text-base">4. Step-by-Step Roadmap</h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Personalized timeline for application submission, document audits, and counseling seat lock.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 2: How It Works (3-Step Timeline Process) -->
            <div class="space-y-8">
                <div class="text-center max-w-2xl mx-auto space-y-2">
                    <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">3-STEP WORKFLOW</span>
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight">How Your Free Counseling Works</h2>
                    <p class="text-slate-600 text-xs sm:text-sm">3 easy steps from booking to your personalized roadmap.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                    
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 text-center space-y-4 shadow-sm relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 font-black text-xl flex items-center justify-center mx-auto shadow-md">1</div>
                        <h3 class="text-lg font-extrabold text-slate-900">Step 1: Reserve Your Slot</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Fill in your name, target course, and preferred time slot in our quick booking form above.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-slate-200 text-center space-y-4 shadow-sm relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 font-black text-xl flex items-center justify-center mx-auto shadow-md">2</div>
                        <h3 class="text-lg font-extrabold text-slate-900">Step 2: 1:1 Advisory Session</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Connect via phone or WhatsApp call with a certified senior academic advisor to review your scores.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-slate-200 text-center space-y-4 shadow-sm relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-amber-500 text-slate-950 font-black text-xl flex items-center justify-center mx-auto shadow-md">3</div>
                        <h3 class="text-lg font-extrabold text-slate-900">Step 3: Get Your Roadmap</h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            Receive an unbiased college comparison PDF, fee breakdown, and application checklist.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Section 3: Counselor Profiles / Authority Showcase -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 border-b border-slate-200 pb-6">
                    <div>
                        <span class="text-xs font-mono font-bold text-purple-600 uppercase tracking-widest">EXPERT FACULTY</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight mt-1">Meet Our Senior Advisory Panel</h2>
                        <p class="text-slate-600 text-xs sm:text-sm mt-1">Certified educationists with decades of combined university counseling experience.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('/images/3d_counselor_illustrator.png') }}" class="w-14 h-14 rounded-2xl object-cover border border-slate-300">
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-base">Dr. Rajesh Vardhan</h4>
                                <p class="text-xs text-amber-700 font-semibold">Ex-IIT Faculty & Admission Auditor</p>
                                <p class="text-[11px] text-slate-500">14+ Years Exp • Engineering & Tech</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('/images/3d_student_illustrator.png') }}" class="w-14 h-14 rounded-2xl object-cover border border-slate-300">
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-base">Prof. Sunita Sharma</h4>
                                <p class="text-xs text-purple-700 font-semibold">Senior Career Advisory Head</p>
                                <p class="text-[11px] text-slate-500">12+ Years Exp • Law & Humanities</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-14 h-14 rounded-2xl bg-blue-600 text-white font-extrabold text-lg flex items-center justify-center shrink-0">
                                AS
                            </div>
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-base">Amitav Sen</h4>
                                <p class="text-xs text-blue-700 font-semibold">Management & B-School Lead</p>
                                <p class="text-[11px] text-slate-500">10+ Years Exp • MBA & BBA Selection</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Accordion FAQ -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8" x-data="{ activeFaq: null }">
                <div>
                    <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">COMMON CONCERNS</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight mt-1">Frequently Asked Questions</h2>
                    <p class="text-slate-600 text-xs sm:text-sm mt-1">Everything you need to know about our free 1-on-1 counseling session.</p>
                </div>

                <div class="space-y-4">

                    <!-- FAQ 1 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 1 ? null : 1" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>1. Is the 1:1 counseling session really 100% free with no hidden charges?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 1 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 1" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Yes, 100% free! There are zero hidden consultation charges, registration fees, or service costs. AdmissionsDekho provides free educational guidance to assist students in finding statutory UGC/AICTE-approved colleges.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 2 ? null : 2" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>2. How long is the 1:1 advisory session?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 2 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 2" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Each session lasts approximately 20 to 30 minutes, allowing sufficient time to evaluate your academic background, discuss target colleges, compare fee structures, and answer all questions.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 3 ? null : 3" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>3. What details or documents should I keep ready before the call?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 3 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 3" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Having your Class 10th & 12th marks/percentage, entrance exam scorecard (if applicable), preferred stream, and target annual fee budget ready will help our advisor provide an exact college match.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden">
                        <button @click="activeFaq = activeFaq === 4 ? null : 4" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>4. Will I get assistance for scholarships & education loans?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 4 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 4" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Absolutely! Our counselors guide you through institutional tuition fee waivers, NSP central government scholarship criteria, and nationalized bank education loan documentation.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Section 5: Final CTA Banner -->
            <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-amber-950 text-white rounded-3xl p-8 sm:p-14 text-center space-y-6 shadow-2xl relative overflow-hidden">
                <div class="max-w-2xl mx-auto space-y-3 relative z-10">
                    <span class="bg-amber-500/20 text-amber-400 border border-amber-500/30 text-xs font-extrabold uppercase px-3.5 py-1.5 rounded-full">
                        LIMITED WEEKLY COUNSELOR SLOTS
                    </span>
                    <h2 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        Lock In Your Free 1:1 Session Today
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Don't leave your university admission to chance. Talk to a certified senior advisor and get a clear roadmap for 2026 admissions.
                    </p>
                    <div class="pt-4">
                        <a href="tel:+919643802216" class="inline-block bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-extrabold px-8 py-4 rounded-xl shadow-xl shadow-amber-500/25 hover:scale-[1.02] transition-all text-sm sm:text-base">
                            📞 Call Senior Advisor Directly: +91 9643802216
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
