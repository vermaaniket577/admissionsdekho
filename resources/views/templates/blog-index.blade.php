<x-layout.app :seo="$seo" title="Education Blog & Admission Guides">

    <section class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
            <span class="bg-blue-600/30 text-blue-300 font-extrabold text-xs uppercase px-3 py-1 rounded-full border border-blue-500/40">Latest Articles & Updates</span>
            <h1 class="text-3xl sm:text-5xl font-extrabold mt-3">Education Blog & Career Guides</h1>
            <p class="text-slate-300 text-sm sm:text-base mt-3">Explore expert insights on courses after 12th, top college rankings, entrance exam notifications, and career salary guides.</p>
        </div>
    </section>

    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all flex flex-col justify-between group">
                        
                        <!-- Blog Post Image -->
                        @if($post->featured_image)
                            <a href="{{ route('blog.show', $post->slug) }}" class="h-48 sm:h-52 overflow-hidden relative block bg-slate-100">
                                <img src="{{ \Illuminate\Support\Str::startsWith($post->featured_image, 'data:image') ? $post->featured_image : asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </a>
                        @endif

                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center gap-2 text-xs font-semibold text-blue-600 mb-3">
                                    <span>📅 {{ $post->published_at?->format('M d, Y') ?? 'Recent' }}</span>
                                    <span>•</span>
                                    <span>Admission Guide</span>
                                </div>
                                <h2 class="text-lg sm:text-xl font-extrabold text-slate-900 leading-snug hover:text-blue-600 transition">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h2>
                                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 mt-2">
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-3 border-t border-slate-100 flex justify-between items-center">
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-extrabold text-blue-600 hover:underline flex items-center gap-1">
                                <span>Read Full Article</span>
                                <span>→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>

            <div class="mt-16 max-w-4xl mx-auto">
                <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="Blog Index Page" />
            </div>
        </div>
    </section>

</x-layout.app>
