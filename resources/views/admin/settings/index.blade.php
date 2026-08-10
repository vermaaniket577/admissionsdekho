@extends('admin.layout')

@section('title', 'Website Contact & General Settings')
@section('header_title', 'Website Contact & General Settings')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Page Action Bar -->
    <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-xs flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-xl font-extrabold text-slate-900">Website Contact & Helpline Settings</h2>
            <p class="text-xs text-slate-500 mt-1">Changes made here automatically update default contact details across all pages, footers, headers, and contact cards.</p>
        </div>
    </div>

    <!-- Form Container -->
    <form action="{{ route('admin.settings.update') }}" method="POST" class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 space-y-6 shadow-xs">
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

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Primary Contact Phone Number -->
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Primary Helpline Mobile / Phone Number *</label>
                <div class="relative">
                    <input type="text" name="contact_phone" value="{{ old('contact_phone', $settings['contact_phone']) }}" required
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                    <span class="absolute left-3.5 top-3 text-base">📞</span>
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Used in top bar, call buttons, and header telephone links.</p>
            </div>

            <!-- WhatsApp Mobile Number -->
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">WhatsApp Official Number *</label>
                <div class="relative">
                    <input type="text" name="whatsapp_number" value="{{ old('whatsapp_number', $settings['whatsapp_number']) }}" required
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                    <span class="absolute left-3.5 top-3 text-base">💬</span>
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Used for floating WhatsApp widgets and quick student chats.</p>
            </div>

            <!-- Contact Email Address -->
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Support Email Address *</label>
                <div class="relative">
                    <input type="email" name="contact_email" value="{{ old('contact_email', $settings['contact_email']) }}" required
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                    <span class="absolute left-3.5 top-3 text-base">✉️</span>
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Displayed in website footer and contact inquiry desk.</p>
            </div>

            <!-- Website Brand / Site Name -->
            <div>
                <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Website Brand Name *</label>
                <div class="relative">
                    <input type="text" name="site_name" value="{{ old('site_name', $settings['site_name']) }}" required
                           class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                    <span class="absolute left-3.5 top-3 text-base">🏛️</span>
                </div>
                <p class="text-[11px] text-slate-500 mt-1">Official brand title displayed across headers and footers.</p>
            </div>

        </div>

        <!-- Office Address -->
        <div>
            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Head Office Address *</label>
            <textarea name="contact_address" rows="2" required
                      class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 text-sm font-medium rounded-xl p-4 outline-none transition leading-relaxed">{{ old('contact_address', $settings['contact_address']) }}</textarea>
            <p class="text-[11px] text-slate-500 mt-1">Official postal address shown on Contact Us page and footer widgets.</p>
        </div>

        <!-- Social Media Links Section -->
        <div class="pt-6 border-t border-slate-200/80 space-y-4">
            <div>
                <h3 class="text-base font-extrabold text-slate-900 flex items-center gap-2">
                    <span>🌐 Social Media Profile & Channel Links</span>
                </h3>
                <p class="text-xs text-slate-500 mt-0.5">Control official social media page links displayed in website footers and floating contact channels.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- LinkedIn URL -->
                <div>
                    <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">LinkedIn Page URL</label>
                    <div class="relative">
                        <input type="url" name="social_linkedin" value="{{ old('social_linkedin', $settings['social_linkedin']) }}" placeholder="https://linkedin.com/company/yourbrand"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                        <span class="absolute left-3.5 top-3 text-base">💼</span>
                    </div>
                </div>

                <!-- Facebook URL -->
                <div>
                    <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Facebook Page URL</label>
                    <div class="relative">
                        <input type="url" name="social_facebook" value="{{ old('social_facebook', $settings['social_facebook']) }}" placeholder="https://facebook.com/yourbrand"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                        <span class="absolute left-3.5 top-3 text-base">📘</span>
                    </div>
                </div>

                <!-- Instagram URL -->
                <div>
                    <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">Instagram Profile URL</label>
                    <div class="relative">
                        <input type="url" name="social_instagram" value="{{ old('social_instagram', $settings['social_instagram']) }}" placeholder="https://instagram.com/yourbrand"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                        <span class="absolute left-3.5 top-3 text-base">📸</span>
                    </div>
                </div>

                <!-- YouTube URL -->
                <div>
                    <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">YouTube Channel URL</label>
                    <div class="relative">
                        <input type="url" name="social_youtube" value="{{ old('social_youtube', $settings['social_youtube']) }}" placeholder="https://youtube.com/@yourbrand"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                        <span class="absolute left-3.5 top-3 text-base">▶️</span>
                    </div>
                </div>

                <!-- WhatsApp Direct Link -->
                <div class="md:col-span-2">
                    <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-700 mb-2">WhatsApp Direct Link / wa.me URL</label>
                    <div class="relative">
                        <input type="url" name="social_whatsapp" value="{{ old('social_whatsapp', $settings['social_whatsapp']) }}" placeholder="https://wa.me/919643802216"
                               class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-3 text-sm font-semibold outline-none transition">
                        <span class="absolute left-3.5 top-3 text-base">🟢</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-1">Direct click link for student instant chat support.</p>
                </div>

            </div>
        </div>

        <!-- Submit Button Bar -->
        <div class="pt-4 border-t border-slate-100 flex justify-end">
            <button type="submit" class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold text-xs px-8 py-3.5 rounded-xl shadow-md shadow-blue-600/20 transition flex items-center gap-2">
                <span>Save All Website Settings</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </button>
        </div>

    </form>
</div>
@endsection
