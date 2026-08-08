<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Banner Header -->
    <section class="relative bg-slate-950 text-white overflow-hidden py-16 sm:py-24 border-b border-slate-800">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/images/page-assets/law-hero.png') }}" alt="Legal Support Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-950/80"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-sky-400 uppercase bg-sky-950/80 border border-sky-800/80 rounded-full mb-4 shadow-md">
                LEGAL ADVISORY & STATUTORY COMPLIANCE
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
                Legal Support Services
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed max-w-3xl mx-auto">
                Comprehensive legal advisory, statutory compliance audits, and academic grievance resolution for students, parents, and educational institutions across India.
            </p>
            <div class="pt-6 flex flex-wrap items-center justify-center gap-4">
                <button @click="isModalOpen = true; modalTitle = 'Request Free Legal Aid Consultation'; selectedCourse = 'Legal Advisory Support'"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-extrabold px-8 py-4 rounded-xl shadow-xl shadow-blue-600/30 hover:scale-[1.02] transition-all text-sm sm:text-base">
                    Request Legal Consultation
                </button>
                <a href="tel:+919643802216" class="bg-slate-800 hover:bg-slate-700 text-white font-extrabold px-6 py-4 rounded-xl border border-slate-700 transition-all text-sm sm:text-base">
                    📞 Emergency Helpline: +91 9643802216
                </a>
            </div>
        </div>
    </section>

    <!-- Content & Services Section -->
    <section class="py-16 sm:py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Main Body -->
                <div class="lg:col-span-8 space-y-10">

                    <!-- Service Overview -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">1. Legal Support Overview</h2>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            At AdmissionsDekho, we bridge the gap between higher education aspirations and statutory regulatory compliance. Whether you require legal consultation on Bar Council of India (BCI) norms, university accreditation disputes, student admission agreements, or statutory fee refund rules, our specialized legal advisory team provides transparent, reliable guidance.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            <div class="p-4 bg-sky-50 rounded-2xl border border-sky-100">
                                <h4 class="font-bold text-sky-900 text-sm">Statutory Audit</h4>
                                <p class="text-xs text-slate-600 mt-1">Verifying university approvals from UGC, AICTE, BCI, PCI, INC & NCTE.</p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-2xl border border-blue-100">
                                <h4 class="font-bold text-blue-900 text-sm">Dispute Settlement</h4>
                                <p class="text-xs text-slate-600 mt-1">Assisting with fee refund claims, seat allocations, and document retention issues.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation Scope -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">2. Consultation Scope & Regulatory Standards</h2>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            All legal guidance provided by AdmissionsDekho strictly adheres to directives issued by the Ministry of Education, Supreme Court rulings, and statutory regulatory councils in India.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 font-extrabold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Degree Validity Audits</h4>
                                    <p class="text-xs text-slate-500 mt-0.5">Pre-admission verification ensuring university degrees are valid for Central and State government competitive exams.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 font-extrabold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Fee Refund Directive Recovery</h4>
                                    <p class="text-xs text-slate-500 mt-0.5">Guidance for full tuition fee refunds when cancelling admissions within official UGC timeline windows.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                <span class="w-6 h-6 rounded-full bg-blue-100 text-blue-700 font-extrabold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Legal Representation Support</h4>
                                    <p class="text-xs text-slate-500 mt-0.5">Drafting legal notices and representation strategies for academic transcript or certificate withholding disputes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Workflow Step-by-Step -->
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">3. How to Request Legal Representation</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center mx-auto mb-3">1</div>
                                <h4 class="font-bold text-slate-900 text-sm">Submit Request</h4>
                                <p class="text-xs text-slate-500 mt-1">Submit your legal inquiry and upload case details.</p>
                            </div>
                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center mx-auto mb-3">2</div>
                                <h4 class="font-bold text-slate-900 text-sm">Document Review</h4>
                                <p class="text-xs text-slate-500 mt-1">Legal panel audits your documents within 24-48 hours.</p>
                            </div>
                            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-200">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center mx-auto mb-3">3</div>
                                <h4 class="font-bold text-slate-900 text-sm">1:1 Consultation</h4>
                                <p class="text-xs text-slate-500 mt-1">Connect with senior education legal counsel.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar Form -->
                <div class="lg:col-span-4">
                    <x-admission-form title="Request Legal Aid Consultation" streamInterest="Legal Support Request" />
                </div>
            </div>

        </div>
    </section>

</x-layout.app>
