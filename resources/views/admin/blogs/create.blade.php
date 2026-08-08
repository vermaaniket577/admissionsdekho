@extends('admin.layout')

@section('title', 'Write New Blog Article')
@section('header_title', 'Write New Blog Article')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Top Action Link -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.blogs.index') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 flex items-center gap-2 transition">
            <span>← Back to All Articles</span>
        </a>
    </div>

    <!-- Form Container -->
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 space-y-6 shadow-sm">
        @csrf

        @if ($errors->any())
            <div class="p-4 bg-red-50 border border-red-200 text-red-700 rounded-2xl text-xs space-y-1">
                <span class="font-bold block text-sm mb-1">Please correct the following errors:</span>
                <ul class="list-disc pl-5 space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Title -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Article Title *</label>
            <input type="text" name="title" value="{{ old('title') }}" required placeholder="e.g. Top B.Tech Colleges in Delhi NCR 2026: Fees & Admissions"
                   class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl px-4 py-3 text-sm font-semibold outline-none transition">
        </div>

        <!-- Custom Slug (Optional) -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Custom URL Slug (Optional - Auto-generated if left empty)</label>
            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="e.g. top-btech-colleges-delhi-ncr-2026"
                   class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-700 font-mono text-xs rounded-xl px-4 py-3 outline-none transition">
        </div>

        <!-- Excerpt -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Short Summary / Excerpt</label>
            <textarea name="excerpt" rows="3" placeholder="Brief 2-3 sentence overview displayed on blog list cards and Google search previews..."
                      class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 text-sm rounded-xl px-4 py-3 outline-none transition">{{ old('excerpt') }}</textarea>
        </div>

        <!-- Featured Image -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-slate-50 p-5 rounded-2xl border border-slate-200">
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Upload Featured Image</label>
                <input type="file" name="featured_image" accept="image/*"
                       class="w-full text-xs text-slate-600 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-blue-600 file:text-white hover:file:bg-blue-700">
            </div>
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">OR Image Asset URL</label>
                <input type="text" name="featured_image_url" value="{{ old('featured_image_url') }}" placeholder="/images/blogs/engineering-guide.png"
                       class="w-full bg-white border border-slate-300 focus:border-blue-500 text-slate-800 text-xs rounded-xl px-4 py-2.5 outline-none font-mono">
            </div>
        </div>

        <!-- Main Content Editor with Rich Formatting Toolbar -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Full Article Body *</label>

            <!-- Alpine.js Rich Text Editor Toolbar Component -->
            <div x-data="richTextEditor({ initialValue: '{{ old('content') }}' })" class="border border-slate-300 rounded-2xl overflow-hidden bg-white shadow-sm focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500">

                <!-- Formatting Toolbar Bar -->
                <div class="bg-slate-100/90 border-b border-slate-200 p-2 sm:p-3 flex flex-wrap items-center gap-1.5 text-xs select-none">
                    
                    <!-- Headings Group -->
                    <div class="flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200 shadow-2xs">
                        <button type="button" @click="insertTag('<h2>', '</h2>')" title="Heading 2 (H2)" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-black text-slate-800 transition">H2</button>
                        <button type="button" @click="insertTag('<h3>', '</h3>')" title="Heading 3 (H3)" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-slate-700 transition">H3</button>
                        <button type="button" @click="insertTag('<p>', '</p>')" title="Paragraph (P)" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-medium text-slate-600 transition">P</button>
                    </div>

                    <div class="h-5 w-px bg-slate-300 mx-1"></div>

                    <!-- Text Styling Group -->
                    <div class="flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200 shadow-2xs">
                        <button type="button" @click="insertTag('<strong>', '</strong>')" title="Bold" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-black text-slate-900 transition">B</button>
                        <button type="button" @click="insertTag('<em>', '</em>')" title="Italic" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded italic text-slate-800 transition">I</button>
                        <button type="button" @click="insertTag('<u>', '</u>')" title="Underline" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded underline text-slate-800 transition">U</button>
                        <button type="button" @click="insertTag('<mark class=\'bg-amber-200 text-slate-900 px-1.5 py-0.5 rounded font-semibold\'>', '</mark>')" title="Highlight Text" class="px-2.5 py-1 hover:bg-amber-100 rounded font-bold text-amber-800 transition">🎨</button>
                    </div>

                    <div class="h-5 w-px bg-slate-300 mx-1"></div>

                    <!-- Lists & Structure Group -->
                    <div class="flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200 shadow-2xs">
                        <button type="button" @click="insertList('ul')" title="Bullet List" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-slate-800 transition">• List</button>
                        <button type="button" @click="insertList('ol')" title="Numbered List" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-slate-800 transition">1. List</button>
                        <button type="button" @click="insertTag('<blockquote class=\'border-l-4 border-blue-600 pl-4 py-2 my-4 italic text-slate-700 bg-blue-50/60 rounded-r-xl\'>\n  ', '\n</blockquote>')" title="Blockquote" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded text-slate-800 font-serif font-bold transition">“ Quote</button>
                    </div>

                    <div class="h-5 w-px bg-slate-300 mx-1"></div>

                    <!-- Embeds & Elements Group -->
                    <div class="flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200 shadow-2xs">
                        <button type="button" @click="insertLink()" title="Insert Link" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-blue-600 transition">🔗 Link</button>
                        <button type="button" @click="insertCallout()" title="Insert Highlight Callout Box" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-indigo-600 transition">💡 Callout</button>
                        <button type="button" @click="insertTable()" title="Insert Comparison Table" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-emerald-600 transition">📊 Table</button>
                        <button type="button" @click="insertImagePrompt()" title="Insert Image Tag" class="px-2.5 py-1 hover:bg-blue-50 hover:text-blue-600 rounded font-bold text-purple-600 transition">🖼️ Image</button>
                    </div>

                    <!-- Mode Toggle Tabs (Code Editor vs Live Visual Preview) -->
                    <div class="ml-auto flex items-center gap-1 bg-slate-200/80 p-1 rounded-xl">
                        <button type="button" @click="mode = 'editor'" :class="mode === 'editor' ? 'bg-white text-slate-900 font-bold shadow-xs' : 'text-slate-600 font-medium hover:text-slate-900'" class="px-3 py-1 rounded-lg transition text-xs">
                            ✏️ Code Editor
                        </button>
                        <button type="button" @click="mode = 'preview'" :class="mode === 'preview' ? 'bg-blue-600 text-white font-bold shadow-xs' : 'text-slate-600 font-medium hover:text-slate-900'" class="px-3 py-1 rounded-lg transition text-xs">
                            👁️ Live Preview
                        </button>
                    </div>
                </div>

                <!-- Code Editor Mode -->
                <div x-show="mode === 'editor'">
                    <textarea x-ref="textarea" name="content" x-model="content" rows="14" required placeholder="Write full article body here or click any tool on the toolbar above to auto-insert tags..."
                              class="w-full bg-white text-slate-900 text-sm font-mono p-4 outline-none leading-relaxed resize-y border-0 focus:ring-0"></textarea>
                </div>

                <!-- Live Rendered Preview Mode -->
                <div x-show="mode === 'preview'" class="p-6 bg-slate-50 min-h-[320px] max-h-[500px] overflow-y-auto border-t border-slate-200">
                    <div class="prose prose-slate max-w-none prose-headings:font-bold prose-a:text-blue-600 leading-relaxed" x-html="content || '<p class=\'text-slate-400 italic\'>Nothing to preview yet. Start typing in the editor...</p>'"></div>
                </div>

            </div>
        </div>

        <script>
            function richTextEditor(config) {
                return {
                    mode: 'editor',
                    content: config.initialValue || '',
                    
                    insertTag(startTag, endTag) {
                        const textarea = this.$refs.textarea;
                        const start = textarea.selectionStart;
                        const end = textarea.selectionEnd;
                        const selectedText = this.content.substring(start, end) || 'Insert your heading/text here';
                        const replacement = startTag + selectedText + endTag;
                        
                        this.content = this.content.substring(0, start) + replacement + this.content.substring(end);
                        
                        this.$nextTick(() => {
                            textarea.focus();
                            textarea.setSelectionRange(start + startTag.length, start + startTag.length + selectedText.length);
                        });
                    },

                    insertList(type) {
                        const tag = type === 'ol' ? 'ol' : 'ul';
                        const listHtml = `\n<${tag} class="list-disc pl-6 space-y-1.5 my-4 text-slate-800">\n  <li>First key highlight or requirement</li>\n  <li>Second key highlight or requirement</li>\n  <li>Third key highlight or requirement</li>\n</${tag}>\n`;
                        this.insertAtCursor(listHtml);
                    },

                    insertLink() {
                        const url = prompt('Enter Destination URL:', 'https://admissionsdekho.com');
                        if (url) {
                            const text = prompt('Enter Anchor Text:', 'Click Here');
                            const linkHtml = `<a href="${url}" class="text-blue-600 font-bold underline hover:text-blue-800">${text || url}</a>`;
                            this.insertAtCursor(linkHtml);
                        }
                    },

                    insertCallout() {
                        const calloutHtml = `\n<div class="my-6 p-4 rounded-2xl bg-blue-50 border-l-4 border-blue-600 text-slate-800 text-sm font-medium shadow-sm">\n  💡 <strong>Key Admission Tip:</strong> Add important cut-off advice or deadline alerts here.\n</div>\n`;
                        this.insertAtCursor(calloutHtml);
                    },

                    insertTable() {
                        const tableHtml = `\n<div class="overflow-x-auto my-6">\n  <table class="w-full border-collapse border border-slate-200 text-left text-sm rounded-xl overflow-hidden">\n    <thead>\n      <tr class="bg-slate-100 text-slate-900 font-bold">\n        <th class="border border-slate-200 p-3">Institution Name</th>\n        <th class="border border-slate-200 p-3">Expected Cutoff Rank</th>\n        <th class="border border-slate-200 p-3">Annual Fee</th>\n      </tr>\n    </thead>\n    <tbody>\n      <tr class="hover:bg-slate-50">\n        <td class="border border-slate-200 p-3">IIT Delhi</td>\n        <td class="border border-slate-200 p-3">AIR 105 - 450</td>\n        <td class="border border-slate-200 p-3">₹2,20,000</td>\n      </tr>\n      <tr class="hover:bg-slate-50">\n        <td class="border border-slate-200 p-3">MAIT Delhi (GGSIPU)</td>\n        <td class="border border-slate-200 p-3">AIR 35,000 - 60,000</td>\n        <td class="border border-slate-200 p-3">₹1,45,000</td>\n      </tr>\n    </tbody>\n  </table>\n</div>\n`;
                        this.insertAtCursor(tableHtml);
                    },

                    insertImagePrompt() {
                        const imgUrl = prompt('Enter Image Asset URL:', '/images/blogs/sample.jpg');
                        if (imgUrl) {
                            const altText = prompt('Enter Image Caption/Alt Text:', 'College Campus Overview');
                            const imgHtml = `\n<figure class="my-6">\n  <img src="${imgUrl}" alt="${altText}" class="w-full rounded-2xl shadow-md border border-slate-200 object-cover">\n  <figcaption class="text-center text-xs text-slate-500 mt-2 font-medium">${altText}</figcaption>\n</figure>\n`;
                            this.insertAtCursor(imgHtml);
                        }
                    },

                    insertAtCursor(textToInsert) {
                        const textarea = this.$refs.textarea;
                        const start = textarea.selectionStart;
                        const end = textarea.selectionEnd;
                        this.content = this.content.substring(0, start) + textToInsert + this.content.substring(end);
                        this.$nextTick(() => {
                            textarea.focus();
                            textarea.setSelectionRange(start + textToInsert.length, start + textToInsert.length);
                        });
                    }
                }
            }
        </script>

        <!-- SEO Metadata Box -->
        <div class="bg-blue-50/50 p-6 rounded-2xl border border-blue-100 space-y-4">
            <h3 class="font-extrabold text-sm text-blue-900 flex items-center gap-2">
                <span>🔍</span> Search Engine Optimization (SEO Metadata)
            </h3>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">SEO Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" placeholder="SEO Optimized Title for Google"
                           class="w-full bg-white border border-slate-200 text-slate-900 text-xs rounded-xl px-4 py-2.5 outline-none focus:border-blue-500">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Meta Description</label>
                    <textarea name="meta_description" rows="2" placeholder="Search engine snippet text (150-160 characters)..."
                              class="w-full bg-white border border-slate-200 text-slate-900 text-xs rounded-xl px-4 py-2.5 outline-none focus:border-blue-500">{{ old('meta_description') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Status & Submit Bar -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-100">
            <div class="flex items-center gap-4 w-full sm:w-auto">
                <label class="text-xs font-extrabold uppercase tracking-wider text-slate-700">Publishing Status:</label>
                <select name="status" class="bg-white border border-slate-300 text-slate-900 text-xs font-bold rounded-xl px-4 py-2.5 outline-none">
                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>🚀 Published Immediately</option>
                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>📝 Save as Draft</option>
                </select>
            </div>

            <div class="flex items-center gap-3 w-full sm:w-auto">
                <a href="{{ route('admin.blogs.index') }}" class="w-1/2 sm:w-auto text-center px-5 py-3 rounded-xl border border-slate-300 text-slate-600 hover:bg-slate-100 font-bold text-xs">
                    Cancel
                </a>
                <button type="submit" class="w-1/2 sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold text-xs px-6 py-3 rounded-xl shadow-md shadow-blue-600/20 transition">
                    Publish Article
                </button>
            </div>
        </div>

    </form>
</div>
@endsection
