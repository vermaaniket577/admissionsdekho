<x-layout.app :seo="$seo" :title="$post->title">

    <article class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Breadcrumb Navigation -->
            <nav class="flex text-xs font-semibold text-slate-500 gap-2 mb-6">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
                <span>/</span>
                <a href="{{ route('blog.index') }}" class="hover:text-blue-600">Blog</a>
                <span>/</span>
                <span class="text-slate-900 truncate max-w-xs">{{ $post->title }}</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                {{ $post->title }}
            </h1>

            <div class="flex items-center gap-4 text-xs font-semibold text-slate-500 pb-8 border-b border-slate-200 mb-8">
                <span>By AdmissionsDekho Expert Editorial Desk</span>
                <span>•</span>
                <span>Published on {{ $post->published_at?->format('F d, Y') ?? date('F d, Y') }}</span>
            </div>

            <!-- Featured Hero Image -->
            @if($post->featured_image)
                <div class="mb-8 rounded-3xl overflow-hidden shadow-lg border border-slate-200 bg-slate-100 max-h-[420px]">
                    <img src="{{ \Illuminate\Support\Str::startsWith($post->featured_image, 'data:image') ? $post->featured_image : asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            <!-- Excerpt Callout Box -->
            @if($post->excerpt)
                <div class="p-6 bg-blue-50/70 border-l-4 border-blue-600 rounded-r-2xl text-slate-700 text-base font-medium leading-relaxed mb-8">
                    {{ $post->excerpt }}
                </div>
            @endif

            <!-- Article Main Content -->
            <div class="prose prose-slate lg:prose-lg max-w-none space-y-6 text-slate-700 leading-relaxed">
                {!! $post->content !!}
            </div>

            <!-- ═══════════════════════════════════════════════════ -->
            <!-- FAQ Accordion Section                              -->
            <!-- ═══════════════════════════════════════════════════ -->
            @if(!empty($post->faqs) && count($post->faqs) > 0)
                <section class="mt-14 pt-10 border-t border-slate-200" id="faqs">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-8 flex items-center gap-3">
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-100 text-blue-600 text-lg">❓</span>
                        Frequently Asked Questions
                    </h2>

                    <div class="space-y-3" x-data="{ openIndex: 0 }">
                        @foreach($post->faqs as $index => $faq)
                            <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-md transition-shadow">
                                <!-- Question (Toggle Button) -->
                                <button type="button"
                                        @click="openIndex = (openIndex === {{ $index }}) ? null : {{ $index }}"
                                        class="w-full flex items-center justify-between px-6 py-4 text-left transition"
                                        :class="openIndex === {{ $index }} ? 'bg-blue-50 text-blue-900' : 'bg-white text-slate-900 hover:bg-slate-50'">
                                    <span class="font-bold text-sm sm:text-base pr-4">{{ $faq['question'] }}</span>
                                    <svg class="w-5 h-5 shrink-0 text-blue-600 transition-transform duration-300"
                                         :class="openIndex === {{ $index }} ? 'rotate-180' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>

                                <!-- Answer (Collapsible) -->
                                <div x-show="openIndex === {{ $index }}"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0 -translate-y-1"
                                     x-transition:enter-end="opacity-100 translate-y-0"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100 translate-y-0"
                                     x-transition:leave-end="opacity-0 -translate-y-1"
                                     class="px-6 pb-5 pt-2 text-slate-700 text-sm sm:text-base leading-relaxed border-t border-slate-100 bg-slate-50/50">
                                    {!! nl2br(e($faq['answer'])) !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                <!-- FAQ Schema Markup (JSON-LD) for Google Rich Results -->
                <script type="application/ld+json">
                {!! json_encode([
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect($post->faqs)->map(function ($faq) {
                        return [
                            '@type' => 'Question',
                            'name' => $faq['question'],
                            'acceptedAnswer' => [
                                '@type' => 'Answer',
                                'text' => $faq['answer'],
                            ],
                        ];
                    })->toArray(),
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
                </script>
            @endif

            <!-- Article Footer CTA Form Widget -->
            <div class="mt-14">
                <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="{{ $post->title }}" />
            </div>

        </div>
    </article>

</x-layout.app>
