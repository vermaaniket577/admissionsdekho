@extends('admin.layout')

@section('title', 'Write New Blog Article')
@section('header_title', 'Write New Blog Article')

@push('styles')
<!-- Quill.js WYSIWYG Editor CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
<style>
    /* Editor styling overrides for a clean Word-like experience */
    .ql-toolbar.ql-snow {
        border: none !important;
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0 !important;
        padding: 10px 14px !important;
        border-radius: 16px 16px 0 0;
    }
    .ql-container.ql-snow {
        border: none !important;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 15px;
        line-height: 1.8;
        color: #1e293b;
    }
    .ql-editor {
        min-height: 400px;
        padding: 24px !important;
    }
    .ql-editor.ql-blank::before {
        color: #94a3b8;
        font-style: normal;
        font-size: 15px;
    }
    .ql-editor h2 { font-size: 1.5em; font-weight: 800; color: #0f172a; margin: 1em 0 0.5em; }
    .ql-editor h3 { font-size: 1.25em; font-weight: 700; color: #1e293b; margin: 0.8em 0 0.4em; }
    .ql-editor p { margin-bottom: 0.8em; }
    .ql-editor a { color: #2563eb; text-decoration: underline; }
    .ql-editor ul, .ql-editor ol { padding-left: 1.5em; margin-bottom: 0.8em; }
    .ql-editor blockquote {
        border-left: 4px solid #2563eb;
        padding-left: 16px;
        margin: 1em 0;
        color: #475569;
        font-style: italic;
        background: #eff6ff;
        padding: 12px 16px;
        border-radius: 0 12px 12px 0;
    }
    .ql-editor img { max-width: 100%; border-radius: 12px; margin: 1em 0; }
    .ql-snow .ql-picker.ql-header .ql-picker-label::before { font-weight: 700; }

    /* Toolbar button hover & active states */
    .ql-snow .ql-toolbar button:hover,
    .ql-snow .ql-toolbar button.ql-active,
    .ql-snow .ql-toolbar .ql-picker-label:hover,
    .ql-snow .ql-toolbar .ql-picker-label.ql-active {
        color: #2563eb !important;
    }
    .ql-snow .ql-toolbar button:hover .ql-stroke,
    .ql-snow .ql-toolbar button.ql-active .ql-stroke {
        stroke: #2563eb !important;
    }
    .ql-snow .ql-toolbar button:hover .ql-fill,
    .ql-snow .ql-toolbar button.ql-active .ql-fill {
        fill: #2563eb !important;
    }
</style>
@endpush

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Top Action Link -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.blogs.index') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 flex items-center gap-2 transition">
            <span>← Back to All Articles</span>
        </a>
    </div>

    <!-- Form Container -->
    <form id="blogForm" action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 space-y-6 shadow-sm">
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

        <!-- ═══════════════════════════════════════════════════════════ -->
        <!-- WYSIWYG Editor (Quill.js) - Word-like Visual Editor       -->
        <!-- ═══════════════════════════════════════════════════════════ -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Full Article Body *</label>

            <div class="border border-slate-300 rounded-2xl overflow-hidden bg-white shadow-sm focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500">
                <!-- Quill Toolbar -->
                <div id="quill-toolbar">
                    <span class="ql-formats">
                        <select class="ql-header">
                            <option value="">Normal Text</option>
                            <option value="2">Heading 2</option>
                            <option value="3">Heading 3</option>
                        </select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold" title="Bold"></button>
                        <button class="ql-italic" title="Italic"></button>
                        <button class="ql-underline" title="Underline"></button>
                        <button class="ql-strike" title="Strikethrough"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-color" title="Text Color"></select>
                        <select class="ql-background" title="Background Color"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-list" value="ordered" title="Numbered List"></button>
                        <button class="ql-list" value="bullet" title="Bullet List"></button>
                        <button class="ql-blockquote" title="Quote Block"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link" title="Insert Link"></button>
                        <button class="ql-image" title="Insert Image"></button>
                        <button class="ql-video" title="Embed Video"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-align" title="Text Alignment"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-clean" title="Clear Formatting"></button>
                    </span>
                </div>

                <!-- Quill Editor Container -->
                <div id="quill-editor">{!! old('content') !!}</div>
            </div>

            <!-- Hidden textarea for form submission -->
            <textarea name="content" id="quill-content-input" class="hidden"></textarea>
        </div>

        <!-- ═══════════════════════════════════════════════════════════ -->
        <!-- FAQ Builder Section                                        -->
        <!-- ═══════════════════════════════════════════════════════════ -->
        <div x-data="faqBuilder()" class="space-y-4">
            <div class="flex items-center justify-between">
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700">
                    <span class="flex items-center gap-2">❓ Frequently Asked Questions (FAQ)</span>
                </label>
                <button type="button" @click="addFaq()"
                        class="inline-flex items-center gap-1.5 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-sm transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Add FAQ
                </button>
            </div>

            <p class="text-xs text-slate-500 font-medium" x-show="faqs.length === 0">No FAQs added yet. Click "Add FAQ" to create question & answer pairs for this article. FAQs improve SEO with Google rich results.</p>

            <!-- FAQ Items -->
            <template x-for="(faq, index) in faqs" :key="index">
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 space-y-3 relative group">
                    <!-- FAQ Number Badge & Delete -->
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-2 text-xs font-extrabold text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                            <span>Q</span><span x-text="index + 1"></span>
                        </span>
                        <button type="button" @click="removeFaq(index)"
                                class="opacity-0 group-hover:opacity-100 p-1.5 rounded-lg bg-red-50 text-red-500 hover:bg-red-100 hover:text-red-700 transition" title="Remove this FAQ">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </div>

                    <!-- Question -->
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">Question</label>
                        <input type="text" x-model="faq.question" :name="'faqs[' + index + '][question]'"
                               placeholder="e.g. What is the eligibility criteria for B.Tech admission?"
                               class="w-full bg-white border border-slate-200 focus:border-blue-500 text-slate-900 text-sm rounded-xl px-4 py-2.5 outline-none transition font-semibold">
                    </div>

                    <!-- Answer -->
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">Answer</label>
                        <textarea x-model="faq.answer" :name="'faqs[' + index + '][answer]'" rows="3"
                                  placeholder="Provide a clear, concise answer..."
                                  class="w-full bg-white border border-slate-200 focus:border-blue-500 text-slate-900 text-sm rounded-xl px-4 py-2.5 outline-none transition leading-relaxed"></textarea>
                    </div>
                </div>
            </template>

            <!-- Add More Button (bottom) -->
            <div x-show="faqs.length > 0" class="flex justify-center">
                <button type="button" @click="addFaq()"
                        class="inline-flex items-center gap-1.5 px-5 py-2.5 border-2 border-dashed border-slate-300 hover:border-blue-400 text-slate-500 hover:text-blue-600 text-xs font-bold rounded-xl transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    Add Another FAQ
                </button>
            </div>
        </div>

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

@push('scripts')
<!-- Quill.js -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    // Initialize Quill WYSIWYG Editor
    const quill = new Quill('#quill-editor', {
        modules: {
            toolbar: '#quill-toolbar'
        },
        theme: 'snow',
        placeholder: 'Start writing your article here... Just type like you would in Microsoft Word.',
    });

    function syncQuillContent() {
        const content = quill.root.innerHTML;
        if (content === '<p><br></p>' || content.trim() === '') {
            document.getElementById('quill-content-input').value = '';
        } else {
            document.getElementById('quill-content-input').value = content;
        }
    }

    quill.on('text-change', syncQuillContent);

    // Sync Quill content to hidden textarea on form submit
    document.getElementById('blogForm').addEventListener('submit', function(e) {
        syncQuillContent();
    });

    // If old content exists (validation failure), load it
    @if(old('content'))
        quill.root.innerHTML = @js(old('content'));
    @endif

    // FAQ Builder Alpine Component
    function faqBuilder() {
        return {
            faqs: @js(old('faqs', [])),

            addFaq() {
                this.faqs.push({ question: '', answer: '' });
            },

            removeFaq(index) {
                this.faqs.splice(index, 1);
            }
        }
    }
</script>
@endpush
