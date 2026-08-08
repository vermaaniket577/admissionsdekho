@props([
    'title' => 'Get in Touch with Our Admission Experts',
    'subtitle' => null,
    'streamInterest' => 'General Enquiry',
    'cardClass' => ''
])

<div class="w-full">
    @if($title)
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight mb-6">{{ $title }}</h2>
    @endif
    @if($subtitle)
        <p class="text-slate-600 text-sm mb-6 -mt-4">{{ $subtitle }}</p>
    @endif

    <div class="bg-white p-6 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200/80 shadow-md {{ $cardClass }}">
        <div x-data="expertAdmissionForm('{{ addslashes($streamInterest) }}')">
            <!-- Success State -->
            <div x-show="submitted" class="text-center py-8" style="display: none;">
                <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-extrabold text-slate-900 mb-2">Message Sent Successfully!</h3>
                <p class="text-sm text-slate-600 mb-6" x-text="successMessage"></p>
                <button @click="resetForm()" class="bg-[#0052cc] hover:bg-[#0043ad] text-white font-bold text-sm px-6 py-2.5 rounded-xl shadow-md transition">
                    Submit Another Message
                </button>
            </div>

            <!-- Form Fields State -->
            <form x-show="!submitted" @submit.prevent="submitForm" class="space-y-5">
                <!-- Name Field (First & Last) -->
                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Name <span class="text-red-500">*</span></label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <input type="text" x-model="formData.first_name" required placeholder="First"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none text-slate-900 placeholder-slate-400 text-sm transition">
                        </div>
                        <div>
                            <input type="text" x-model="formData.last_name" required placeholder="Last"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none text-slate-900 placeholder-slate-400 text-sm transition">
                        </div>
                    </div>
                </div>

                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Email <span class="text-red-500">*</span></label>
                    <input type="email" x-model="formData.email" required placeholder="you@example.com"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none text-slate-900 placeholder-slate-400 text-sm transition">
                    <span x-show="errors.email" class="text-xs text-red-600 mt-1 block" x-text="errors.email ? errors.email[0] : ''"></span>
                </div>

                <!-- Phone Number Field -->
                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Phone Number <span class="text-red-500">*</span></label>
                    <input type="tel" x-model="formData.phone" maxlength="10" required placeholder="10-digit phone"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none text-slate-900 placeholder-slate-400 text-sm transition">
                    <span x-show="errors.phone" class="text-xs text-red-600 mt-1 block" x-text="errors.phone ? errors.phone[0] : ''"></span>
                </div>

                <!-- Message Field -->
                <div>
                    <label class="block text-sm font-semibold text-slate-800 mb-2">Message <span class="text-red-500">*</span></label>
                    <textarea x-model="formData.message" rows="4" required placeholder="Your message here..."
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-600 focus:ring-2 focus:ring-blue-100 outline-none text-slate-900 placeholder-slate-400 text-sm transition resize-y"></textarea>
                </div>

                <!-- Error Alert -->
                <div x-show="errorMessage" class="p-3 bg-red-50 text-red-700 rounded-xl text-xs font-semibold" x-text="errorMessage"></div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit" :disabled="loading"
                            class="bg-[#0052cc] hover:bg-[#0043ad] text-white font-bold text-sm px-7 py-3 rounded-xl shadow-md transition-colors duration-200 flex items-center justify-center disabled:opacity-50">
                        <span x-show="!loading">Submit</span>
                        <span x-show="loading" style="display: none;">Submitting...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    if (typeof expertAdmissionForm === 'undefined') {
        function expertAdmissionForm(streamInterest = 'General Enquiry') {
            return {
                formData: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone: '',
                    message: '',
                    stream_interest: streamInterest
                },
                loading: false,
                submitted: false,
                errors: {},
                errorMessage: '',
                successMessage: '',
                submitForm() {
                    this.errors = {};
                    this.errorMessage = '';

                    const phoneRegex = /^[6-9]\d{9}$/;
                    if (!phoneRegex.test(this.formData.phone)) {
                        this.errors.phone = ['Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.'];
                        return;
                    }

                    this.loading = true;

                    const payload = {
                        first_name: this.formData.first_name,
                        last_name: this.formData.last_name,
                        full_name: (this.formData.first_name + ' ' + this.formData.last_name).trim(),
                        email: this.formData.email,
                        phone: this.formData.phone,
                        message: this.formData.message,
                        notes: this.formData.message,
                        stream_interest: this.formData.stream_interest,
                        pageRef: window.location.pathname
                    };

                    fetch('{{ route("lead.submit") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify(payload)
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.loading = false;
                        if (data.success) {
                            this.submitted = true;
                            this.successMessage = data.message;
                        } else {
                            if (data.errors) {
                                this.errors = data.errors;
                            } else {
                                this.errorMessage = data.message || 'Error submitting form. Please try again.';
                            }
                        }
                    })
                    .catch(err => {
                        this.loading = false;
                        this.errorMessage = 'Network error. Please try again.';
                    });
                },
                resetForm() {
                    this.formData = {
                        first_name: '',
                        last_name: '',
                        email: '',
                        phone: '',
                        message: '',
                        stream_interest: streamInterest
                    };
                    this.submitted = false;
                    this.errors = {};
                    this.errorMessage = '';
                }
            };
        }
    }
</script>
