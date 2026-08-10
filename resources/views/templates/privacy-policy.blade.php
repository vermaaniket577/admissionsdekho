<x-layout.app :seo="$seo" :title="$page->title ?? 'Privacy Policy | AdmissionsDekho'">

    <!-- Hero Banner with Breadcrumbs & Topic Search -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-12 sm:py-16 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-slate-300">Legal Documentation</span>
                <span>/</span>
                <span class="text-amber-400 font-bold">Privacy Policy</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 text-blue-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                        🛡️ PRIVACY & DATA GOVERNANCE
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        Privacy Policy & Data Security
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                        Transparent rules on how AdmissionsDekho collects, processes, and protects your personal educational profile in accordance with the IT Act / DPDP Act (India), GDPR (EU), and CCPA.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 text-xs text-slate-400 pt-2 font-mono">
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> Effective: January 1, 2026</span>
                        <span>•</span>
                        <span>Version 3.2 (Updated Regularly)</span>
                    </div>
                </div>

                <!-- Quick Search Input -->
                <div class="lg:col-span-4" x-data="{ query: '' }" @input="$dispatch('filter-policy', query)">
                    <div class="bg-slate-900/90 border border-slate-700/80 rounded-2xl p-4 shadow-2xl backdrop-blur-xl space-y-2">
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider">Search Policy Topics</label>
                        <div class="relative">
                            <input type="text" x-model="query" placeholder="e.g. cookies, GDPR, third-party..." 
                                   class="w-full bg-slate-950 border border-slate-700 focus:border-amber-400 text-white rounded-xl pl-10 pr-4 py-2.5 text-xs outline-none transition">
                            <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <p class="text-[11px] text-slate-400">Type keywords to filter sections dynamically</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Container with Sticky Table of Contents -->
    <section class="py-12 sm:py-16 bg-slate-50 min-h-screen" x-data="{ activeSection: 'sec-1', filterQuery: '' }" @filter-policy.window="filterQuery = $event.detail.toLowerCase()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Summary at a Glance (TL;DR Card) -->
            <div class="mb-12 bg-white rounded-3xl border border-slate-200 p-6 sm:p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-xl">⚡</span>
                    <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Summary at a Glance (TL;DR)</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="p-4 bg-emerald-50/80 border border-emerald-200 rounded-2xl space-y-1">
                        <div class="text-emerald-700 font-extrabold text-xs uppercase">🔒 Data Non-Sale</div>
                        <p class="text-xs text-slate-700">We <strong>never sell or rent</strong> your personal data to marketing brokers.</p>
                    </div>
                    <div class="p-4 bg-blue-50/80 border border-blue-200 rounded-2xl space-y-1">
                        <div class="text-blue-700 font-extrabold text-xs uppercase">🎯 Purpose-Driven</div>
                        <p class="text-xs text-slate-700">Used strictly to evaluate college options and process requested admissions.</p>
                    </div>
                    <div class="p-4 bg-purple-50/80 border border-purple-200 rounded-2xl space-y-1">
                        <div class="text-purple-700 font-extrabold text-xs uppercase">⚙️ Full Choice Control</div>
                        <p class="text-xs text-slate-700">Request complete data export or instant deletion at any time.</p>
                    </div>
                    <div class="p-4 bg-amber-50/80 border border-amber-200 rounded-2xl space-y-1">
                        <div class="text-amber-800 font-extrabold text-xs uppercase">🌐 Global Compliance</div>
                        <p class="text-xs text-slate-700">Fully aligned with DPDP Act 2023, GDPR (EU), and CCPA regulations.</p>
                    </div>
                </div>
            </div>

            <!-- Layout Grid: Sticky Sidebar + Main Policy Document -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Sticky Table of Contents Navigation (Desktop) -->
                <aside class="lg:col-span-4 sticky top-28 hidden lg:block space-y-4">
                    <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
                        <h3 class="text-xs font-extrabold uppercase tracking-widest text-slate-400 mb-4 font-mono">TABLE OF CONTENTS</h3>
                        <nav class="space-y-1 text-xs font-semibold text-slate-600">
                            <a href="#sec-1" @click="activeSection = 'sec-1'" 
                               :class="activeSection === 'sec-1' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">1. Introduction & Overview</a>
                            
                            <a href="#sec-2" @click="activeSection = 'sec-2'" 
                               :class="activeSection === 'sec-2' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">2. Information We Collect</a>
                            
                            <a href="#sec-3" @click="activeSection = 'sec-3'" 
                               :class="activeSection === 'sec-3' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">3. How We Use Your Data</a>
                            
                            <a href="#sec-4" @click="activeSection = 'sec-4'" 
                               :class="activeSection === 'sec-4' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">4. Cookies & Tracking Tech</a>
                            
                            <a href="#sec-5" @click="activeSection = 'sec-5'" 
                               :class="activeSection === 'sec-5' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">5. Third-Party Integrations</a>
                            
                            <a href="#sec-6" @click="activeSection = 'sec-6'" 
                               :class="activeSection === 'sec-6' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">6. User Rights & Choices</a>
                            
                            <a href="#sec-7" @click="activeSection = 'sec-7'" 
                               :class="activeSection === 'sec-7' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">7. Retention & Security</a>
                            
                            <a href="#sec-8" @click="activeSection = 'sec-8'" 
                               :class="activeSection === 'sec-8' ? 'bg-blue-50 text-blue-700 font-bold border-l-4 border-blue-600 pl-3' : 'hover:bg-slate-50 pl-4'"
                               class="block py-2.5 rounded-r-xl transition">8. Contact Us & DPO Office</a>
                        </nav>
                    </div>

                    <!-- Direct Help Box -->
                    <div class="bg-gradient-to-br from-blue-900 to-slate-900 text-white rounded-3xl p-6 shadow-md space-y-3">
                        <div class="text-xs font-bold text-amber-400 uppercase tracking-wide">Privacy Support</div>
                        <p class="text-xs text-slate-300">Have questions about your personal data or need a copy of your records?</p>
                        <a href="mailto:info@admissionsdekho.com" class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white text-center font-bold text-xs py-2.5 rounded-xl transition">
                            Contact Privacy Team →
                        </a>
                    </div>
                </aside>

                <!-- Document Body -->
                <main class="lg:col-span-8 bg-white rounded-3xl border border-slate-200 p-8 sm:p-12 shadow-sm space-y-12">

                    <!-- Section 1: Introduction -->
                    <article id="sec-1" class="scroll-mt-32 space-y-4" x-show="!filterQuery || '1. introduction overview scope'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">01</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">1. Introduction & Overview</h2>
                        </div>
                        <p class="text-slate-700 text-sm sm:text-base leading-relaxed">
                            Welcome to <strong>AdmissionsDekho.com</strong> ("we", "our", "us"). We operate an interactive higher-education advisory portal designed to help students, parents, and working professionals evaluate university courses, cutoff ranks, fee structures, and statutory approvals (UGC, AICTE, BCI, INC, PCI).
                        </p>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            This Privacy Policy explains how we handle your information when you visit <code class="text-blue-600 bg-blue-50 px-2 py-0.5 rounded font-mono font-bold text-xs">https://admissionsdekho.com</code>, submit lead forms, utilize our Smart Profile Evaluator tool, or communicate with our educational advisors.
                        </p>
                    </article>

                    <!-- Section 2: Data Collection -->
                    <article id="sec-2" class="scroll-mt-32 space-y-5 border-t border-slate-100 pt-10" x-show="!filterQuery || '2. information data collect direct provided metadata'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">02</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">2. Information We Collect</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            We group collected data into two primary categories: information you directly provide to us, and technical metadata logged automatically by your web browser.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/80 space-y-3">
                                <h3 class="font-extrabold text-slate-900 text-sm flex items-center gap-2">
                                    <span class="text-blue-600">✍️</span> Information Directly Provided
                                </h3>
                                <ul class="text-xs sm:text-sm text-slate-600 space-y-2 list-disc pl-4">
                                    <li><strong>Contact Identifiers:</strong> Full Name, Email Address, Phone Number, WhatsApp contact details.</li>
                                    <li><strong>Academic Profile:</strong> Class 10th/12th percentages, Graduation marks, Entrance ranks (JEE, CLAT, CAT, NEET, CUET).</li>
                                    <li><strong>Preferences:</strong> Desired stream (Engineering, Law, Management, PhD, Medical), target budget, and geographic location.</li>
                                    <li><strong>Communications:</strong> Call notes, chat logs, and lead modal form responses.</li>
                                </ul>
                            </div>

                            <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200/80 space-y-3">
                                <h3 class="font-extrabold text-slate-900 text-sm flex items-center gap-2">
                                    <span class="text-purple-600">💻</span> Automatically Logged Metadata
                                </h3>
                                <ul class="text-xs sm:text-sm text-slate-600 space-y-2 list-disc pl-4">
                                    <li><strong>Network Identifiers:</strong> Internet Protocol (IP) address, approximate city-level geolocation data.</li>
                                    <li><strong>Device Specs:</strong> Browser type, version, Operating System (Windows, macOS, Android, iOS), screen resolution.</li>
                                    <li><strong>Usage Activity:</strong> Clickstream logs, referral URLs, time spent per page, and session activity.</li>
                                    <li><strong>Cookies:</strong> Session state tokens and analytics measurement keys.</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <!-- Section 3: How We Use Data -->
                    <article id="sec-3" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '3. how we use data purpose counseling alerts'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">03</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">3. How We Use Your Data</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            Every item of data collected serves an explicit operational purpose. We itemize our data processing objectives below:
                        </p>
                        <div class="space-y-3 text-xs sm:text-sm text-slate-700">
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 flex gap-3">
                                <span class="text-blue-600 font-bold">1.</span>
                                <div>
                                    <strong class="text-slate-900">Academic Profile Matching:</strong> Evaluating candidate eligibility, cutoff percentiles, and recommending compatible statutory-approved colleges.
                                </div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 flex gap-3">
                                <span class="text-blue-600 font-bold">2.</span>
                                <div>
                                    <strong class="text-slate-900">Advisory Sessions & Assistance:</strong> Facilitating requested 1:1 counseling calls, WhatsApp guidance updates, and application support.
                                </div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 flex gap-3">
                                <span class="text-blue-600 font-bold">3.</span>
                                <div>
                                    <strong class="text-slate-900">Critical Admission Alerts:</strong> Notifying students regarding exam dates, merit list announcements, counselling rounds, and seat locking deadlines.
                                </div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-xl border border-slate-200 flex gap-3">
                                <span class="text-blue-600 font-bold">4.</span>
                                <div>
                                    <strong class="text-slate-900">Security & Analytics:</strong> Identifying malicious bot activity, improving page speed, and diagnosing runtime web errors.
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Section 4: Cookies -->
                    <article id="sec-4" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '4. cookies tracking technologies analytics'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">04</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">4. Cookies & Tracking Technologies</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            AdmissionsDekho uses small text files called cookies to maintain session states, remember modal preferences, and collect anonymous aggregate page movement metrics.
                        </p>
                        <div class="p-4 bg-amber-50 border border-amber-200 rounded-2xl text-amber-900 text-xs sm:text-sm font-semibold">
                            💡 You can manage or block non-essential cookies at any time through your web browser preferences. Note that disabling essential cookies may impact certain interactive features like modal forms.
                        </div>
                    </article>

                    <!-- Section 5: Third-Party Integrations -->
                    <article id="sec-5" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '5. third party integrations aws google mailchimp posthog'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">05</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">5. Third-Party Services & Integrations</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            We partner with audited infrastructure and cloud vendors to maintain security, web analytics, and messaging delivery. Data processed by third parties is strictly governed by contractual data protection agreements:
                        </p>

                        <div class="overflow-x-auto border border-slate-200 rounded-2xl">
                            <table class="w-full text-left text-xs sm:text-sm text-slate-700">
                                <thead class="bg-slate-100 font-extrabold text-slate-900 uppercase text-[11px] tracking-wider border-b border-slate-200">
                                    <tr>
                                        <th class="p-3.5">Provider</th>
                                        <th class="p-3.5">Purpose</th>
                                        <th class="p-3.5">Data Shared</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 bg-white font-medium">
                                    <tr>
                                        <td class="p-3.5 font-bold text-slate-900">Cloud & Database Hosting</td>
                                        <td class="p-3.5">Secure web deployment & database backup</td>
                                        <td class="p-3.5 font-mono text-[11px]">Encrypted server logs & DB records</td>
                                    </tr>
                                    <tr>
                                        <td class="p-3.5 font-bold text-slate-900">Google Analytics</td>
                                        <td class="p-3.5">Website performance & visitor traffic analytics</td>
                                        <td class="p-3.5 font-mono text-[11px]">Anonymized IP & page view paths</td>
                                    </tr>
                                    <tr>
                                        <td class="p-3.5 font-bold text-slate-900">WhatsApp / Messaging API</td>
                                        <td class="p-3.5">Sending requested admission updates & notifications</td>
                                        <td class="p-3.5 font-mono text-[11px]">Mobile number & course choice</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>

                    <!-- Section 6: User Rights & Choices -->
                    <article id="sec-6" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '6. user rights choices gdpr ccpa dpdp export delete'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">06</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">6. User Rights & Choices</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            Under the DPDP Act (India), GDPR (EU), and CCPA (California), you possess full legal ownership of your personal records:
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-1">
                                <div class="font-extrabold text-slate-900 text-sm">📥 Right to Access</div>
                                <p class="text-slate-600">Request a full copy of all personal records stored in our databases.</p>
                            </div>
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-1">
                                <div class="font-extrabold text-slate-900 text-sm">✏️ Right to Rectify</div>
                                <p class="text-slate-600">Update or correct any inaccurate academic score or contact detail.</p>
                            </div>
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl space-y-1">
                                <div class="font-extrabold text-slate-900 text-sm">🗑️ Right to Erasure</div>
                                <p class="text-slate-600">Request complete permanent removal of your lead profile from our system.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Section 7: Retention & Security -->
                    <article id="sec-7" class="scroll-mt-32 space-y-4 border-t border-slate-100 pt-10" x-show="!filterQuery || '7. retention security encryption measures'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">07</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">7. Data Retention & Security Measures</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            We implement industry-standard technical safeguards including SSL/TLS 256-bit encryption in transit, strict database access control limits, and CSRF token protection.
                        </p>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            Student profiles are retained for a maximum of 24 months to fulfill the relevant admission cycle, after which data is automatically anonymized or securely purged.
                        </p>
                    </article>

                    <!-- Section 8: Contact Us & DPO Office -->
                    <article id="sec-8" class="scroll-mt-32 space-y-5 border-t border-slate-100 pt-10" x-show="!filterQuery || '8. contact us dpo officer address email'.includes(filterQuery)">
                        <div class="flex items-center gap-3">
                            <span class="bg-blue-100 text-blue-700 text-xs font-black px-2.5 py-1 rounded-lg">08</span>
                            <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">8. Contact Us & Data Protection Officer</h2>
                        </div>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            For any questions regarding this Privacy Policy, data access requests, or privacy concerns, please contact our Data Protection Officer:
                        </p>

                        <div class="p-6 bg-slate-950 text-white rounded-3xl space-y-3 shadow-xl">
                            <div class="flex justify-between items-center border-b border-slate-800 pb-3">
                                <div>
                                    <h4 class="font-extrabold text-amber-400 text-sm sm:text-base">AdmissionsDekho Data Protection Desk</h4>
                                    <p class="text-xs text-slate-400">Official Privacy & Compliance Division</p>
                                </div>
                                <span class="bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">ACTIVE HELP DESK</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs pt-1">
                                <div>
                                    <span class="text-slate-400 block font-mono text-[11px]">SUPPORT EMAIL</span>
                                    <a href="mailto:info@admissionsdekho.com" class="text-blue-300 font-bold hover:underline">info@admissionsdekho.com</a>
                                </div>
                                <div>
                                    <span class="text-slate-400 block font-mono text-[11px]">PHONE HELPLINE</span>
                                    <a href="tel:+919643802216" class="text-blue-300 font-bold hover:underline">+91 9643802216</a>
                                </div>
                                <div>
                                    <span class="text-slate-400 block font-mono text-[11px]">HEADQUARTERS</span>
                                    <span class="text-slate-200 font-medium">New Delhi, India</span>
                                </div>
                            </div>
                        </div>
                    </article>

                </main>

            </div>

        </div>
    </section>

</x-layout.app>
