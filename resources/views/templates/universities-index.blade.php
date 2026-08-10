<x-layout.app :seo="$seo" :title="$page->title">

    <!-- Hero Header -->
    <section class="bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 text-white py-14 sm:py-20 border-b border-slate-800 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-400 transition">Home</a>
                <span>/</span>
                <span class="text-amber-400 font-bold">Universities Directory</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/30 text-blue-400 font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                        🏛️ STATUTORY APPROVED UNIVERSITIES
                    </span>
                    <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
                        Top Universities & Partner Institutions in India
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                        Explore UGC, NAAC, AICTE, BCI, and PCI statutory recognized universities. Compare admission eligibility, opening/closing cutoffs, fee structures, and placement packages.
                    </p>
                </div>

                <!-- Live Search Bar -->
                <div class="lg:col-span-4" x-data="{ term: '' }" @input="$dispatch('filter-colleges', term)">
                    <div class="bg-slate-900/90 border border-slate-700/80 rounded-2xl p-4 shadow-2xl backdrop-blur-xl space-y-2">
                        <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider">Search University or City</label>
                        <div class="relative">
                            <input type="text" x-model="term" placeholder="Search Amity, LPU, Bhopal, Gurgaon..." 
                                   class="w-full bg-slate-950 border border-slate-700 focus:border-amber-400 text-white rounded-xl pl-10 pr-4 py-2.5 text-xs outline-none transition">
                            <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- University Listing Grid -->
    <section class="py-14 sm:py-20 bg-slate-50 min-h-screen" x-data="{ filterTerm: '' }" @filter-colleges.window="filterTerm = $event.detail.toLowerCase()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <div class="flex items-center justify-between">
                <div>
                    <span class="text-xs font-mono font-bold text-blue-600 uppercase tracking-widest">PARTNER INSTITUTIONS</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">Approved Colleges & Universities</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($colleges as $univ)
                    <div x-show="!filterTerm || '{{ strtolower($univ->name . ' ' . $univ->location . ' ' . $univ->approval_body) }}'.includes(filterTerm)"
                         class="group bg-white rounded-3xl border border-slate-200 p-7 hover:border-blue-500 hover:shadow-xl transition-all flex flex-col justify-between space-y-6">
                        
                        <div class="space-y-4">
                            <div class="flex justify-between items-start">
                                <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 text-blue-600 font-extrabold flex items-center justify-center text-xl group-hover:scale-110 transition">
                                    🏛️
                                </div>
                                <span class="bg-amber-50 text-amber-800 border border-amber-200 text-[11px] font-extrabold px-2.5 py-1 rounded-full">
                                    ★ {{ $univ->rating }} / 5.0
                                </span>
                            </div>

                            <div class="space-y-1">
                                <h3 class="text-lg font-extrabold text-slate-900 group-hover:text-blue-600 transition">
                                    {{ $univ->name }}
                                </h3>
                                <p class="text-xs text-slate-500 font-medium">📍 {{ $univ->location }}</p>
                            </div>

                            <div class="p-3 bg-slate-50 rounded-2xl border border-slate-200/80 text-xs space-y-1">
                                <div class="flex justify-between text-slate-600">
                                    <span>Accreditation:</span>
                                    <strong class="text-slate-900 font-bold">{{ $univ->approval_body }}</strong>
                                </div>
                                <div class="flex justify-between text-slate-600">
                                    <span>Offered Courses:</span>
                                    <strong class="text-blue-600 font-bold">{{ $univ->total_courses }}+ Degrees</strong>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ url('/universities/' . $univ->slug) }}" 
                               class="text-xs font-extrabold text-blue-600 group-hover:text-blue-700 flex items-center gap-1 group-hover:gap-2 transition-all">
                                <span>View University Details</span>
                                <span>→</span>
                            </a>

                            <button @click="isModalOpen = true; modalTitle = 'Apply to {{ $univ->name }}'; selectedCourse = '{{ $univ->name }} Inquiry'"
                                    class="bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs px-3.5 py-2 rounded-xl transition">
                                Apply
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

</x-layout.app>
