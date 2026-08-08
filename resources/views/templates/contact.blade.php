<x-layout.app :seo="$seo" :title="$page->title">

    <section class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
            <span class="bg-blue-600/30 text-blue-300 font-extrabold text-xs uppercase px-3 py-1 rounded-full border border-blue-500/40">Free Profile Evaluation</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold mt-3">Get in Touch with Admissions Experts</h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3">Confused about courses or colleges? Speak to our admission counselors for free profile evaluation and fee structure guidance near you.</p>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Left Column: Contact Cards -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Team Banner Card -->
                    <div class="rounded-3xl overflow-hidden shadow-lg border border-slate-200 bg-white max-h-[220px]">
                        <img src="{{ asset('/images/page-assets/contact-hero.png') }}" alt="AdmissionsDekho Counseling Team" class="w-full h-full object-cover">
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xl shrink-0">📞</div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base">Helpline & WhatsApp</h3>
                            <p class="text-xs text-slate-500 mt-1">Speak directly with an admission advisor</p>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $sitePhone ?? '+919643802216') }}" class="text-blue-600 font-bold text-lg mt-1 block hover:underline">{{ $sitePhone ?? '+91 9643802216' }}</a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-xl shrink-0">✉️</div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base">Email Desk</h3>
                            <p class="text-xs text-slate-500 mt-1">Send us your marksheets or admission queries</p>
                            <a href="mailto:{{ $siteEmail ?? 'info@admissionsdekho.com' }}" class="text-indigo-600 font-bold text-base mt-1 block hover:underline">{{ $siteEmail ?? 'info@admissionsdekho.com' }}</a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl shrink-0">🏢</div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-base">Head Office Address</h3>
                            <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                                {{ $siteAddress ?? 'AdmissionsDekho, India' }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Full Enquiry Form -->
                <div class="lg:col-span-7">
                    <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="Contact Page" />
                </div>

            </div>
        </div>
    </section>

</x-layout.app>
