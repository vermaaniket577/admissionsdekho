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

            <!-- Article Footer CTA Form Widget -->
            <div class="mt-14">
                <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="{{ $post->title }}" />
            </div>

        </div>
    </article>

</x-layout.app>
