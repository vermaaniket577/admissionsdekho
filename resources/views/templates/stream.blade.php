<x-layout.app :seo="$seo" :title="$page->title">

    <!-- 1. Hero Banner Section -->
    <section class="bg-gradient-to-br from-sky-50/80 via-blue-50/40 to-slate-50 py-12 sm:py-16 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Column Content -->
                <div class="lg:col-span-7 space-y-5">
                    <!-- Top Pill Badge -->
                    <div class="inline-flex items-center gap-2 bg-sky-100/80 text-sky-800 border border-sky-200/90 rounded-full px-4 py-1.5 text-xs sm:text-sm font-semibold shadow-sm">
                        <span class="text-amber-500 font-bold">★</span>
                        <span>Rated 4.9/5 | 10,000+ Students Counseled | India's #1 Admission Consultants</span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight">
                        {{ str_replace(' | AdmissionsDekho', '', $page->title) }}
                        <span class="text-blue-600 block mt-1.5">Complete Admission Guidance</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-2xl">
                        {{ $seo?->meta_description ?? "Choosing the right career after Class 12 is one of the most important decisions for any student, and pursuing " . strtolower($page->title) . " has become one of the most rewarding options in India. Get expert counselling for top approved colleges, fees, cutoff, and career scope." }}
                    </p>

                    <!-- CTA Buttons -->
                    <div class="pt-2 flex flex-wrap items-center gap-4">
                        <button @click="isModalOpen = true; modalTitle = 'Evaluate My Profile Free'; selectedCourse = '{{ addslashes($page->title) }} Evaluation'"
                                class="bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-extrabold px-6 py-3.5 rounded-xl shadow-lg shadow-amber-500/25 hover:shadow-xl hover:scale-[1.02] transition-all flex items-center gap-2 text-sm sm:text-base">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span>Evaluate My Profile Free</span>
                        </button>

                        <a href="https://wa.me/919643802216?text=Hi%20AdmissionsDekho%2C%20I%20want%20admission%20guidance%20for%20{{ urlencode($page->title) }}" target="_blank"
                           class="bg-blue-600 hover:bg-blue-700 text-white font-extrabold px-6 py-3.5 rounded-xl shadow-lg shadow-blue-600/25 hover:shadow-xl hover:scale-[1.02] transition-all flex items-center gap-2 text-sm sm:text-base">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Chat on WhatsApp Now</span>
                        </a>
                    </div>

                    <!-- Bullet Points Below Buttons -->
                    <div class="pt-2 flex flex-wrap gap-4 sm:gap-6 text-xs sm:text-sm font-bold text-slate-800">
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>100% Statutory Approved</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>Top College Guidance</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center font-extrabold text-xs">✓</span>
                            <span>Dedicated Counselors</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column Visual Image with Floating Overlay Cards -->
                <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        
                        <!-- Main Image Container -->
                        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900 aspect-[4/3]">
                            <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="{{ $page->title }} Complete Admission Guidance" class="w-full h-full object-cover">
                        </div>

                        <!-- Top Right Floating Card -->
                        <div class="absolute -top-5 -right-3 sm:-right-5 bg-white/95 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-slate-100 shadow-xl flex items-center gap-3 z-10">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl shrink-0">
                                🎓
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">Top Govt & Pvt Colleges</h4>
                                <p class="text-[11px] font-semibold text-slate-500">Diploma, UG & PG Programs</p>
                            </div>
                        </div>

                        <!-- Bottom Left Floating Card -->
                        <div class="absolute -bottom-5 -left-3 sm:-left-5 bg-white/95 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-slate-100 shadow-xl flex items-center gap-3 z-10">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl shrink-0">
                                🏛️
                            </div>
                            <div>
                                <h4 class="text-xs sm:text-sm font-extrabold text-slate-900 leading-tight">120+ Partner Colleges</h4>
                                <p class="text-[11px] font-semibold text-slate-500">NAAC Grade A / A++</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    @if(!empty($page->content))
        <!-- Dynamic Page Specific Content Section -->
        <section class="py-12 sm:py-16 bg-white border-b border-slate-200/70 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-6 sm:p-10 rounded-3xl border border-slate-200/80 shadow-md">
                    {!! $page->content !!}
                </div>
            </div>
        </section>
    @endif

    <!-- 2. Top Approved Colleges Info Section -->
    <section class="py-12 sm:py-16 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Image Visual -->
                <div class="lg:col-span-5">
                    <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white bg-slate-100 aspect-[4/3]">
                        <img src="{{ asset('/images/page-assets/law-corporate-building.png') }}" alt="Top Approved {{ $page->title }} Colleges in India" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Text Content -->
                <div class="lg:col-span-7 space-y-4">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug">
                        Top Approved {{ $page->title }} Colleges in India – Admission Guidance & Fees
                    </h2>
                    
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        AdmissionsDekho is a trusted online platform helping students secure admission to the Top Approved {{ $page->title }} Colleges in India. We provide expert guidance for Diploma, Bachelor, Master, PhD, entrance exam preparation, statutory approved colleges, eligibility verification, admission counselling, scholarships, documentation support, and complete career assistance to help students build successful professional careers.
                    </p>

                    <div class="pt-2 space-y-3">
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-blue-600 mb-1">
                                Course Details & Specialization Highlights
                            </h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                {{ $currentStream?->description ?? "Explore comprehensive degree curriculum, core domain specializations, hands-on lab practicals, industry internships, and placement assistance." }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-blue-600 mb-1">
                                Career Paths & Salary Scope
                            </h3>
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Graduates can secure top industry positions in MNCs, corporate firms, government research labs, and private enterprises with entry-level salaries ranging from <strong class="text-slate-900 font-bold">₹4–15 LPA</strong>.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Higher Studies & Inline Lead Capture Form Section -->
    <section class="py-12 sm:py-16 bg-slate-50/70 border-b border-slate-200/70" x-data="{ formSubmitted: false, isSubmitting: false, formData: { name_first: '', name_last: '', email: '', phone: '', state: '', city: '', message: '' } }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Left Column Text Content -->
                <div class="lg:col-span-7 space-y-6 pt-2">
                    
                    <!-- Subsection 1 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Higher Studies and Postgraduate Admissions in {{ $page->title }}
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Graduates can enroll in advanced Master's and Doctorate degree programs to specialize in high-demand domains, pursue scientific research, or secure academic teaching positions at premier central and state universities.
                        </p>
                    </div>

                    <!-- Subsection 2 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Why Choose Approved {{ $page->title }} Colleges?
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            UGC, AICTE, and statutory body approved colleges ensure academic rigor, qualified faculty, state-of-the-art laboratory infrastructure, corporate tie-ups, and verified campus placement records.
                        </p>
                    </div>

                    <!-- Subsection 3 -->
                    <div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-blue-600 mb-2">
                            Book Your Free {{ $page->title }} Counseling Session
                        </h3>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Unsure which <strong class="text-slate-900 font-bold">{{ strtolower($page->title) }} programs</strong> suit your academic profile? Our experts at AdmissionsDekho help you shortlist the best colleges, compare fees, and guide you through the entire admission process!
                        </p>
                    </div>

                </div>

                <!-- Right Column Inline Lead Form -->
                <div class="lg:col-span-5">
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/90 shadow-xl">
                        
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 text-center mb-6 leading-tight">
                            Get in Touch with Our Admission Experts
                        </h3>

                        <!-- Success Message -->
                        <template x-if="formSubmitted">
                            <div class="p-6 bg-emerald-50 border border-emerald-200 rounded-2xl text-center space-y-2 my-4">
                                <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-2xl mx-auto">✓</div>
                                <h4 class="text-lg font-extrabold text-emerald-900">Thank You!</h4>
                                <p class="text-xs sm:text-sm text-emerald-700">Your enquiry for {{ $page->title }} has been received. Our counselor will contact you shortly.</p>
                            </div>
                        </template>

                        <!-- Form -->
                        <form x-show="!formSubmitted" @submit.prevent="
                            isSubmitting = true;
                            fetch('{{ route('lead.submit') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    name: formData.name_first + ' ' + formData.name_last,
                                    email: formData.email,
                                    phone: formData.phone,
                                    city: formData.city + (formData.state ? ', ' + formData.state : ''),
                                    course: '{{ addslashes($page->title) }}',
                                    message: formData.message
                                })
                            })
                            .then(res => res.json())
                            .then(data => {
                                isSubmitting = false;
                                formSubmitted = true;
                            })
                            .catch(err => {
                                isSubmitting = false;
                                alert('Thank you! Your enquiry has been submitted.');
                                formSubmitted = true;
                            });
                        " class="space-y-4">
                            
                            <!-- Name Inputs -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Name *</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <input type="text" x-model="formData.name_first" placeholder="First" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                    <input type="text" x-model="formData.name_last" placeholder="Last" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                            </div>

                            <!-- Email Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Email *</label>
                                <input type="email" x-model="formData.email" placeholder="you@example.com" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                            </div>

                            <!-- Phone Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Phone / Contact *</label>
                                <input type="tel" x-model="formData.phone" placeholder="+1234567890" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                            </div>

                            <!-- State & City -->
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">State</label>
                                    <input type="text" x-model="formData.state" placeholder="State" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">City</label>
                                    <input type="text" x-model="formData.city" placeholder="City" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium">
                                </div>
                            </div>

                            <!-- Message Input -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">Message *</label>
                                <textarea x-model="formData.message" rows="3" placeholder="Your message here..." required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm font-medium resize-y"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2">
                                <button type="submit" :disabled="isSubmitting" class="w-auto px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-extrabold rounded-xl shadow-md transition-all text-sm flex items-center justify-center gap-2">
                                    <span x-text="isSubmitting ? 'Submitting...' : 'Submit'">Submit</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Key Statistics & Achievements Grid Section -->
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
                
                <!-- Stat Card 1 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🎓
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        10,000+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Aspirants Guided
                    </div>
                </div>

                <!-- Stat Card 2 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🏛️
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        120+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Approved Colleges
                    </div>
                </div>

                <!-- Stat Card 3 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🏆
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        98%
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Admission Success Rate
                    </div>
                </div>

                <!-- Stat Card 4 -->
                <div class="bg-slate-50/80 hover:bg-blue-50/40 p-6 sm:p-8 rounded-3xl border border-slate-200/80 shadow-sm text-center transition-all duration-200">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100/80 text-blue-600 flex items-center justify-center font-bold text-2xl mx-auto mb-4">
                        🕒
                    </div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-1">
                        15+
                    </div>
                    <div class="text-slate-500 text-xs sm:text-sm font-bold">
                        Years Academic Experience
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. Main Content Body: Course Overview & Highlights -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Left Column: Course Matrix & Details -->
                <div class="lg:col-span-8 space-y-10">

                    <!-- Key Course Details Card -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-sm border border-slate-200">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            <span class="text-blue-600">📊</span> Course Overview & Highlights
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm">
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-slate-500 text-xs font-semibold uppercase">Degree Levels</div>
                                <div class="text-slate-900 font-bold text-base mt-1">Diploma, UG (Bachelor), PG (Master), PhD</div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-slate-500 text-xs font-semibold uppercase">Average Duration</div>
                                <div class="text-slate-900 font-bold text-base mt-1">2 to 4 Years (Semester Based)</div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-slate-500 text-xs font-semibold uppercase">Minimum Eligibility</div>
                                <div class="text-slate-900 font-bold text-base mt-1">12th Pass (50% Marks) / Graduation</div>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                                <div class="text-slate-500 text-xs font-semibold uppercase">Average Fee Structure</div>
                                <div class="text-slate-900 font-bold text-base mt-1">₹ 50,000 – ₹ 2,50,000 / Year</div>
                            </div>
                        </div>
                    </div>

                    <!-- Top Approved Colleges Matrix -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-sm border border-slate-200">
                        <h2 class="text-2xl font-bold text-slate-900 mb-4">UGC & Statutory Approved Institutes</h2>
                        <p class="text-slate-600 text-sm mb-6">Compare top colleges offering this stream in India with direct admission eligibility.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($colleges as $college)
                                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
                                    <div class="flex justify-between items-start">
                                        <h4 class="font-bold text-slate-900 text-sm">{{ $college->name }}</h4>
                                        <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded">{{ $college->approval_body }}</span>
                                    </div>
                                    <p class="text-xs text-slate-500 mt-1">{{ $college->location }}</p>
                                    <button @click="isModalOpen = true; modalTitle = 'Apply to {{ addslashes($college->name) }}'"
                                            class="mt-3 text-xs font-bold text-blue-600 hover:underline">Request Cutoff & Fee Details →</button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar: Quick Contact Banner -->
                <div class="lg:col-span-4">
                    <div class="sticky top-28 space-y-6">
                        <div class="bg-gradient-to-br from-blue-900 to-indigo-900 text-white p-6 sm:p-8 rounded-3xl shadow-xl border border-blue-700/50">
                            <span class="bg-amber-500 text-slate-950 text-xs font-extrabold px-3 py-1 rounded-full uppercase tracking-wider">Free Profile Evaluation</span>
                            <h3 class="text-2xl font-extrabold mt-4 mb-2">Need Guidance for {{ $page->title }}?</h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-6">Talk to India's top education consultants for 1:1 counselling, college cutoffs, and scholarship assistance.</p>
                            <button @click="isModalOpen = true; modalTitle = 'Book Counselling for {{ addslashes($page->title) }}'; selectedCourse = '{{ addslashes($page->title) }}'"
                                    class="w-full bg-amber-500 hover:bg-amber-400 text-slate-950 font-extrabold py-3.5 rounded-2xl shadow-lg transition text-center text-sm">
                                Book Free Counseling
                            </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 20 FAQs About {{ $page->title }} Section -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeFaq: null }">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-blue-600 uppercase bg-blue-100/80 rounded-full mb-3 shadow-sm">
                    FREQUENTLY ASKED QUESTIONS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    20 FAQs About {{ $page->title }}
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Everything you need to know about eligibility, entrance exams, fees, top colleges, and career scope for {{ $page->title }}:
                </p>
            </div>

            @php
                $streamTitle = $page->title ?? 'this Stream';
                $faqs = [
                    ["q" => "1. What are the eligibility criteria for admissions in {$streamTitle}?", "a" => "Candidates must have completed 10+2 from a recognized board with required minimum aggregate marks (usually 45%–50%). Reserved category candidates get a 5% relaxation."],
                    ["q" => "2. Which entrance exams are accepted for {$streamTitle} programs?", "a" => "Admissions are based on national, state, and university-level entrance tests like JEE Main, CUET, NEET, CAT, MAT, GPAT, or direct university merit tests."],
                    ["q" => "3. What is the average course duration for {$streamTitle} degrees?", "a" => "Undergraduate degrees typically span 3 to 4 years (divided into 6 to 8 semesters), while Postgraduate master's degrees take 2 years."],
                    ["q" => "4. What is the average annual fee structure for {$streamTitle} in India?", "a" => "Government institutes charge between ₹20,000 to ₹1,00,000 per year, whereas top private universities range from ₹75,000 to ₹3,50,000 per year."],
                    ["q" => "5. Can students from other streams apply for {$streamTitle}?", "a" => "Eligibility depends on the specific course level. Many UG programs accept students from Arts, Science, or Commerce background, while technical streams require specific PCM/PCB subjects."],
                    ["q" => "6. What are the average starting salary packages for {$streamTitle} graduates?", "a" => "Fresh graduates receive starting salary packages ranging from ₹4.5 LPA to ₹15+ LPA depending on college accreditation, skills, and recruiter profile."],
                    ["q" => "7. Are distance/online learning options available for {$streamTitle}?", "a" => "Yes, top UGC-DEB approved universities offer online and distance learning degrees with flexible study modules for working professionals."],
                    ["q" => "8. What are the top career opportunities after completing {$streamTitle}?", "a" => "Graduates can work across corporate enterprises, government sector PSUs, research laboratories, consultancies, or launch entrepreneurial ventures."],
                    ["q" => "9. Is accreditation (UGC / AICTE / BCI / PCI / INC) mandatory for {$streamTitle} colleges?", "a" => "Yes, studying at a statutory-approved institution ensures global degree validity, government job eligibility, and higher education recognition."],
                    ["q" => "10. Can final year Class 12th board students apply for {$streamTitle} entrance exams?", "a" => "Yes! Candidates appearing for their Class 12 board examinations in the current academic year can apply on a provisional basis."],
                    ["q" => "11. What key documents are needed during {$streamTitle} counseling?", "a" => "Standard documents include 10th & 12th Marksheets, Entrance Exam Scorecard, Migration/Transfer Certificate, Category Certificate, Aadhaar ID, and Passport Photos."],
                    ["q" => "12. What is the difference between Honours and Pass degrees in {$streamTitle}?", "a" => "Honours degrees offer specialized, in-depth subject focus and research modules compared to general Pass degree curricula."],
                    ["q" => "13. Are merit scholarships available for {$streamTitle} students?", "a" => "Yes! State governments, central schemes (NSP), and private universities offer merit-cum-means tuition fee waivers for high academic scorers."],
                    ["q" => "14. Do colleges offer campus placement drives for {$streamTitle} students?", "a" => "Leading statutory-approved universities maintain dedicated placement cells hosting top MNCs, startups, and corporate recruiters each year."],
                    ["q" => "15. How important are practical internships during {$streamTitle} courses?", "a" => "Internships provide crucial real-world industry experience, practical exposure, and networking opportunities that enhance job placement readiness."],
                    ["q" => "16. Can I pursue higher studies (Master's / PhD) after {$streamTitle}?", "a" => "Yes, completing a recognized bachelor's degree opens direct pathways for Master's programs, GATE/CAT/NET exams, and doctoral research."],
                    ["q" => "17. What are the top government recruiters for {$streamTitle} graduates?", "a" => "Government recruiters include PSUs, Civil Services, Defence Forces, State Public Service Commissions, Railways, and National Research Labs."],
                    ["q" => "18. How to select the best college for {$streamTitle} in India?", "a" => "Consider NIRF rankings, statutory approvals (UGC/AICTE), faculty qualification, lab infrastructure, placement records, and fee transparency."],
                    ["q" => "19. What soft skills are essential alongside a degree in {$streamTitle}?", "a" => "Key skills include analytical reasoning, communication, problem-solving, digital literacy, project management, and teamwork."],
                    ["q" => "20. How does AdmissionsDekho assist in {$streamTitle} admissions?", "a" => "AdmissionsDekho offers 100% free expert counseling, college shortlisting, cutoff analysis, fee comparisons, and hassle-free application support."]
                ];
            @endphp

            <!-- FAQ Accordion List -->
            <div class="space-y-3.5">
                @foreach($faqs as $index => $faq)
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                        <button @click="activeFaq = (activeFaq === {{ $index + 1 }} ? null : {{ $index + 1 }})"
                                class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-blue-600 transition">
                            <span>{{ $faq['q'] }}</span>
                            <span class="text-blue-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === {{ $index + 1 }} }">+</span>
                        </button>
                        <div x-show="activeFaq === {{ $index + 1 }}" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</x-layout.app>
