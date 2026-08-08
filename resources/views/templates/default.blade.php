<x-layout.app :seo="$seo" :title="$page->title">

    <section class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
            <span class="bg-amber-500 text-slate-950 font-extrabold text-xs uppercase px-3 py-1 rounded-full">Trusted Guidance</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold mt-3">{{ $page->title }}</h1>
            <p class="text-slate-300 text-base mt-3 leading-relaxed">
                {{ $seo?->meta_description ?? "Get free career counseling & profile evaluation from India's trusted education consultants." }}
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-8 space-y-8">
                    <!-- Featured Campus Image -->
                    <div class="rounded-3xl overflow-hidden shadow-lg border border-slate-200 bg-white max-h-[300px]">
                        <img src="{{ asset('/images/page-assets/campus-hero.png') }}" alt="{{ $page->title }}" class="w-full h-full object-cover">
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                        <h2 class="text-2xl font-bold text-slate-900">India's Leading Admission Advisory Team</h2>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            AdmissionsDekho operates as an independent educational consultancy helping thousands of students secure seats in top-ranked engineering, science, management, medical, nursing, and teacher training institutes.
                        </p>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Our panel of senior academic counselors provides 100% objective, transparent guidance on eligibility criteria, cutoff trends, fee waivers, and official university accreditations.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-6">
                        <h3 class="text-xl font-bold text-slate-900">Services Offered by AdmissionsDekho</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="p-4 bg-blue-50/50 rounded-2xl border border-blue-100">
                                <h4 class="font-bold text-blue-900 text-sm">1. Profile Evaluation & Rank Matching</h4>
                                <p class="text-xs text-slate-600 mt-1">Analyzing academic records to match realistic admission targets.</p>
                            </div>
                            <div class="p-4 bg-indigo-50/50 rounded-2xl border border-indigo-100">
                                <h4 class="font-bold text-indigo-900 text-sm">2. College Cutoff & Fee Comparison</h4>
                                <p class="text-xs text-slate-600 mt-1">Comparing hostal fees, tuition fees, and scholarship options.</p>
                            </div>
                            <div class="p-4 bg-emerald-50/50 rounded-2xl border border-emerald-100">
                                <h4 class="font-bold text-emerald-900 text-sm">3. Direct & Management Seats</h4>
                                <p class="text-xs text-slate-600 mt-1">Assisting with seat quota procedures per AICTE/UGC guidelines.</p>
                            </div>
                            <div class="p-4 bg-amber-50/50 rounded-2xl border border-amber-100">
                                <h4 class="font-bold text-amber-900 text-sm">4. Documentation & Education Loans</h4>
                                <p class="text-xs text-slate-600 mt-1">Assisting with bonafide certificate verification and loan letters.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4">
                    <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="{{ $page->title }}" />
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
                $pageTitle = $page->title ?? 'this Program';
                $faqs = [
                    ["q" => "1. What are the eligibility criteria for admissions in {$pageTitle}?", "a" => "Candidates must have completed 10+2 or a relevant graduation degree from a recognized board/university with required aggregate marks."],
                    ["q" => "2. Which entrance exams are accepted for {$pageTitle}?", "a" => "Admissions are based on national, state, or university-level entrance exams such as JEE Main, CUET, CAT, MAT, NEET, or direct university merit evaluation."],
                    ["q" => "3. What is the average course duration for {$pageTitle}?", "a" => "Course duration ranges from 3 to 4 years for undergraduate programs and 2 years for postgraduate master's degrees."],
                    ["q" => "4. What is the average fee structure for {$pageTitle} in India?", "a" => "Fees vary from ₹20,000 to ₹1,00,000 per year at government institutes, and ₹75,000 to ₹3,50,000 per year at top private colleges."],
                    ["q" => "5. Can candidates from different academic backgrounds apply?", "a" => "Yes, depending on course requirements, many programs accept students from Arts, Commerce, and Science backgrounds."],
                    ["q" => "6. What are the starting salary packages for {$pageTitle} graduates?", "a" => "Starting salary packages typically range from ₹4.5 LPA to ₹14+ LPA depending on candidate skills and recruiter accreditation."],
                    ["q" => "7. Are distance or online degree options available?", "a" => "Yes, top UGC-DEB approved universities offer recognized online and distance education programs for working professionals."],
                    ["q" => "8. What are the key career scope and job roles after {$pageTitle}?", "a" => "Graduates can secure roles in corporate firms, public sector undertakings (PSUs), government services, consultancies, or higher research."],
                    ["q" => "9. Is statutory approval (UGC / AICTE) mandatory for college degrees?", "a" => "Yes, selecting a UGC/AICTE statutory-approved institution ensures global degree validity and eligibility for government competitive exams."],
                    ["q" => "10. Can 12th board appearing candidates apply for entrance tests?", "a" => "Yes! Appearing candidates can register for entrance exams on a provisional basis."],
                    ["q" => "11. What documents are required during admission counseling?", "a" => "Standard documents include 10th/12th marksheets, entrance test rank card, migration certificate, ID proof, and passport photos."],
                    ["q" => "12. What is the difference between Honours and Pass degree courses?", "a" => "Honours degrees offer specialized subject depth and research projects compared to broader general pass degree courses."],
                    ["q" => "13. Are scholarships provided to deserving students?", "a" => "Yes, merit-cum-means scholarships, state government fee waivers, and NSP central scholarships are available for eligible students."],
                    ["q" => "14. Do colleges provide campus placement assistance?", "a" => "Statutory-approved institutes feature active placement cells hosting corporate placement drives annually."],
                    ["q" => "15. Are practical internships compulsory during the program?", "a" => "Yes, mandatory internships build real-world practical skills and industry networking."],
                    ["q" => "16. What higher education options are available post graduation?", "a" => "Graduates can pursue Master's programs (M.Tech, MBA, M.Sc, LLM) or competitive exams like GATE, NET, and Civil Services."],
                    ["q" => "17. What are top government job opportunities for {$pageTitle}?", "a" => "Options include PSUs, Defence, State Service Commissions, Banking, Railways, and Public Research Bodies."],
                    ["q" => "18. How to evaluate the best university for {$pageTitle}?", "a" => "Compare NIRF rankings, statutory approvals, faculty experience, laboratory infrastructure, placement stats, and total fee transparency."],
                    ["q" => "19. Which soft skills enhance employment prospects?", "a" => "Critical thinking, digital proficiency, communication, problem-solving, and adaptability boost career growth."],
                    ["q" => "20. How does AdmissionsDekho help in {$pageTitle} admissions?", "a" => "AdmissionsDekho provides 100% free expert counseling, cutoff analysis, fee comparisons, and application support."]
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
