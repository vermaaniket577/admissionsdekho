<div x-show="isModalOpen"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-50 overflow-y-auto"
     style="display: none;">

    <!-- Backdrop -->
    <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity" x-on:click="isModalOpen = false"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div x-show="isModalOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-slate-100">

            <!-- Modal Close Button -->
            <button x-on:click="isModalOpen = false" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 bg-slate-100 p-2 rounded-full z-10 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div x-data="leadModalForm()" class="p-6 sm:p-8">
                <!-- Header Banner inside Modal -->
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 mb-3 font-bold">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-slate-900 tracking-tight" x-text="modalTitle">Get Free Admission Counselling</h3>
                    <p class="text-xs text-slate-500 mt-1">Talk to expert counselors for 120+ UGC & AICTE approved colleges</p>
                </div>

                <!-- Success Screen State -->
                <div x-show="submitted" class="text-center py-8" style="display: none;">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Enquiry Received!</h4>
                    <p class="text-sm text-slate-600 mb-6" x-text="successMessage"></p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                        <a :href="'https://wa.me/919643802216?text=' + encodeURIComponent('🎓 *New Admission Inquiry*\n\n👤 Name: ' + formData.full_name + '\n📞 Phone: ' + formData.phone + '\n🎓 Stream: ' + formData.stream_interest + '\n\nPlease guide me for 1:1 counseling!')"
                           target="_blank"
                           class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold px-6 py-2.5 rounded-xl transition flex items-center justify-center gap-2 shadow-lg">
                            <span>💬 Send to WhatsApp (+91 9643802216)</span>
                        </a>
                        <button x-on:click="isModalOpen = false; resetForm()" class="w-full sm:w-auto bg-slate-800 hover:bg-slate-700 text-white font-bold px-6 py-2.5 rounded-xl transition">
                            Close Window
                        </button>
                    </div>
                </div>

                <!-- Form Inputs State -->
                <form x-show="!submitted" x-on:submit.prevent="submitForm">
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.full_name" required placeholder="e.g. Rahul Sharma"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm transition">
                            <span x-show="errors.full_name" class="text-xs text-red-600 mt-1 block" x-text="errors.full_name ? errors.full_name[0] : ''"></span>
                        </div>

                        <!-- Phone Number (10 Digit Validation) -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Mobile Number (10 Digits) <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <span class="absolute left-3 top-3.5 text-sm font-semibold text-slate-400">+91</span>
                                <input type="tel" x-model="formData.phone" maxlength="10" required placeholder="9876543210"
                                       class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm font-semibold tracking-wider transition">
                            </div>
                            <span x-show="errors.phone" class="text-xs text-red-600 mt-1 block" x-text="errors.phone ? errors.phone[0] : ''"></span>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Email Address</label>
                            <input type="email" x-model="formData.email" placeholder="rahul@example.com"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm transition">
                            <span x-show="errors.email" class="text-xs text-red-600 mt-1 block" x-text="errors.email ? errors.email[0] : ''"></span>
                        </div>

                        <!-- Grid: Stream Interest & Current Qualification -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Interested Stream</label>
                                <select x-model="formData.stream_interest" class="w-full px-3 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm bg-white transition">
                                    <option value="Engineering">Engineering (B.Tech/M.Tech)</option>
                                    <option value="Science">Science (B.Sc/M.Sc)</option>
                                    <option value="Arts">Arts & Humanities (BA/MA)</option>
                                    <option value="Commerce">Commerce (B.Com/M.Com/CA)</option>
                                    <option value="Nursing">Nursing (GNM/B.Sc)</option>
                                    <option value="Agriculture">Agriculture (B.Sc Agri)</option>
                                    <option value="Education">Education (B.Ed/M.Ed)</option>
                                    <option value="PhD">PhD Guidance</option>
                                    <option value="Online">Online Programs</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Qualification</label>
                                <select x-model="formData.current_qualification" class="w-full px-3 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm bg-white transition">
                                    <option value="12th Pass">12th Pass / Appearing</option>
                                    <option value="Graduate">Bachelor Graduate</option>
                                    <option value="Post Graduate">Master Degree</option>
                                    <option value="Diploma">Diploma Holder</option>
                                </select>
                            </div>
                        </div>

                        <!-- State -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Your Home State</label>
                            <input type="text" x-model="formData.state" placeholder="e.g. Delhi, Uttar Pradesh, Bihar..."
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none text-sm transition">
                        </div>
                    </div>

                    <!-- General Error Message -->
                    <div x-show="errorMessage" class="mt-4 p-3 bg-red-50 text-red-700 rounded-xl text-xs font-semibold text-center" x-text="errorMessage"></div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" :disabled="loading"
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold py-3.5 px-4 rounded-xl shadow-lg shadow-blue-600/30 transition-all flex items-center justify-center gap-2">
                            <span x-show="!loading" class="flex items-center gap-2">
                                <span>Request Free 1:1 Counseling</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                            <span x-show="loading" style="display: none;">
                                <span>Submitting Enquiry...</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function leadModalForm() {
        return {
            formData: {
                full_name: '',
                phone: '',
                email: '',
                stream_interest: 'Engineering',
                course_interest: 'General Enquiry',
                current_qualification: '12th Pass',
                state: '',
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

                fetch('{{ route("lead.submit") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(this.formData)
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
                            this.errorMessage = data.message || 'Error submitting lead. Please try again.';
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
                    full_name: '',
                    phone: '',
                    email: '',
                    stream_interest: 'Engineering',
                    course_interest: 'General Enquiry',
                    current_qualification: '12th Pass',
                    state: '',
                };
                this.submitted = false;
                this.errors = {};
            }
        }
    }
</script>
