<!-- Floating AI Chatbot Widget (Bottom Right Side) -->
<div x-data="chatbotWidget()" class="relative z-50">

    <!-- Floating Chatbot Launcher Button (Bottom Right) -->
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3">
        <!-- Call-to-action Tooltip Bubble (Disappears when open) -->
        <div x-show="!isOpen && showTooltip" 
             x-cloak
             style="display: none;"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-x-4"
             x-transition:enter-end="opacity-100 translate-x-0"
             class="hidden sm:flex items-center gap-2 bg-slate-900/95 text-white text-xs font-extrabold px-4 py-2.5 rounded-2xl border border-violet-500/40 shadow-2xl backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-violet-400 animate-ping"></span>
            <span>Need Admission Help? Ask AI! 🎓</span>
            <button @click="showTooltip = false" class="text-slate-400 hover:text-white ml-1">✕</button>
        </div>

        <!-- Launcher Icon Circle -->
        <button @click="toggleChat"
                class="relative group w-14 h-14 rounded-full bg-gradient-to-tr from-blue-600 via-indigo-600 to-violet-600 text-white shadow-2xl flex items-center justify-center border-2 border-violet-400/40 hover:scale-110 active:scale-95 transition-all duration-300 shadow-blue-600/40">
            
            <!-- Pulsing Ring Indicator -->
            <span class="absolute inset-0 rounded-full bg-violet-500/30 animate-ping pointer-events-none"></span>

            <!-- Chatbot Icon (Open / Close state) -->
            <template x-if="!isOpen">
                <svg class="w-7 h-7 transform group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
            </template>
            <template x-if="isOpen">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </template>

            <!-- Unread Badge -->
            <span x-show="unreadCount > 0 && !isOpen" 
                  class="absolute -top-1 -right-1 w-5 h-5 bg-violet-500 text-white font-black text-[10px] rounded-full flex items-center justify-center shadow-md animate-bounce"
                  x-text="unreadCount"></span>
        </button>
    </div>

    <!-- Floating Chat Window Modal -->
    <div x-show="isOpen"
         x-cloak
         style="display: none;"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-8 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-8 scale-95"
         class="fixed bottom-24 right-4 sm:right-6 w-[340px] sm:w-[380px] h-[520px] max-h-[82vh] z-50 bg-slate-950 border border-slate-800 rounded-3xl shadow-2xl flex flex-col overflow-hidden text-white backdrop-blur-2xl">

        <!-- Chat Header -->
        <div class="bg-gradient-to-r from-blue-900/90 via-slate-900 to-violet-900/90 p-4 border-b border-slate-800 flex justify-between items-center shrink-0">
            <div class="flex items-center gap-3">
                <div class="relative w-10 h-10 rounded-2xl bg-gradient-to-tr from-blue-500 to-violet-500 flex items-center justify-center text-white font-extrabold text-lg shadow-md shadow-violet-600/30">
                    🤖
                    <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-400 border-2 border-slate-950 rounded-full"></span>
                </div>
                <div>
                    <h3 class="text-sm font-extrabold text-white leading-tight flex items-center gap-1.5">
                        AdmissionsDekho AI
                        <span class="bg-violet-900/80 text-violet-300 text-[10px] px-1.5 py-0.2 rounded font-bold border border-violet-700/50">24/7 Bot</span>
                    </h3>
                    <p class="text-[11px] text-slate-300 font-medium">100% Free College & Fee Guidance</p>
                </div>
            </div>

            <!-- Action Controls -->
            <div class="flex items-center gap-2">
                <button @click="resetChat" title="Reset Chat" class="text-slate-400 hover:text-white p-2 rounded-xl hover:bg-slate-800/80 transition text-xs flex items-center justify-center">
                    🔄
                </button>
                <button @click="isOpen = false" title="Close Chat" class="text-slate-400 hover:text-white p-1.5 rounded-xl hover:bg-slate-800/80 transition text-sm flex items-center justify-center">
                    ✕
                </button>
            </div>
        </div>

        <!-- Messages History Scroll Container -->
        <div id="chat-messages-container" class="flex-1 p-4 overflow-y-auto space-y-4 text-xs sm:text-sm custom-scrollbar bg-slate-950/60">
            
            <template x-for="(msg, index) in messages" :key="index">
                <div :class="msg.sender === 'user' ? 'flex justify-end' : 'flex justify-start'">
                    
                    <div :class="msg.sender === 'user' 
                         ? 'bg-gradient-to-r from-blue-600 to-violet-600 text-white rounded-2xl rounded-tr-none px-4 py-3 max-w-[82%] shadow-lg shadow-violet-900/20' 
                         : 'bg-slate-900 border border-slate-800 text-slate-200 rounded-2xl rounded-tl-none px-4 py-3 max-w-[85%] space-y-2 shadow-lg'">
                        
                        <div class="leading-relaxed whitespace-pre-line" x-html="msg.text"></div>

                        <!-- CTA Button in AI Response -->
                        <template x-if="msg.showCta">
                            <div class="pt-2">
                                <button @click="$dispatch('open-lead-modal', { title: 'Book Free Counseling - ' + (msg.ctaSubject || 'General Inquiry') }); openLeadModal(msg.ctaSubject)"
                                        class="w-full bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-600 hover:from-blue-500 hover:to-violet-500 text-white font-extrabold px-3.5 py-2.5 rounded-xl text-xs shadow-md transition-all flex items-center justify-center gap-1.5 cursor-pointer hover:scale-[1.02] active:scale-95">
                                    <span>📞 Book Free 1:1 Counseling</span>
                                </button>
                            </div>
                        </template>

                        <!-- Dynamic Auto-Suggested Follow-Up Prompts -->
                        <template x-if="msg.suggestedPrompts && msg.suggestedPrompts.length > 0">
                            <div class="flex flex-wrap gap-1.5 pt-2 border-t border-slate-800/80">
                                <template x-for="sPrompt in msg.suggestedPrompts" :key="sPrompt">
                                    <button @click="sendQuickPrompt(sPrompt)"
                                            class="bg-slate-950 hover:bg-purple-950 text-purple-300 border border-purple-700/40 hover:border-purple-500 text-[10px] font-semibold px-2 py-0.5 rounded-full transition-all">
                                        <span x-text="sPrompt"></span>
                                    </button>
                                </template>
                            </div>
                        </template>

                        <span class="block text-[9px] opacity-60 text-right mt-1" x-text="msg.time"></span>
                    </div>

                </div>
            </template>

            <!-- Typing Indicator Bubble -->
            <div x-show="isTyping" class="flex justify-start">
                <div class="bg-slate-900 border border-slate-800 text-slate-400 rounded-2xl rounded-tl-none px-4 py-2.5 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-bounce"></span>
                    <span class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-bounce" style="animation-delay: 0.15s"></span>
                    <span class="w-1.5 h-1.5 bg-purple-400 rounded-full animate-bounce" style="animation-delay: 0.3s"></span>
                    <span class="text-[11px] text-slate-400 font-semibold ml-1">AI is thinking...</span>
                </div>
            </div>

        </div>

        <!-- Quick Prompt Chips -->
        <div class="px-3 py-2 bg-slate-900/90 border-t border-slate-800/80 flex items-center gap-1.5 overflow-x-auto no-scrollbar shrink-0">
            <button @click="sendQuickPrompt('Tell me about BA LLB & Law cutoffs')" 
                    class="bg-purple-950/80 hover:bg-purple-900 text-purple-300 border border-purple-700/50 text-[11px] font-semibold px-2.5 py-1 rounded-full whitespace-nowrap transition">
                ⚖️ Law & BA LLB
            </button>
            <button @click="sendQuickPrompt('What are B.Tech Engineering fees and cutoffs?')" 
                    class="bg-blue-950/80 hover:bg-blue-900 text-blue-300 border border-blue-700/50 text-[11px] font-semibold px-2.5 py-1 rounded-full whitespace-nowrap transition">
                💻 B.Tech Engineering
            </button>
            <button @click="sendQuickPrompt('How do I book 1:1 free counseling?')" 
                    class="bg-amber-950/80 hover:bg-amber-900 text-amber-300 border border-amber-700/50 text-[11px] font-semibold px-2.5 py-1 rounded-full whitespace-nowrap transition">
                📞 Free 1:1 Counseling
            </button>
            <button @click="sendQuickPrompt('Are UGC & AICTE approved colleges available?')" 
                    class="bg-emerald-950/80 hover:bg-emerald-900 text-emerald-300 border border-emerald-700/50 text-[11px] font-semibold px-2.5 py-1 rounded-full whitespace-nowrap transition">
                🏛️ UGC/AICTE Approvals
            </button>
        </div>

        <!-- Input Bar Area -->
        <form @submit.prevent="sendMessage" class="p-3 bg-slate-900 border-t border-slate-800 flex items-center gap-2 shrink-0">
            <input type="text" 
                   x-model="userInput" 
                   placeholder="Ask about cutoffs, fees or colleges..." 
                   class="flex-1 bg-slate-950 border border-slate-700 text-white placeholder-slate-400 text-xs rounded-xl px-3.5 py-2.5 outline-none focus:border-purple-500 transition">
            <button type="submit" 
                    :disabled="!userInput.trim()"
                    class="bg-purple-600 hover:bg-purple-500 disabled:opacity-40 text-white font-bold px-3.5 py-2.5 rounded-xl text-xs transition-all shadow-md shadow-purple-600/30 flex items-center justify-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9-7-9-7-9 7 9 7zm0 0v-8"></path>
                </svg>
            </button>
        </form>

    </div>

</div>

<!-- Alpine.js AI Chatbot Logic Component -->
<script>
    function chatbotWidget() {
        return {
            isOpen: false,
            showTooltip: true,
            unreadCount: 1,
            userInput: '',
            isTyping: false,
            messages: [
                {
                    sender: 'bot',
                    text: '👋 <strong>Welcome to AdmissionsDekho!</strong>\n\nI am your AI Academic Counselor. Ask me anything about university admissions, cutoffs, tuition fees, or statutory approvals (UGC, AICTE, BCI, PCI).',
                    time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                    showCta: true,
                    ctaSubject: 'Chatbot Greeting',
                    suggestedPrompts: ['🎓 Top Law Colleges', '💻 B.Tech CSE Fees', '📞 Book Free 1:1 Counseling']
                }
            ],

            init() {
                // Auto Proactive Popup Trigger (Auto opens tooltip after 3 seconds)
                setTimeout(() => {
                    if (!this.isOpen) {
                        this.showTooltip = true;
                        this.unreadCount = 1;
                    }
                }, 3000);
            },

            toggleChat() {
                this.isOpen = !this.isOpen;
                if (this.isOpen) {
                    this.unreadCount = 0;
                    this.showTooltip = false;
                    this.scrollToBottom();
                }
            },

            resetChat() {
                this.messages = [
                    {
                        sender: 'bot',
                        text: '🔄 Chat history reset! How can I assist you with your college selection today?',
                        time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                        showCta: false,
                        suggestedPrompts: ['🎓 Top Law Colleges', '💻 B.Tech Engineering', '📞 Free Counseling']
                    }
                ];
            },

            sendQuickPrompt(promptText) {
                this.userInput = promptText;
                this.sendMessage();
            },

            sendMessage() {
                const text = this.userInput.trim();
                if (!text) return;

                const timeNow = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                // Add User Message
                this.messages.push({
                    sender: 'user',
                    text: text,
                    time: timeNow
                });

                this.userInput = '';
                this.scrollToBottom();
                this.isTyping = true;

                // Simulate AI Thinking & Knowledge Lookup
                setTimeout(() => {
                    this.isTyping = false;
                    const response = this.generateAiResponse(text);
                    this.messages.push({
                        sender: 'bot',
                        text: response.reply,
                        time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                        showCta: response.showCta,
                        ctaSubject: response.subject,
                        suggestedPrompts: response.suggestedPrompts || ['📞 Book Free Counseling', '🏛️ Check UGC Approvals']
                    });
                    this.scrollToBottom();
                }, 800);
            },

            generateAiResponse(input) {
                const lower = input.toLowerCase().trim();

                // Detect if user provided contact details / 10-digit mobile number
                const phoneMatch = input.match(/[6-9]\d{9}/);
                if (phoneMatch) {
                    const phoneNumber = phoneMatch[0];
                    let cleanName = input.replace(phoneNumber, '').replace(/[\d\+\-\,\;]/g, '').replace(/\b(my|name|is|mobile|number|city|from|i|am|student|hi|hello|please)\b/gi, '').trim();
                    const studentName = cleanName.length > 2 ? cleanName : 'Aspirant';

                    // Auto submit lead payload via API
                    try {
                        fetch('{{ url('/api/leads') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                full_name: studentName,
                                phone: phoneNumber,
                                stream_interest: 'Chatbot Automated Lead Capture',
                                notes: 'Chatbot input: ' + input
                            })
                        });
                    } catch (e) {}

                    // Forward lead directly to WhatsApp +91 9643802216
                    const waPayload = encodeURIComponent(`🎓 *New Chatbot Lead Capture*\n\n👤 *Name:* ${studentName}\n📞 *Mobile:* ${phoneNumber}\n💬 *Details:* ${input}\n\nPlease send the customized college shortlist & cutoffs report!`);
                    setTimeout(() => {
                        window.open(`https://wa.me/919643802216?text=${waPayload}`, '_blank');
                    }, 1200);

                    return {
                        reply: `Thank you <strong>${studentName}</strong>! Your admission request has been confirmed.\n\n• <strong>Assigned Desk:</strong> Senior Advisory Panel\n• <strong>Contact:</strong> ${phoneNumber}\n\nA senior education counselor will reach out via WhatsApp / Call at <strong>+91 9643802216</strong> with your tailored report shortly!`,
                        showCta: true,
                        subject: 'Automated Chatbot Lead Handover',
                        suggestedPrompts: ['📞 Connect Now on WhatsApp', '🏛️ View Approved Colleges']
                    };
                }

                // 1. Intent Routing: Greetings / Casual
                if (lower === 'hi' || lower === 'hello' || lower === 'hey' || lower === 'good morning' || lower === 'good evening' || lower === 'namaste') {
                    return {
                        reply: "Hello! Welcome to <strong>AdmissionsDekho</strong>. I am your AI Education Counselor.\n\nHow can I assist you with college discovery, entrance cut-offs (**JEE Main**, **NEET**, **CLAT**, **CAT**), or tuition fees today?",
                        showCta: false,
                        subject: 'Greeting Inquiry',
                        suggestedPrompts: ['⚖️ Law & BA LLB', '💻 B.Tech Engineering', '📞 Book Free 1:1 Counseling']
                    };
                }

                // 2. Intent Routing: Engineering / B.Tech / CSE / JEE
                if (lower.includes('b.tech') || lower.includes('engineer') || lower.includes('cse') || lower.includes('jee')) {
                    return {
                        reply: "Here are top-rated engineering institutions and cut-off insights:\n\n• <strong>GGSIPU / IPU Colleges:</strong> MAIT, MSIT, and BCIIT (Approx. ₹5.5L – ₹7L total fees).\n• <strong>AKTU Affiliated (Noida/NCR):</strong> JSS Academy, KIET Group (Approx. ₹4.5L – ₹6L total fees).\n• <strong>Specialisations:</strong> Computer Science (CSE), AI & ML, Robotics & Data Science.\n\nTo generate a customized shortlist matching your **JEE Main rank/score** and send the detailed fee breakdown directly to you, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'B.Tech Engineering Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '💰 Check Fee Waivers']
                    };
                }

                // 3. Intent Routing: Law / BA LLB / CLAT / BCI
                if (lower.includes('law') || lower.includes('llb') || lower.includes('clat') || lower.includes('bci')) {
                    return {
                        reply: "Here are top Bar Council of India (BCI) approved law institutes:\n\n• <strong>5-Year BA LLB:</strong> Integrated programs with Moot Court & High Court internships.\n• <strong>3-Year LLB:</strong> Post-graduation legal degree programs.\n• <strong>Cutoffs:</strong> **CLAT**, **AILET**, and direct merit rank cut-offs.\n\nTo send you the complete list of eligible law colleges with exact cut-offs and placement stats, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'BA LLB & Law Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '🏛️ Check BCI List']
                    };
                }

                // 4. Intent Routing: Management / MBA / BBA / CAT / MAT
                if (lower.includes('mba') || lower.includes('bba') || lower.includes('cat') || lower.includes('management') || lower.includes('pgdm')) {
                    return {
                        reply: "Here are top AICTE-approved B-Schools and management cut-off insights:\n\n• <strong>Programs:</strong> BBA, MBA & PGDM in Finance, Marketing, HR & Business Analytics.\n• <strong>Entrance Exams:</strong> **CAT**, **MAT**, **CUET-PG** scorecards & direct management quota.\n• <strong>Placements:</strong> Verified ROI placement statistics & corporate tie-ups.\n\nTo send you the complete list of eligible B-Schools matching your target budget, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'MBA Management Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '📈 Check CAT Cutoffs']
                    };
                }

                // 5. Intent Routing: Nursing / Pharmacy / Medical / INC / PCI / NEET
                if (lower.includes('nursing') || lower.includes('pharmacy') || lower.includes('medical') || lower.includes('b.pharm') || lower.includes('d.pharm') || lower.includes('neet')) {
                    return {
                        reply: "Here are top INC & PCI recognized medical & healthcare institutions:\n\n• <strong>B.Sc Nursing (INC Approved):</strong> 100% clinical hospital attachments.\n• <strong>B.Pharm / D.Pharm (PCI Approved):</strong> State Pharmacy Council registration eligible.\n• <strong>Entrance Cutoffs:</strong> **NEET** scores & 10+2 PCB aggregate cutoff rules.\n\nTo send you the complete list of eligible nursing & pharmacy colleges, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'Nursing & Pharmacy Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '🏥 Check INC List']
                    };
                }

                // 6. Intent Routing: BCA / MCA / Computer Applications
                if (lower.includes('bca') || lower.includes('mca') || lower.includes('computer application')) {
                    return {
                        reply: "Here are top BCA & MCA computer application highlights:\n\n• <strong>Tracks:</strong> Full Stack Web Dev, AI, Cloud Computing & Cybersecurity.\n• <strong>Eligibility:</strong> Minimum 45% aggregate in 10+2.\n• <strong>Fees:</strong> Approx ₹45,000 – ₹1,10,000/year.\n\nTo receive a customized college list matching your score, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'BCA & MCA Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '💻 Compare BCA vs B.Sc']
                    };
                }

                // 7. Intent Routing: Education / B.Ed / Teaching / NCTE
                if (lower.includes('b.ed') || lower.includes('education') || lower.includes('teacher') || lower.includes('ncte')) {
                    return {
                        reply: "Here are NCTE-recognized teacher training university insights:\n\n• <strong>Programs:</strong> 2-Year B.Ed & M.Ed degrees.\n• <strong>Eligibility:</strong> 50% in Graduation for **CTET** / **STET** teaching posts.\n\nTo receive a customized B.Ed college shortlist, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'B.Ed Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '🏛️ Check NCTE List']
                    };
                }

                // 8. Intent Routing: PhD / Doctorate / Research
                if (lower.includes('phd') || lower.includes('doctorate') || lower.includes('research')) {
                    return {
                        reply: "Here are UGC-recognized PhD research admission insights:\n\n• <strong>Assistance:</strong> Research proposal drafting, **NET/GATE** entrance waivers & supervisor match.\n\nTo receive PhD supervisor allocation details, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'PhD Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '📝 Proposal Help']
                    };
                }

                // 9. Intent Routing: Pricing / Fees / Scholarships
                if (lower.includes('fee') || lower.includes('price') || lower.includes('cost') || lower.includes('scholarship') || lower.includes('loan')) {
                    return {
                        reply: "AdmissionsDekho provides 100% free counseling with zero hidden charges:\n\n• <strong>Merit Waivers:</strong> Scholarship options based on 10+2 marks & NSP schemes.\n• <strong>Education Loans:</strong> Bonafide assistance letters for public & private banks.\n\nTo send you an itemized fee breakdown & scholarship report, could you please share your:\n1. <strong>Full Name</strong>\n2. <strong>Mobile Number</strong>\n3. <strong>Current City</strong>",
                        showCta: true,
                        subject: 'Fees & Scholarship Lead Request',
                        suggestedPrompts: ['📞 Share My Details Now', '💰 Fee Waiver Check']
                    };
                }

                // Standard Fallback: Automatic Escalation to Senior Advisory Panel
                this.escalateToAdvisory(input);

                return {
                    reply: `I have escalated your query directly to our <strong>Senior Advisory Panel</strong>.\n\n• <strong>Status:</strong> Assigned to Senior Academic Specialist\n• <strong>Notice:</strong> Your query <em>"${input}"</em> has been flagged for direct counselor review.\n\nWould you like to connect with a senior counselor right now on WhatsApp (<strong>+91 9643802216</strong>) or request a free 1:1 call back?`,
                    showCta: true,
                    subject: 'Advisory Escalation - ' + input.substring(0, 30),
                    suggestedPrompts: ['📞 Request Call Back', '💬 Connect on WhatsApp']
                };
            },

            escalateToAdvisory(queryText) {
                // Auto submit advisory escalation payload to API
                try {
                    fetch('{{ url('/api/leads') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            full_name: 'Visitor (Unresolved Query)',
                            phone: '9643802216',
                            stream_interest: 'Advisory Panel Escalation',
                            notes: 'Unresolved Student Query: ' + queryText + ' | Page: ' + window.location.href
                        })
                    });
                } catch (e) {}

                // Forward query alert to WhatsApp +91 9643802216 after brief delay
                const waPayload = encodeURIComponent(`🚨 *Senior Advisory Alert - Unresolved Query*\n\n💬 *Student Query:* "${queryText}"\n🌐 *Source Page:* ${window.location.href}\n\nPlease connect with this student to provide expert admission counseling!`);
                setTimeout(() => {
                    window.open(`https://wa.me/919643802216?text=${waPayload}`, '_blank');
                }, 1500);
            },

            openLeadModal(subject) {
                const titleText = 'Book Free Counseling - ' + (subject || 'General Inquiry');
                window.dispatchEvent(new CustomEvent('open-lead-modal', { detail: { title: titleText } }));
            },

            sendChatToWhatsApp() {
                let transcript = "🎓 *AdmissionsDekho Chatbot Conversation Transcript*\n\n";
                this.messages.forEach(msg => {
                    const prefix = msg.sender === 'user' ? '👤 *Student:* ' : '🤖 *AI Counselor:* ';
                    const cleanText = msg.text.replace(/<[^>]*>?/gm, '').trim();
                    transcript += `${prefix}${cleanText}\n\n`;
                });
                transcript += "📌 *Request:* Please connect me with a senior counselor for admission cutoffs & fee guidance!";
                
                const whatsappUrl = "https://wa.me/919643802216?text=" + encodeURIComponent(transcript);
                window.open(whatsappUrl, '_blank');
            },

            scrollToBottom() {
                this.$nextTick(() => {
                    const container = document.getElementById('chat-messages-container');
                    if (container) {
                        container.scrollTop = container.scrollHeight;
                    }
                });
            }
        };
    }
</script>
