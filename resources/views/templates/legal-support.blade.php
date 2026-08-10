<x-layout.app :seo="$seo" :title="$page->title ?? 'Legal Support & Compliance Hub | AdmissionsDekho'">

    <!-- Hero Header with Search Bar & Trust Badges -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-14 sm:py-20 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-slate-300 font-semibold">Legal Hub</span>
                <span>/</span>
                <span class="text-amber-400 font-bold">Legal Support & Compliance</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 text-blue-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                            ⚖️ LEGAL & COMPLIANCE HUB
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                        Legal Support & Statutory Compliance
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                        Comprehensive legal documentation, statutory audits, DMCA copyright management, and regulatory compliance assistance for students, parents, and partner institutions.
                    </p>

                    <!-- Trust Badges Bar -->
                    <div class="pt-4 flex flex-wrap items-center gap-3">
                        <span class="bg-slate-900/90 border border-slate-700/80 text-slate-300 text-xs font-semibold px-3 py-1.5 rounded-xl flex items-center gap-1.5">
                            <span class="text-emerald-400 font-bold">✓</span> GDPR Compliant
                        </span>
                        <span class="bg-slate-900/90 border border-slate-700/80 text-slate-300 text-xs font-semibold px-3 py-1.5 rounded-xl flex items-center gap-1.5">
                            <span class="text-emerald-400 font-bold">✓</span> DPDP Act 2023 Aligned
                        </span>
                        <span class="bg-slate-900/90 border border-slate-700/80 text-slate-300 text-xs font-semibold px-3 py-1.5 rounded-xl flex items-center gap-1.5">
                            <span class="text-emerald-400 font-bold">✓</span> UGC & Statutory Audited
                        </span>
                        <span class="bg-slate-900/90 border border-slate-700/80 text-slate-300 text-xs font-semibold px-3 py-1.5 rounded-xl flex items-center gap-1.5">
                            <span class="text-emerald-400 font-bold">✓</span> SSL 256-Bit Encrypted
                        </span>
                    </div>
                </div>

                <!-- Prominent Search Bar Placeholder -->
                <div class="lg:col-span-4" x-data="{ searchQuery: '' }" @input="$dispatch('filter-legal-docs', searchQuery)">
                    <div class="bg-slate-900/90 border border-slate-700/80 rounded-3xl p-5 shadow-2xl backdrop-blur-xl space-y-3">
                        <label class="block text-xs font-extrabold text-amber-400 uppercase tracking-wider">Search Legal Documents & FAQs</label>
                        <div class="relative">
                            <input type="text" x-model="searchQuery" placeholder="Search terms, privacy, DMCA, refunds..." 
                                   class="w-full bg-slate-950 border border-slate-700 focus:border-amber-400 text-white rounded-xl pl-10 pr-4 py-3 text-xs outline-none transition">
                            <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <p class="text-[11px] text-slate-400">Filter legal directory and FAQs instantly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-14 sm:py-20 bg-slate-50 min-h-screen" x-data="{ filterTerm: '' }" @filter-legal-docs.window="filterTerm = $event.detail.toLowerCase()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <!-- Module 1: Legal Directory (3x2 Card Links) -->
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">DOCUMENT HUB</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">Core Legal Documents & Policies</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Card 1: Privacy Policy -->
                    <a href="{{ url('/privacy-policy') }}" 
                       x-show="!filterTerm || 'privacy data gdpr ccpa dpdp security'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 text-blue-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                🛡️
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">Privacy Policy</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Detailed rules on student data collection, non-sale guarantees, encryption standards, and GDPR/DPDP rights.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>Read Privacy Policy</span>
                            <span>→</span>
                        </div>
                    </a>

                    <!-- Card 2: Terms of Service -->
                    <a href="{{ url('/terms-conditions/') }}" 
                       x-show="!filterTerm || 'terms service conditions agreement use'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-purple-50 border border-purple-100 text-purple-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                📜
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">Terms of Service</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Platform terms, user agreements, advisory scope boundaries, and student service commitments.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-purple-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>Read Terms of Service</span>
                            <span>→</span>
                        </div>
                    </a>

                    <!-- Card 3: Cookie Policy -->
                    <a href="{{ url('/privacy-policy#sec-4') }}" 
                       x-show="!filterTerm || 'cookie cookies tracking analytics'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-100 text-amber-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                🍪
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">Cookie Policy</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Explanation of essential session cookies, analytical trackers, and user opt-out options.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-amber-700 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>Read Cookie Policy</span>
                            <span>→</span>
                        </div>
                    </a>

                    <!-- Card 4: Acceptable Use Policy -->
                    <a href="{{ url('/terms-conditions/') }}" 
                       x-show="!filterTerm || 'acceptable use conduct standards content'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                ✅
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">Acceptable Use Policy</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                User conduct guidelines, forbidden activities, anti-spam rules, and community security rules.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-emerald-700 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>View Code of Conduct</span>
                            <span>→</span>
                        </div>
                    </a>

                    <!-- Card 5: Statutory Audits & SLAs -->
                    <a href="#statutory" 
                       x-show="!filterTerm || 'statutory audit ugc bci aicte accreditation sla'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-sky-50 border border-sky-100 text-sky-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                🏛️
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">Statutory Audits & SLAs</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Institutional accreditation checks for UGC, AICTE, BCI, INC, and PCI statutory approvals.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-sky-700 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>View Statutory Guidelines</span>
                            <span>→</span>
                        </div>
                    </a>

                    <!-- Card 6: DMCA & Copyright -->
                    <a href="#dmca" 
                       x-show="!filterTerm || 'dmca copyright intellectual property takedown'.includes(filterTerm)"
                       class="group bg-white p-7 rounded-3xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="w-12 h-12 rounded-2xl bg-rose-50 border border-rose-100 text-rose-600 font-bold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                ⚖️
                            </div>
                            <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">DMCA & Copyright</h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Guidelines for reporting copyright infringement, trademark usage, and submitting IP takedown notices.
                            </p>
                        </div>
                        <div class="pt-2 text-xs font-extrabold text-rose-700 flex items-center gap-1 group-hover:gap-2 transition-all">
                            <span>Submit DMCA Takedown</span>
                            <span>→</span>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Module 2: Expandable FAQ Accordion -->
            <div class="bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-8" x-data="{ activeFaq: null }">
                <div>
                    <span class="text-xs font-mono font-bold text-purple-600 uppercase tracking-widest">KNOWLEDGE BASE</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight mt-1">Frequently Asked Legal Questions</h2>
                    <p class="text-slate-600 text-xs sm:text-sm mt-1">Quick answers to common privacy, compliance, and data handling inquiries.</p>
                </div>

                <div class="space-y-4">

                    <!-- FAQ Item 1 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden" x-show="!filterTerm || 'protect data security profile'.includes(filterTerm)">
                        <button @click="activeFaq = activeFaq === 1 ? null : 1" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>1. How does AdmissionsDekho safeguard student academic profiles?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 1 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 1" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                            <p>All student records submitted through lead forms or profile evaluators are protected using 256-bit SSL/TLS encryption in transit and isolated database storage. We adhere strictly to DPDP Act 2023 (India) and GDPR principles, ensuring data is used only for legitimate academic advisory purposes.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden" x-show="!filterTerm || 'delete account export data deletion'.includes(filterTerm)">
                        <button @click="activeFaq = activeFaq === 2 ? null : 2" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>2. How do I request complete deletion or export of my lead data?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 2 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 2" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                            <p>You have full ownership of your personal data. To request a copy of your records or demand permanent deletion of your profile, email our Data Protection Desk at <a href="mailto:info@admissionsdekho.com" class="text-blue-600 font-bold underline">info@admissionsdekho.com</a> with the subject line <em>"Data Erasure Request"</em>. Requests are processed within 48 business hours.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden" id="dmca" x-show="!filterTerm || 'dmca copyright takedown intellectual property'.includes(filterTerm)">
                        <button @click="activeFaq = activeFaq === 3 ? null : 3" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>3. What is the process for submitting a DMCA or copyright takedown notice?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 3 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 3" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                            <p>If you believe content hosted on AdmissionsDekho infringes your registered copyright, please send an official written notice containing: (a) Identification of the copyrighted work, (b) Exact URL link of the allegedly infringing material, (c) Your contact info, and (d) A statement of good faith belief. Send notices to <a href="mailto:legal@admissionsdekho.com" class="text-blue-600 font-bold underline">legal@admissionsdekho.com</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden" id="statutory" x-show="!filterTerm || 'degree validity ugc bci statutory approval'.includes(filterTerm)">
                        <button @click="activeFaq = activeFaq === 4 ? null : 4" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>4. Are university degree verifications statutory & UGC compliant?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 4 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 4" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                            <p>Yes. AdmissionsDekho verifies institutional credentials against official gazette notifications from UGC (University Grants Commission), AICTE (Technical), BCI (Law), PCI (Pharmacy), and INC (Nursing). We do not list or recommend unapproved or fake universities.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border border-slate-200 rounded-2xl overflow-hidden" x-show="!filterTerm || 'law enforcement subpoena regulatory police court'.includes(filterTerm)">
                        <button @click="activeFaq = activeFaq === 5 ? null : 5" 
                                class="w-full text-left p-5 bg-slate-50 hover:bg-slate-100/80 font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center transition">
                            <span>5. How are law enforcement and court subpoenas handled?</span>
                            <span class="text-slate-400 font-mono text-lg" x-text="activeFaq === 5 ? '−' : '+'">+</span>
                        </button>
                        <div x-show="activeFaq === 5" x-collapse class="p-5 bg-white border-t border-slate-200 text-xs sm:text-sm text-slate-700 leading-relaxed space-y-2">
                            <p>Law enforcement officials or statutory judicial authorities seeking information must issue valid legal process (such as a official subpoena or court order under the Information Technology Act). Submissions must be addressed to our legal department via <a href="mailto:legal@admissionsdekho.com" class="text-blue-600 font-bold underline">legal@admissionsdekho.com</a>.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Module 3: Requests & Law Enforcement Contact -->
            <div class="bg-gradient-to-br from-slate-950 to-slate-900 text-white rounded-3xl p-8 sm:p-12 shadow-xl space-y-6">
                <div class="space-y-2">
                    <span class="bg-amber-500/20 text-amber-400 border border-amber-500/30 text-[10px] font-extrabold uppercase px-3 py-1 rounded-full">
                        🏛️ REGULATORY & POLICE DESK
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-black text-white tracking-tight">Requests from Law Enforcement & Statutory Bodies</h2>
                </div>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed max-w-3xl">
                    AdmissionsDekho cooperates fully with law enforcement, judicial courts, and statutory education authorities (UGC, BCI, AICTE, State Education Departments). Subpoenas or statutory notices must include:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                    <div class="p-4 bg-slate-900 border border-slate-800 rounded-2xl">
                        <strong class="text-amber-400 block mb-1">1. Official Authorization</strong>
                        <span class="text-slate-300">Signed court order, warrant, or official law enforcement letterhead.</span>
                    </div>
                    <div class="p-4 bg-slate-900 border border-slate-800 rounded-2xl">
                        <strong class="text-amber-400 block mb-1">2. Target Identifiers</strong>
                        <span class="text-slate-300">Specific user email, phone number, or URL reference path.</span>
                    </div>
                    <div class="p-4 bg-slate-900 border border-slate-800 rounded-2xl">
                        <strong class="text-amber-400 block mb-1">3. Direct Contact</strong>
                        <span class="text-slate-300">Official government domain email address and badge ID number.</span>
                    </div>
                </div>
            </div>

            <!-- Module 4: Legal Contact Form & Support Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Contact Card -->
                <div class="lg:col-span-5 bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                    <div>
                        <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">DIRECT CONTACT</span>
                        <h3 class="text-xl font-extrabold text-slate-900 tracking-tight mt-1">Legal Support Desk</h3>
                    </div>
                    
                    <div class="space-y-4 text-xs sm:text-sm text-slate-700">
                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <span class="text-slate-400 font-mono text-[11px] block">PRIMARY LEGAL EMAIL</span>
                            <a href="mailto:legal@admissionsdekho.com" class="text-blue-600 font-extrabold text-base hover:underline">legal@admissionsdekho.com</a>
                        </div>

                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <span class="text-slate-400 font-mono text-[11px] block">GENERAL INQUIRIES & DATA PRIVACY</span>
                            <a href="mailto:info@admissionsdekho.com" class="text-blue-600 font-extrabold text-base hover:underline">info@admissionsdekho.com</a>
                        </div>

                        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200">
                            <span class="text-slate-400 font-mono text-[11px] block">24/7 HELPLINE</span>
                            <a href="tel:+919643802216" class="text-slate-900 font-extrabold text-base hover:underline">+91 9643802216</a>
                        </div>
                    </div>
                </div>

                <!-- Structured Legal Intake Form -->
                <div class="lg:col-span-7">
                    <x-admission-form title="Submit Legal or Compliance Inquiry" streamInterest="Legal & Compliance Query" />
                </div>

            </div>

        </div>
    </section>

</x-layout.app>
