<x-layout.app :seo="$seo" :title="$page->title ?? 'Terms & Conditions | AdmissionsDekho'">

    <!-- Hero Header with Breadcrumbs, Search & Print Action -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 text-white py-12 sm:py-16 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-slate-300">Legal Documentation</span>
                <span>/</span>
                <span class="text-amber-400 font-bold">Terms & Conditions</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                        📜 PLATFORM TERMS OF SERVICE
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        Terms & Conditions Agreement
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                        Binding legal agreement governing user access, educational advisory services, intellectual property, and platform responsibilities on AdmissionsDekho.com.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400 pt-2 font-mono">
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> Effective Date: January 1, 2026</span>
                        <span>•</span>
                        <button onclick="window.print()" class="text-amber-400 hover:underline flex items-center gap-1 font-bold font-sans">
                            🖨️ Print / Save Document
                        </button>
                    </div>
                </div>

                <!-- Topic Search Input -->
                <div class="lg:col-span-4" x-data="{ query: '' }" @input="$dispatch('filter-terms', query)">
                    <div class="bg-slate-900/90 border border-slate-700/80 rounded-2xl p-4 shadow-2xl backdrop-blur-xl space-y-2">
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider">Search Terms & Clauses</label>
                        <div class="relative">
                            <input type="text" x-model="query" placeholder="Search refunds, IP, disclaimer..." 
                                   class="w-full bg-slate-950 border border-slate-700 focus:border-amber-400 text-white rounded-xl pl-10 pr-4 py-2.5 text-xs outline-none transition">
                            <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <p class="text-[11px] text-slate-400">Filter legal clauses dynamically</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Container with Sticky Sidebar -->
    <section class="py-12 sm:py-16 bg-slate-50 min-h-screen" x-data="{ activeSection: 'tc-1', filterQuery: '' }" @filter-terms.window="filterQuery = $event.detail.toLowerCase()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Summary at a Glance (TL;DR Card) -->
            <div class="mb-12 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-xl">⚡</span>
                    <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">TL;DR / Quick Terms Summary</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-4 bg-indigo-50/80 border border-indigo-200 rounded-2xl space-y-1">
                        <div class="text-indigo-800 font-extrabold text-xs uppercase">🎓 Advisory Status</div>
                        <p class="text-xs text-slate-700">We evaluate profiles & guide cutoffs; final admission rests with statutory universities.</p>
                    </div>
                    <div class="p-4 bg-emerald-50/80 border border-emerald-200 rounded-2xl space-y-1">
                        <div class="text-emerald-800 font-extrabold text-xs uppercase">🔒 Truthful Submissions</div>
                        <p class="text-xs text-slate-700">Users must provide accurate academic scores, entrance percentiles & contact info.</p>
                    </div>
                    <div class="p-4 bg-purple-50/80 border border-purple-200 rounded-2xl space-y-1">
                        <div class="text-purple-800 font-extrabold text-xs uppercase">🛡️ IP Rights Protected</div>
                        <p class="text-xs text-slate-700">Platform software, layouts, course guides, and brand assets are copyrighted.</p>
                    </div>
                    <div class="p-4 bg-amber-50/80 border border-amber-200 rounded-2xl space-y-1">
                        <div class="text-amber-900 font-extrabold text-xs uppercase">🏛️ New Delhi Jurisdiction</div>
                        <p class="text-xs text-slate-700">Governed by the laws of India with exclusive jurisdiction in New Delhi courts.</p>
                    </div>
                </div>
            </div>

            <!-- Layout Grid: Sticky Sidebar + Main Document Body -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Sticky Sidebar Navigation (Desktop) -->
                <aside class="lg:col-span-4 sticky top-28 hidden lg:block space-y-4">
                    <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
                        <h3 class="text-xs font-extrabold uppercase tracking-widest text-slate-400 mb-4 font-mono">TABLE OF CONTENTS</h3>
                        <nav class="space-y-1 text-xs font-semibold text-slate-600">
                            <a href="#tc-1" @click="activeSection = 'tc-1'" 
                               :class="activeSection === 'tc-1' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">1. Acceptance of Terms</a>
                            
                            <a href="#tc-2" @click="activeSection = 'tc-2'" 
                               :class="activeSection === 'tc-2' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">2. Educational Advisory Disclaimer</a>
                            
                            <a href="#tc-3" @click="activeSection = 'tc-3'" 
                               :class="activeSection === 'tc-3' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">3. User Responsibilities</a>
                            
                            <a href="#tc-4" @click="activeSection = 'tc-4'" 
                               :class="activeSection === 'tc-4' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">4. Fee Guidance & Refunds</a>
                            
                            <a href="#tc-5" @click="activeSection = 'tc-5'" 
                               :class="activeSection === 'tc-5' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">5. Intellectual Property</a>
                            
                            <a href="#tc-6" @click="activeSection = 'tc-6'" 
                               :class="activeSection === 'tc-6' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">6. Termination & Suspension</a>
                            
                            <a href="#tc-7" @click="activeSection = 'tc-7'" 
                               :class="activeSection === 'tc-7' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">7. Limitation of Liability</a>
                            
                            <a href="#tc-8" @click="activeSection = 'tc-8'" 
                               :class="activeSection === 'tc-8' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">8. Governing Law & Jurisdiction</a>
                            
                            <a href="#tc-9" @click="activeSection = 'tc-9'" 
                               :class="activeSection === 'tc-9' ? 'bg-indigo-50 text-indigo-700 font-bold border-l-4 border-indigo-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2 rounded-r-xl transition">9. Contact & Inquiries</a>
                        </nav>
                    </div>

                    <div class="bg-gradient-to-br from-slate-900 to-indigo-950 text-white rounded-3xl p-6 shadow-md space-y-3">
                        <div class="text-xs font-bold text-amber-400 uppercase tracking-wide">Legal Questions?</div>
                        <p class="text-xs text-slate-300">Need clarification on service terms or institutional guidelines?</p>
                        <a href="{{ url('/legal-support') }}" class="inline-block w-full bg-indigo-600 hover:bg-indigo-700 text-white text-center font-bold text-xs py-2.5 rounded-xl transition">
                            Visit Legal Support Hub →
                        </a>
                    </div>
                </aside>

                <!-- Document Body -->
                <main class="lg:col-span-8 bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-12">

                    <!-- Section 1: Acceptance -->
                    <article id="tc-1" class="scroll-mt-32 space-y-4" x-show="!filterQuery || '1. acceptance terms binding agreement'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">01</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">1. Acceptance of Terms</h2>
                        </div>
                        <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                            Welcome to <strong>AdmissionsDekho.com</strong>. By accessing, browsing, or utilizing our website, mobile application, or educational advisory tools, you confirm that you are at least 18 years of age (or possess parental consent if a minor) and agree to be bound legally by these Terms & Conditions.
                        </p>
                    </article>

                    <!-- Section 2: Advisory Disclaimer -->
                    <article id="tc-2" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '2. educational advisory disclaimer university'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">02</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">2. Educational Advisory Disclaimer</h2>
                        </div>
                        <div class="p-6 bg-amber-50 border border-amber-200 rounded-2xl space-y-2">
                            <h3 class="font-extrabold text-amber-950 text-sm flex items-center gap-2">
                                ⚠️ Independent Advisory Status
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                                AdmissionsDekho operates as an independent educational profile evaluation portal. Submitting a profile or lead request does <strong>NOT guarantee admission</strong> to any specific college. Final selection criteria, merit cutoffs, and fee structures remain at the sole statutory discretion of respective university authorities.
                            </p>
                        </div>
                    </article>

                    <!-- Section 3: User Responsibilities -->
                    <article id="tc-3" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '3. user responsibilities conduct scores'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">03</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">3. User Accounts & Responsibilities</h2>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-slate-700 list-disc pl-5">
                            <li>Users must provide truthful, accurate, and complete Class 10th/12th/Graduation marks and entrance exam percentiles.</li>
                            <li>Automated scraping bots, data harvesting, or server disruption attempts are strictly illegal under IT Act guidelines.</li>
                            <li>Impersonating university counselors or submitting abusive inquiries will result in immediate IP blocking and legal escalation.</li>
                        </ul>
                    </article>

                    <!-- Section 4: Fees & Refunds -->
                    <article id="tc-4" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '4. fee guidance payment refund ugc'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">04</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">4. Fee Guidance & Refund Policy</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            AdmissionsDekho provides <strong>100% Free Initial Advisory Sessions</strong> to students. In cases where partner university fee transactions occur, institutional fee refund policies are governed strictly by official UGC fee refund directives.
                        </p>
                    </article>

                    <!-- Section 5: Intellectual Property -->
                    <article id="tc-5" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '5. intellectual property copyright assets'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">05</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">5. Intellectual Property Rights</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            All website components—including custom layout code, graphics, brand logos, course guides, search tools, text content, and software scripts—are the exclusive intellectual property of AdmissionsDekho. Reproduction or unauthorized scraping is strictly prohibited.
                        </p>
                    </article>

                    <!-- Section 6: Termination -->
                    <article id="tc-6" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '6. termination account restriction suspension'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">06</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">6. Account Restriction & Termination</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            We reserve the right to suspend or terminate user access without prior notice if fraudulent scores, automated spam attacks, or violation of these terms are detected.
                        </p>
                    </article>

                    <!-- Section 7: Limitation of Liability -->
                    <article id="tc-7" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '7. limitation liability warranty disclaimer'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">07</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">7. Limitation of Liability & Warranty Disclaimer</h2>
                        </div>
                        <div class="p-6 bg-slate-50 border border-slate-200 rounded-2xl text-xs sm:text-sm text-slate-700 leading-relaxed font-mono">
                            SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE". TO THE MAXIMUM EXTENT PERMITTED BY LAW, ADMISSIONSDEKHO DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, AND SHALL NOT BE LIABLE FOR INDIRECT OR CONSEQUENTIAL DAMAGES.
                        </div>
                    </article>

                    <!-- Section 8: Governing Law -->
                    <article id="tc-8" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '8. governing law jurisdiction dispute resolution'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">08</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">8. Governing Law & Dispute Resolution</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            These Terms shall be governed by and construed in accordance with the laws of India. Any legal dispute or proceeding arising out of these Terms shall be subject to the exclusive jurisdiction of the courts located in New Delhi, India.
                        </p>
                    </article>

                    <!-- Section 9: Contact -->
                    <article id="tc-9" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '9. contact inquiries legal email'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-black px-2.5 py-1 rounded-lg">09</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">9. Contact & Inquiries</h2>
                        </div>
                        <div class="p-6 bg-slate-950 text-white rounded-3xl space-y-2">
                            <h4 class="font-extrabold text-amber-400 text-sm">AdmissionsDekho Legal Division</h4>
                            <p class="text-xs text-slate-300">Email: <a href="mailto:legal@admissionsdekho.com" class="text-blue-300 font-bold hover:underline">legal@admissionsdekho.com</a></p>
                            <p class="text-xs text-slate-300">Helpline Phone: <a href="tel:+919643802216" class="text-blue-300 font-bold hover:underline">+91 9643802216</a></p>
                        </div>
                    </article>

                </main>

            </div>

        </div>
    </section>

</x-layout.app>
