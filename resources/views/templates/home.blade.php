<x-layout.app :seo="$seo">

    <!-- Include Three.js for Real-Time 3D Interactive Graphics -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <style>
        /* Ribbed Slatted Background Lines */
        .ribbed-bg {
            background-color: #050714;
            background-image: repeating-linear-gradient(
                -25deg,
                rgba(15, 23, 42, 0.8),
                rgba(15, 23, 42, 0.8) 18px,
                rgba(7, 11, 25, 0.9) 18px,
                rgba(7, 11, 25, 0.9) 36px
            );
        }
        
        /* 3D Perspective Card Tilt Container */
        .perspective-stage {
            perspective: 1400px;
        }

        /* Fixed & Stable Background Hero Board */
        .screen-card-3d {
            transform: none !important;
            box-shadow: 
                0 25px 80px -10px rgba(124, 58, 237, 0.35),
                0 0 40px rgba(59, 130, 246, 0.2),
                inset 0 1px 1px rgba(255, 255, 255, 0.2);
        }

        .perspective-stage:hover .screen-card-3d {
            transform: none !important;
            box-shadow: 
                0 25px 80px -10px rgba(124, 58, 237, 0.45),
                0 0 50px rgba(59, 130, 246, 0.25);
        }

        /* Ambient Glowing Pulse */
        @keyframes pulseGlow {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.12); }
        }
        .animate-pulse-glow {
            animation: pulseGlow 5s ease-in-out infinite;
        }

        /* Pulsing Play Button Ring */
        @keyframes rippleRing {
            0% { transform: scale(0.9); opacity: 0.8; }
            100% { transform: scale(1.6); opacity: 0; }
        }
        .animate-ripple {
            animation: rippleRing 2.5s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }

        /* 3D Floating Bobbing Animation */
        @keyframes float3D {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(1.2deg); }
        }
        .animate-float-3d {
            animation: float3D 6s ease-in-out infinite;
        }
    </style>

    <!-- Main Eduvibe 3D Screen Hero Section -->
    <section class="ribbed-bg relative py-12 md:py-20 overflow-hidden min-h-[750px] flex items-center justify-center border-b border-slate-800/80">
        
        <!-- Ambient Background Glow Orbs -->
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] bg-purple-600/30 rounded-full blur-[140px] pointer-events-none animate-pulse-glow"></div>
        <div class="absolute -bottom-32 -right-32 w-[650px] h-[650px] bg-blue-600/25 rounded-full blur-[150px] pointer-events-none animate-pulse-glow" style="animation-delay: 2.5s;"></div>

        <!-- Perspective Stage Container -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 perspective-stage">
            
            <!-- Floating Tilted 3D Screen Frame -->
            <div id="hero-3d-card" class="screen-card-3d relative rounded-3xl bg-gradient-to-br from-[#0C0F24] via-[#090C1B] to-[#040612] border border-purple-500/30 overflow-hidden text-white">
                
                <!-- Internal Card Ambient Gradient Glows -->
                <div class="absolute top-0 right-1/4 w-[450px] h-[450px] bg-gradient-to-tr from-purple-600/40 via-indigo-600/30 to-blue-600/40 rounded-full blur-[90px] pointer-events-none"></div>

                <div class="relative z-10 p-6 sm:p-10 lg:p-14">
                    
                    <!-- Inner Top Header Navigation -->
                    <div class="flex justify-between items-center pb-8 mb-8 border-b border-slate-800/60">
                        <div class="flex items-center">
                            <img src="{{ asset('/images/brand-logo.png') }}" alt="AdmissionsDekho Logo" class="h-12 sm:h-14 w-auto object-contain drop-shadow-[0_4px_12px_rgba(234,179,8,0.4)]">
                        </div>

                        <div class="hidden md:flex items-center space-x-8 text-xs font-semibold text-slate-300">
                            <a href="#streams-section" class="hover:text-purple-400 transition">Streams</a>
                            <a href="{{ url('/courses-trusted-education-consultants/') }}" class="hover:text-purple-400 transition">Consultants</a>
                            <a href="{{ url('/top-colleges-universities-online-programs/') }}" class="hover:text-purple-400 transition">Online Programs</a>
                            <a href="{{ url('/get-in-touch/') }}" class="hover:text-purple-400 transition">Contact</a>
                        </div>

                        <button x-on:click="isModalOpen = true; modalTitle = 'Get Started with Free Counselling'"
                                class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-bold text-xs px-5 py-2.5 rounded-xl shadow-lg shadow-purple-600/30 transition">
                            Get Started
                        </button>
                    </div>

                    <!-- Inner Grid Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center min-h-[420px]">
                        
                        <!-- Left Content Area -->
                        <div class="lg:col-span-6 space-y-6">
                            
                            <!-- Badges -->
                            <div class="flex flex-wrap items-center gap-2">
                                <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-900/80 to-indigo-900/80 border border-purple-500/40 text-cyan-300 px-3.5 py-1.5 rounded-full text-xs font-bold backdrop-blur-md shadow-lg shadow-purple-950/40">
                                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                                    <span>Admission Season 2026 • Free 1:1 Profile Evaluation</span>
                                </div>
                                <div class="inline-flex items-center gap-1.5 bg-slate-900/80 border border-amber-500/40 text-amber-300 px-3 py-1.5 rounded-full text-xs font-bold backdrop-blur-md">
                                    <span>⭐ 4.9/5 (50,000+ Active Learners)</span>
                                </div>
                            </div>

                            <!-- Headline & Subtitle -->
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-[1.15] text-white">
                                AdmissionsDekho – <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-300 to-amber-300">University Admission Guidance & Support</span>
                            </h1>

                            <p class="text-base sm:text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-300 via-indigo-200 to-cyan-300 mt-2">
                                Your Career Story Starts With One Right Choice
                            </p>

                            <p class="text-xs sm:text-sm text-slate-300 max-w-xl leading-relaxed font-medium mt-2">
                                Every student stands at a crossroads after school. Some dream of building bridges. Some want to argue cases in court. Others wish to teach and research for years to come. However, most students feel lost when they search for the right path. That's exactly where AdmissionsDekho steps in. We offer university admission guidance and support that turns confusion into clarity. So, whether you are choosing a course or picking a college, we walk with you at every step.
                            </p>

                            <!-- Interactive Search Bar -->
                            <div class="pt-2 max-w-lg">
                                <div class="relative flex items-center bg-slate-950/80 border border-purple-500/30 rounded-2xl p-1.5 shadow-xl shadow-purple-950/40 focus-within:border-cyan-400/80 transition-all">
                                    <svg class="w-5 h-5 text-purple-400 ml-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <input type="text" placeholder="Search courses, colleges, or degrees..." class="w-full bg-transparent px-3 py-2 text-xs sm:text-sm text-white placeholder-slate-400 focus:outline-none" x-on:keydown.enter="isModalOpen = true; modalTitle = 'Search Results & Counselling'; selectedCourse = $el.value">
                                    <button x-on:click="isModalOpen = true; modalTitle = 'Search Results & Counselling'" class="bg-gradient-to-r from-purple-600 to-cyan-500 hover:from-purple-500 hover:to-cyan-400 text-white font-bold text-xs px-4 py-2 rounded-xl transition shadow-md">
                                        Explore
                                    </button>
                                </div>
                            </div>

                            <!-- Glassmorphism Action Buttons -->
                            <div class="pt-2 flex flex-wrap items-center gap-4">
                                <button x-on:click="isModalOpen = true; modalTitle = 'Get Free Admission Counselling'; selectedCourse = 'General Enquiry'"
                                        class="bg-gradient-to-r from-purple-600 via-indigo-600 to-cyan-500 hover:from-purple-500 hover:to-cyan-400 text-white font-extrabold px-7 py-3.5 rounded-xl shadow-xl shadow-purple-600/40 hover:shadow-cyan-500/50 transition-all text-xs sm:text-sm flex items-center gap-2 group">
                                    <span>Get free counselling</span>
                                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </button>

                                <button x-on:click="isModalOpen = true; modalTitle = 'Talk to an Admission Expert'"
                                        class="bg-slate-900/80 hover:bg-slate-800 text-slate-200 font-bold px-6 py-3.5 rounded-xl border border-purple-500/30 transition-all text-xs sm:text-sm backdrop-blur-md flex items-center gap-2 shadow-lg">
                                    <span>Talk to an expert</span>
                                </button>
                            </div>

                            <!-- Social Proof & Stats -->
                            <div class="pt-4 flex items-center gap-6 text-xs text-slate-400 font-semibold border-t border-slate-800/80">
                                <div class="flex items-center -space-x-2">
                                    <div class="w-7 h-7 rounded-full bg-purple-600 border-2 border-slate-900 flex items-center justify-center text-[10px] text-white font-bold">AK</div>
                                    <div class="w-7 h-7 rounded-full bg-cyan-600 border-2 border-slate-900 flex items-center justify-center text-[10px] text-white font-bold">PS</div>
                                    <div class="w-7 h-7 rounded-full bg-amber-600 border-2 border-slate-900 flex items-center justify-center text-[10px] text-white font-bold">RM</div>
                                    <div class="w-7 h-7 rounded-full bg-emerald-600 border-2 border-slate-900 flex items-center justify-center text-[10px] text-white font-bold">+5k</div>
                                </div>
                                <div class="flex items-center gap-6">
                                    <div>
                                        <span class="text-purple-400 font-bold text-sm block">120+</span>
                                        <span class="text-[11px] text-slate-400">Statutory Colleges</span>
                                    </div>
                                    <div>
                                        <span class="text-cyan-400 font-bold text-sm block">50,000+</span>
                                        <span class="text-[11px] text-slate-400">Active Learners</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Interactive 3D Stage (3D Illustrator & Swarm) -->
                        <div class="lg:col-span-6 relative flex flex-col justify-center items-center min-h-[420px] sm:min-h-[480px]" x-data="{ heroMode: 'illustrator', activeChar: 'student' }">
                            
                            <!-- Top Control Bar Switcher -->
                            <div class="absolute top-0 z-30 px-3 py-1.5 rounded-full bg-slate-950/90 backdrop-blur-md border border-purple-500/40 text-[11px] font-extrabold text-purple-200 flex flex-wrap items-center justify-center gap-2 shadow-xl shadow-purple-950/60 select-none">
                                <!-- View Mode Switcher -->
                                <div class="flex items-center gap-1 bg-purple-950/80 p-0.5 rounded-lg border border-purple-400/30">
                                    <button x-on:click="heroMode = 'illustrator'" :class="heroMode === 'illustrator' ? 'bg-purple-600 text-white' : 'bg-slate-800 text-slate-300 hover:text-white'" class="px-2.5 py-1 rounded text-[10px] font-bold shadow transition cursor-pointer flex items-center gap-1">
                                        <span>🎨 3D Illustrator</span>
                                    </button>
                                    <button x-on:click="heroMode = 'swarm'" :class="heroMode === 'swarm' ? 'bg-purple-600 text-white' : 'bg-slate-800 text-slate-300 hover:text-white'" class="px-2.5 py-1 rounded text-[10px] font-bold shadow transition cursor-pointer flex items-center gap-1">
                                        <span>⚡ 3D Swarm Stage</span>
                                    </button>
                                </div>

                                <!-- Character Switcher (Visible when mode is illustrator) -->
                                <div x-show="heroMode === 'illustrator'" class="flex items-center gap-1 bg-slate-900/90 p-0.5 rounded-lg border border-cyan-400/30">
                                    <button x-on:click="activeChar = 'student'" :class="activeChar === 'student' ? 'bg-cyan-600 text-white' : 'text-slate-300 hover:text-white'" class="px-2 py-0.5 rounded text-[10px] font-bold transition cursor-pointer">🎓 Student</button>
                                    <button x-on:click="activeChar = 'counselor'" :class="activeChar === 'counselor' ? 'bg-cyan-600 text-white' : 'text-slate-300 hover:text-white'" class="px-2 py-0.5 rounded text-[10px] font-bold transition cursor-pointer">👔 Advisor</button>
                                </div>
                            </div>

                            <!-- Mode 1: 3D Animated Illustrator Container -->
                            <div x-show="heroMode === 'illustrator'" class="w-full h-full pt-10 flex items-center justify-center relative z-10">
                                
                                <!-- Floating 3D Character Stage Card -->
                                <div class="relative w-full max-w-sm sm:max-w-md mx-auto h-[380px] sm:h-[420px] rounded-3xl p-3 bg-gradient-to-b from-purple-900/30 via-slate-950/60 to-slate-950/80 border border-purple-500/40 backdrop-blur-xl shadow-2xl shadow-purple-950/80 group overflow-hidden flex items-center justify-center animate-float-3d">
                                    
                                    <!-- Radial Spotlight Behind 3D Character -->
                                    <div class="absolute inset-0 bg-radial from-cyan-500/20 via-purple-600/15 to-transparent rounded-3xl pointer-events-none"></div>

                                    <!-- Student Character Image -->
                                    <img x-show="activeChar === 'student'" src="{{ asset('images/3d_student_illustrator.png') }}" alt="3D Student Guidance Illustrator" class="w-full h-full object-contain relative z-10 drop-shadow-[0_20px_40px_rgba(112,0,255,0.45)] transition-transform duration-500 group-hover:scale-105">

                                    <!-- Counselor Character Image -->
                                    <img x-show="activeChar === 'counselor'" src="{{ asset('images/3d_counselor_illustrator.png') }}" alt="3D Counselor Guidance Illustrator" class="w-full h-full object-contain relative z-10 drop-shadow-[0_20px_40px_rgba(0,242,254,0.45)] transition-transform duration-500 group-hover:scale-105" style="display: none;">

                                    <!-- Floating Micro-Badge Top Right -->
                                    <div class="absolute top-4 right-4 z-20 px-3 py-1.5 rounded-2xl bg-slate-900/90 border border-cyan-400/50 backdrop-blur-md shadow-lg text-[10px] font-bold text-cyan-300 flex items-center gap-1.5 animate-bounce-slow">
                                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                                        <span>🎓 100% Scholarship Match</span>
                                    </div>

                                    <!-- Floating Micro-Badge Bottom Left -->
                                    <div class="absolute bottom-4 left-4 z-20 px-3 py-1.5 rounded-2xl bg-slate-900/90 border border-purple-400/50 backdrop-blur-md shadow-lg text-[10px] font-bold text-purple-200 flex items-center gap-1.5">
                                        <span class="text-amber-400">⭐</span>
                                        <span>Top 1% Guided University Rank</span>
                                    </div>

                                </div>

                            </div>

                            <!-- Mode 2: Three.js 3D Swarm Arena -->
                            <div x-show="heroMode === 'swarm'" class="w-full h-full relative z-10 pt-10 flex flex-col items-center justify-center" style="display: none;">
                                
                                <!-- 3D Shape Switcher Control -->
                                <div class="px-3 py-1.5 rounded-full bg-slate-950/85 backdrop-blur-md border border-purple-500/40 text-[11px] font-extrabold text-purple-200 flex flex-wrap items-center justify-center gap-1 shadow-xl shadow-purple-950/50 select-none mb-2">
                                    <button id="btn-shape-hand" class="px-2 py-0.5 rounded text-[10px] font-bold bg-purple-600 text-white shadow transition hover:scale-105 active:scale-95 cursor-pointer" title="Open 3D Guiding Hand">✋ Hand</button>
                                    <button id="btn-shape-dna" class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-cyan-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer" title="3D DNA Double Helix">🧬 DNA</button>
                                    <button id="btn-shape-atom" class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-purple-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer" title="Orbiting 3D Atom">⚛️ Atom</button>
                                    <button id="btn-shape-bulb" class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-amber-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer" title="Glowing Lightbulb">💡 Bulb</button>
                                    <button id="btn-shape-thumbs" class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-purple-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer" title="Thumbs Up Gesture">👍 Like</button>
                                    <button id="btn-shape-point" class="px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-purple-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer" title="Pointing Guidance">👈 Point</button>
                                </div>

                                <!-- Three.js Canvas Container -->
                                <div id="three-hero-canvas" class="w-full h-[360px] relative z-10 cursor-grab active:cursor-grabbing"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Quick Lead Evaluation Form Banner -->
    <section class="py-12 bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 border-b border-slate-800 text-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-800/80 p-6 sm:p-8 rounded-3xl border border-slate-700/80 shadow-2xl backdrop-blur-xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-4">
                        <span class="bg-purple-900/70 text-purple-300 text-xs font-bold px-3 py-1 rounded-full uppercase">Instant Profile Match</span>
                        <h2 class="text-2xl font-bold text-white mt-2">Book Free 1:1 Profile Evaluation</h2>
                        <p class="text-xs text-slate-400 mt-1">Receive customized fee benchmarks & scholarship guidance from senior advisors.</p>
                    </div>

                    <div class="lg:col-span-8">
                        <div x-data="leadModalForm()">
                            <div x-show="submitted" class="text-center py-4" style="display: none;">
                                <div class="text-emerald-400 font-bold text-base">✓ Callback Scheduled Successfully!</div>
                                <p class="text-xs text-slate-300 mt-1" x-text="successMessage"></p>
                            </div>

                            <form x-show="!submitted" x-on:submit.prevent="submitForm" class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                                <div>
                                    <input type="text" x-model="formData.full_name" required placeholder="Full Name *"
                                           class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-slate-700 text-white focus:border-purple-500 outline-none text-xs">
                                </div>
                                <div>
                                    <input type="tel" x-model="formData.phone" maxlength="10" required placeholder="Mobile (10 Digits) *"
                                           class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900/90 border border-slate-700 text-white focus:border-purple-500 outline-none text-xs font-semibold">
                                </div>
                                <div>
                                    <select x-model="formData.stream_interest" class="w-full px-3 py-2.5 rounded-xl bg-slate-900/90 border border-slate-700 text-white focus:border-purple-500 outline-none text-xs">
                                        <option value="Engineering">Engineering</option>
                                        <option value="Science">Science</option>
                                        <option value="Commerce">Commerce</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Education">B.Ed / Education</option>
                                        <option value="PhD">PhD Guidance</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" :disabled="loading"
                                            class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-extrabold py-2.5 rounded-xl shadow-lg transition text-xs">
                                        <span x-show="!loading">Book Free Call</span>
                                        <span x-show="loading" style="display: none;">Submitting...</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Course Streams Grid -->
    <section id="streams-section" class="py-20 bg-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-purple-600 font-extrabold text-xs uppercase tracking-widest">Explore Academic Fields</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-2">Top Educational Streams After 12th & Graduation</h2>
                <p class="text-slate-600 text-sm mt-3">Select your desired stream to compare eligibility, salary scope, top colleges, and entrance examination details.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Stream Card 1: Engineering -->
                <a href="{{ url('/best-engineering-courses-after-12th/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-purple-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-purple-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-purple-600/30 group-hover:scale-110 transition-transform">
                        ⚙️
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-purple-600 transition">Engineering Courses</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">Diploma, B.Tech & M.Tech in Computer Science, AI, Mechanical & Civil branches.</p>
                    <div class="mt-4 flex items-center text-purple-600 font-bold text-xs">
                        <span>Explore Engineering</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>

                <!-- Stream Card 2: Science -->
                <a href="{{ url('/courses-after-12th-science/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-indigo-600/30 group-hover:scale-110 transition-transform">
                        🧪
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-indigo-600 transition">Science & Research</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">B.Sc & M.Sc programs in Physics, Chemistry, Biotech, and High-Salary Non-NEET paths.</p>
                    <div class="mt-4 flex items-center text-indigo-600 font-bold text-xs">
                        <span>Explore Science Guide</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>

                <!-- Stream Card 3: Commerce -->
                <a href="{{ url('/best-courses-after-12th-commerce/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-emerald-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-emerald-600/30 group-hover:scale-110 transition-transform">
                        📈
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-emerald-600 transition">Commerce & Finance</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">B.Com, M.Com, CA, CS & CMA professional options with high salary career guides.</p>
                    <div class="mt-4 flex items-center text-emerald-600 font-bold text-xs">
                        <span>Explore Commerce Guide</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>

                <!-- Stream Card 4: Nursing -->
                <a href="{{ url('/best-nursing-course-after-12th/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-rose-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-rose-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-rose-600/30 group-hover:scale-110 transition-transform">
                        🏥
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-rose-600 transition">Nursing & Healthcare</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">GNM, B.Sc & M.Sc Nursing admissions with clinical hospital training details.</p>
                    <div class="mt-4 flex items-center text-rose-600 font-bold text-xs">
                        <span>Explore Nursing Courses</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>

                <!-- Stream Card 5: Agriculture -->
                <a href="{{ url('/agriculture-courses-after-12th/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-amber-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-amber-600/30 group-hover:scale-110 transition-transform">
                        🌾
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-amber-600 transition">Agriculture Courses</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">B.Sc Agriculture details, IARI & ICAR approved college admissions and salary insights.</p>
                    <div class="mt-4 flex items-center text-amber-600 font-bold text-xs">
                        <span>Explore Agriculture</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>

                <!-- Stream Card 6: PhD Guidance -->
                <a href="{{ url('/phd-courses-admission-guidance/') }}" class="group p-6 rounded-3xl bg-slate-50 border border-slate-100 hover:border-purple-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-purple-600 text-white flex items-center justify-center font-bold text-2xl mb-5 shadow-lg shadow-purple-600/30 group-hover:scale-110 transition-transform">
                        🎓
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-purple-600 transition">PhD Admission Guidance</h3>
                    <p class="text-slate-600 text-sm mt-2 leading-relaxed">UGC NET, CSIR NET, direct doctorate admissions, proposal guidance & entrance tips.</p>
                    <div class="mt-4 flex items-center text-purple-600 font-bold text-xs">
                        <span>Explore PhD Guidance</span>
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Top Colleges Showcase -->
    <section class="py-16 bg-[#070B19] text-white border-t border-b border-slate-800 optim-contain reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-amber-400 font-extrabold text-xs uppercase tracking-widest">UGC / AICTE Approved</span>
                    <h2 class="text-3xl font-extrabold text-white mt-1">Featured Partner Colleges & Universities</h2>
                </div>
                <button x-on:click="isModalOpen = true; modalTitle = 'Get College Cutoff & Fee Details'"
                        class="mt-4 md:mt-0 text-purple-400 hover:text-white font-bold text-sm flex items-center gap-1">
                    <span>Check College Fees & Seats</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($colleges as $college)
                    <div class="bg-slate-900/80 p-6 rounded-2xl border border-slate-800 hover:border-purple-500/50 transition">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-purple-900/60 text-purple-300 text-xs font-semibold px-2.5 py-1 rounded-md border border-purple-700/40">{{ $college->approval_body }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-sm font-bold">
                                <span>★</span>
                                <span>{{ $college->rating }}</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-1">{{ $college->name }}</h3>
                        <p class="text-xs text-slate-400 mb-4">{{ $college->location }}</p>
                        <div class="border-t border-slate-800 pt-3 flex justify-between items-center text-xs text-slate-300">
                            <span>{{ $college->total_courses }} Courses Offered</span>
                            <button x-on:click="isModalOpen = true; modalTitle = 'Apply to {{ addslashes($college->name) }}'; selectedCourse = '{{ addslashes($college->name) }}'"
                                    class="text-purple-400 font-bold hover:underline">Apply Now</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Students Trust Us Section -->
    <section class="py-16 sm:py-20 bg-slate-900 text-white border-t border-slate-800 optim-contain reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-6 space-y-6">
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-extrabold tracking-widest text-purple-400 bg-purple-950/80 border border-purple-800 uppercase inline-block">
                        PROVEN GUIDANCE METHODOLOGY
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        Why Students Trust Us
                    </h2>
                    <p class="text-slate-300 text-base leading-relaxed">
                        Choosing a course is not easy. Therefore, we simplify the process for you. Our team studies your interests first. Then, we match them with the right courses and colleges. As a result, you save time and avoid wrong decisions.
                    </p>

                    <div class="pt-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 flex items-start gap-3">
                            <span class="text-purple-400 text-xl font-bold">✓</span>
                            <span class="text-sm font-semibold text-slate-200">We explain entrance exams in simple terms</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 flex items-start gap-3">
                            <span class="text-purple-400 text-xl font-bold">✓</span>
                            <span class="text-sm font-semibold text-slate-200">We compare colleges based on real data</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 flex items-start gap-3">
                            <span class="text-purple-400 text-xl font-bold">✓</span>
                            <span class="text-sm font-semibold text-slate-200">We guide you through application deadlines</span>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 flex items-start gap-3">
                            <span class="text-purple-400 text-xl font-bold">✓</span>
                            <span class="text-sm font-semibold text-slate-200">We support you until you get admission</span>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center gap-4">
                        <button x-on:click="isModalOpen = true; modalTitle = 'Get Free Admission Counselling'; selectedCourse = 'General Enquiry'"
                                class="bg-purple-600 hover:bg-purple-500 text-white font-extrabold px-6 py-3.5 rounded-xl shadow-lg shadow-purple-600/30 transition text-sm">
                            Get free counselling
                        </button>
                        <button x-on:click="isModalOpen = true; modalTitle = 'Talk to an Admission Expert'"
                                class="bg-slate-800 hover:bg-slate-700 text-slate-200 font-bold px-6 py-3.5 rounded-xl border border-slate-700 transition text-sm">
                            Talk to an expert
                        </button>
                    </div>
                </div>

                <!-- Right Visual Feature Grid -->
                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-6 rounded-3xl bg-gradient-to-br from-purple-900/40 via-slate-900 to-slate-950 border border-purple-500/30 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-purple-600/30 border border-purple-500/40 flex items-center justify-center text-purple-300 text-2xl font-bold">
                            📝
                        </div>
                        <h3 class="text-lg font-bold text-white">Simple Exam Insights</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">No complicated jargon—clear breakdowns of JEE, CLAT, CUET, NEET, and university tests.</p>
                    </div>

                    <div class="p-6 rounded-3xl bg-gradient-to-br from-blue-900/40 via-slate-900 to-slate-950 border border-blue-500/30 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-blue-600/30 border border-blue-500/40 flex items-center justify-center text-blue-300 text-2xl font-bold">
                            📊
                        </div>
                        <h3 class="text-lg font-bold text-white">Data-Backed Ranks</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">Verifiable placement stats, statutory approvals, historical cutoffs, and fee benchmarks.</p>
                    </div>

                    <div class="p-6 rounded-3xl bg-gradient-to-br from-indigo-900/40 via-slate-900 to-slate-950 border border-indigo-500/30 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-indigo-600/30 border border-indigo-500/40 flex items-center justify-center text-indigo-300 text-2xl font-bold">
                            ⏰
                        </div>
                        <h3 class="text-lg font-bold text-white">Deadline Tracking</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">Never miss counseling form updates, seat allotment rounds, or scholarship windows.</p>
                    </div>

                    <div class="p-6 rounded-3xl bg-gradient-to-br from-emerald-900/40 via-slate-900 to-slate-950 border border-emerald-500/30 space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-emerald-600/30 border border-emerald-500/40 flex items-center justify-center text-emerald-300 text-2xl font-bold">
                            🤝
                        </div>
                        <h3 class="text-lg font-bold text-white">End-to-End Support</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">Personal guidance from initial career counseling till your final college seat acceptance.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Specific Academic Program Guidance Sections (Engineering, Law, PhD, PhD in Management) -->
    <section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-purple-600 font-extrabold text-xs uppercase tracking-widest">FOCUSED ACADEMIC COUNSELLING</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2">Comprehensive Course & Admission Guidance</h2>
                <p class="text-slate-600 text-sm sm:text-base mt-3 leading-relaxed">Explore specialized guidance tailored for high-growth streams, doctoral research, and career acceleration.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Best Engineering Courses After 12th -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold text-2xl">
                        ⚙️
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Best Engineering Courses After 12th</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Engineering remains a top choice for science students. But the field has grown far beyond just computer science. Now, students can pick from robotics, AI, biotechnology, and civil engineering. Meanwhile, core branches like mechanical and electrical still hold strong value in the job market. So, we help you understand which branch fits your skills. Additionally, we guide you on entrance exams like JEE and state-level tests. This way, you apply with confidence and clear direction.
                    </p>
                    <div class="pt-2">
                        <a href="{{ url('/best-engineering-courses-after-12th/') }}" class="inline-flex items-center gap-2 text-purple-600 font-extrabold text-sm hover:underline">
                            <span>Explore Engineering Guidance</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Law Courses After 12th -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-2xl">
                        ⚖️
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">Law Courses After 12th</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Law is no longer just about courtrooms. Today, it covers corporate law, cyber law, and human rights too. Students can join a 5-year integrated law course right after school. Or, they can complete graduation first and then pursue a 3-year LLB. Either way, the career scope keeps expanding. Our counselors explain both paths clearly. Then, they help you pick colleges that match your goals and budget.
                    </p>
                    <div class="pt-2">
                        <a href="{{ url('/courses-trusted-education-consultants/') }}" class="inline-flex items-center gap-2 text-blue-600 font-extrabold text-sm hover:underline">
                            <span>Explore Law Guidance</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- PhD Courses Admission Guidance -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-2xl">
                        🎓
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">PhD Courses Admission Guidance</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        A PhD demands patience and the right research direction. That's why proper PhD courses admission guidance matters so much. We help you shortlist universities that support your subject of interest. We also guide you through entrance tests, research proposals, and interviews. Furthermore, our team explains funding options and scholarships available for research scholars.
                    </p>
                    <div class="pt-2">
                        <a href="{{ url('/phd-courses-admission-guidance/') }}" class="inline-flex items-center gap-2 text-emerald-600 font-extrabold text-sm hover:underline">
                            <span>Explore PhD Guidance</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- PhD in Management -->
                <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-sm hover:shadow-md transition space-y-4">
                    <div class="w-14 h-14 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center font-bold text-2xl">
                        📈
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900">PhD in Management</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Many working professionals now consider a PhD in Management to grow their career. This degree opens doors to teaching, consulting, and top leadership roles. It also builds deep expertise in business strategy and decision-making. We help candidates choose universities that offer strong research support and flexible schedules. Moreover, we assist with entrance exams and thesis planning.
                    </p>
                    <div class="pt-2">
                        <a href="{{ url('/phd-courses-admission-guidance/') }}" class="inline-flex items-center gap-2 text-amber-700 font-extrabold text-sm hover:underline">
                            <span>Explore PhD in Management</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- High-Conversion Banner: Start Your Journey Today -->
    <section class="py-16 bg-gradient-to-r from-purple-900 via-indigo-900 to-slate-900 text-white relative overflow-hidden reveal-on-scroll">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 relative z-10">
            <span class="px-4 py-1.5 rounded-full text-xs font-extrabold tracking-widest text-purple-300 bg-purple-950/70 border border-purple-500/40 uppercase inline-block">
                YOUR CAREER PATHWAY
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
                Start Your Journey Today
            </h2>
            <p class="text-slate-200 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed font-medium">
                Your future deserves careful planning, not guesswork. So, let AdmissionsDekho guide you toward the course and college that truly fit your goals. After all, the right guidance today shapes a stronger tomorrow.
            </p>
            <div class="pt-4 flex flex-wrap justify-center items-center gap-4">
                <button x-on:click="isModalOpen = true; modalTitle = 'Get Free Admission Counselling'; selectedCourse = 'General Enquiry'"
                        class="bg-purple-500 hover:bg-purple-400 text-white font-extrabold px-8 py-4 rounded-2xl shadow-2xl shadow-purple-600/50 transition-all text-sm flex items-center gap-2">
                    <span>Get free counselling</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
                <button x-on:click="isModalOpen = true; modalTitle = 'Talk to an Admission Expert'"
                        class="bg-white/10 hover:bg-white/20 text-white font-bold px-8 py-4 rounded-2xl border border-white/20 transition-all text-sm backdrop-blur-md">
                    Talk to an expert
                </button>
            </div>
        </div>
    </section>

    <!-- Explore Top Academic Programs Section -->
    <x-academic-programs />

    <!-- Why Education Consultants Are Key Section -->
    <x-why-it-matters />

    <!-- Why Families Choose AdmissionsDekho Section -->
    <x-why-families-choose />

    <!-- Cream Aesthetic Metric Stats & Partner Universities Section -->
    <x-partner-stats />

    <!-- Get in Touch with Our Admission Experts Section -->
    <section class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-admission-form title="Get in Touch with Our Admission Experts" streamInterest="Home Page" />
        </div>
    </section>

    <!-- 20 FAQs About AdmissionsDekho & College Admissions Section -->
    <section class="py-16 sm:py-20 bg-white border-t border-slate-200 reveal-on-scroll">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ activeFaq: null }">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
                <span class="inline-block px-4 py-1.5 text-xs font-extrabold tracking-wider text-purple-600 uppercase bg-purple-100/80 rounded-full mb-3 shadow-sm">
                    FREQUENTLY ASKED QUESTIONS
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                    20 FAQs About AdmissionsDekho & College Admissions
                </h2>
                <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                    Everything you need to know about 1:1 free counseling, statutory college approvals, cutoffs, fee comparisons, and application guidance:
                </p>
            </div>

            @php
                $homeFaqs = [
                    ["q" => "1. What is AdmissionsDekho and how does it help students?", "a" => "AdmissionsDekho is India's leading independent educational guidance portal providing 100% free 1:1 admission counseling, cutoff analysis, fee comparisons, and statutory approval verification for UG, PG & PhD courses."],
                    ["q" => "2. Is student counseling at AdmissionsDekho completely free?", "a" => "Yes! All counseling sessions, profile evaluations, cutoff reports, and application guidance provided by AdmissionsDekho are 100% free with zero hidden charges."],
                    ["q" => "3. How do I book a 1:1 free counseling session?", "a" => "You can fill out any request form on our website, click 'Book Free Counseling', or call our helpline at +91 9643802216 to connect instantly with a senior academic advisor."],
                    ["q" => "4. Which entrance exams does AdmissionsDekho provide cutoffs for?", "a" => "We provide cutoff rankings, opening/closing rank analysis, and counseling guidance for CLAT, AILET, JEE Main, CUET, NEET, CAT, MAT, GPAT, and state-level entrance exams."],
                    ["q" => "5. How does AdmissionsDekho verify university statutory approvals?", "a" => "We exclusively guide students to institutions holding official statutory accreditations from apex bodies like UGC, AICTE, BCI (Law), PCI (Pharmacy), INC (Nursing), and NCTE (Education)."],
                    ["q" => "6. Can Class 12 board appearing students register for counseling?", "a" => "Yes! Students appearing for their Class 12 board exams in the current academic year can register for pre-admission counseling and cutoff shortlisting."],
                    ["q" => "7. What documents are needed for profile evaluation?", "a" => "Standard details include Class 10th/12th percentages, entrance exam scorecard (if available), preferred course stream, budget range, and state domicile preference."],
                    ["q" => "8. Does AdmissionsDekho assist with education loan letters?", "a" => "Yes, our advisors assist candidates with bonafide documentation, college fee structures, and loan recommendation letters required by public and private banks."],
                    ["q" => "9. What is the difference between statutory approved and non-approved colleges?", "a" => "Degrees from statutory-approved colleges (UGC/AICTE/BCI/PCI/INC) are legally valid for Central/State government jobs, public exams (UPSC, GATE), and international higher education."],
                    ["q" => "10. Can I get guidance for distance & online degree programs?", "a" => "Yes, we provide counseling for UGC-DEB approved online and distance education degrees (BBA, MBA, MCA, BCA, M.Com) for working professionals."],
                    ["q" => "11. How does AdmissionsDekho calculate college rank fit for candidates?", "a" => "Our smart profile evaluator matches your academic aggregate and entrance percentile against historical opening and closing rank cutoffs of 120+ partner institutions."],
                    ["q" => "12. What streams and courses are covered by AdmissionsDekho?", "a" => "We offer comprehensive admission guidance for Engineering (B.Tech), Law (BA LLB/LLM), Management (BBA/MBA), Computer Applications (BCA/MCA), Nursing, Pharmacy, Agriculture, Arts, Science, B.Ed, and PhD."],
                    ["q" => "13. Does AdmissionsDekho offer assistance for direct management seats?", "a" => "Yes, we guide candidates through official institutional quota application procedures in strict compliance with university and statutory council directives."],
                    ["q" => "14. Are merit scholarships available through AdmissionsDekho partner colleges?", "a" => "Yes! We help candidates identify tuition fee waivers, merit-cum-means scholarships, and state government fee concessions."],
                    ["q" => "15. How long does a free counseling session take?", "a" => "A typical 1:1 tele-counseling or Google Meet video session takes 20 to 30 minutes, covering course selection, college shortlisting, and fee comparisons."],
                    ["q" => "16. Can parents join the admission counseling session?", "a" => "We strongly encourage parents to join counseling sessions to discuss fee structures, hostel accommodation safety, and institutional accreditations."],
                    ["q" => "17. What if I want to change my chosen course stream after Class 12th?", "a" => "Our senior counselors evaluate multi-stream eligibility options (e.g. Science to Law/Management, Commerce to BCA) to ensure seamless academic transitions."],
                    ["q" => "18. How does AdmissionsDekho handle my personal contact data?", "a" => "Your personal privacy is strictly safeguarded under IT Act & GDPR standards. We do NOT sell or trade student data to third-party data brokers."],
                    ["q" => "19. How do I receive application updates and merit list notifications?", "a" => "Once registered, you receive instant WhatsApp, SMS, and email alerts regarding entrance test dates, counseling schedules, and college seat allotments."],
                    ["q" => "20. How can I get in touch with AdmissionsDekho immediately?", "a" => "You can call our helpline at +91 9643802216, email info@admissionsdekho.com, or visit our office in New Delhi for face-to-face counseling."]
                ];
            @endphp

            <!-- FAQ Accordion List -->
            <div class="space-y-3.5">
                @foreach($homeFaqs as $index => $faq)
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all">
                        <button @click="activeFaq = (activeFaq === {{ $index + 1 }} ? null : {{ $index + 1 }})"
                                class="w-full p-5 text-left font-bold text-slate-900 text-sm sm:text-base flex justify-between items-center gap-4 hover:text-purple-600 transition">
                            <span>{{ $faq['q'] }}</span>
                            <span class="text-purple-600 font-bold text-xl shrink-0 transition-transform duration-200" :class="{ 'rotate-45': activeFaq === {{ $index + 1 }} }">+</span>
                        </button>
                        <div x-show="activeFaq === {{ $index + 1 }}" x-collapse class="px-5 pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Three.js Real-time 3D Collision & Catching Physics Scene Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('three-hero-canvas');
            if (!container) return;
            if (typeof THREE === 'undefined') return;

            // Scene, Camera, Renderer
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
            camera.position.z = 11.5;

            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setSize(container.clientWidth, container.clientHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            // Lighting Setup
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.9);
            scene.add(ambientLight);

            const pointLight1 = new THREE.PointLight(0x8b5cf6, 5, 45); // Electric Violet
            pointLight1.position.set(7, 7, 7);
            scene.add(pointLight1);

            const pointLight2 = new THREE.PointLight(0x2563eb, 5, 45); // Deep Blue
            pointLight2.position.set(-7, -7, 7);
            scene.add(pointLight2);

            // Moving White Pearl Light Source ("White Moti")
            const whiteLight = new THREE.PointLight(0xffffff, 8, 18);
            scene.add(whiteLight);

            // Glowing White Pearl ("White Moti alag se rakha hai") - Small size matching cluster
            const coreGeo = new THREE.SphereGeometry(0.20, 32, 32);
            const coreMat = new THREE.MeshStandardMaterial({
                color: 0xffffff,
                emissive: 0xffffff,
                emissiveIntensity: 1.5,
                roughness: 0.05,
                metalness: 0.1
            });
            const coreMesh = new THREE.Mesh(coreGeo, coreMat);
            scene.add(coreMesh);

            // --- Parametric 3D Hand & Particle Shape Points Generator ---
            function createShapePoints(shapeType, count) {
                const points = [];

                function addSegment(num, p1, p2, r1, r2, zJitter = 0.4) {
                    for (let i = 0; i < num; i++) {
                        const t = (i + Math.random() * 0.4) / Math.max(1, num);
                        const px = p1.x + (p2.x - p1.x) * t;
                        const py = p1.y + (p2.y - p1.y) * t;
                        const pz = p1.z + (p2.z - p1.z) * t;

                        const radius = r1 + (r2 - r1) * t;
                        const angle = Math.random() * Math.PI * 2;
                        const dist = Math.sqrt(Math.random()) * radius;

                        points.push(new THREE.Vector3(
                            px + Math.cos(angle) * dist,
                            py + Math.sin(angle) * dist,
                            pz + (Math.random() - 0.5) * radius * zJitter
                        ));
                    }
                }

                if (shapeType === 'hand') {
                    // --- ✋ 3D OPEN GUIDING HAND SHAPE ---
                    const nWrist = Math.floor(count * 0.12);
                    const nPalm = Math.floor(count * 0.38);
                    const nThumb = Math.floor(count * 0.11);
                    const nIndex = Math.floor(count * 0.12);
                    const nMiddle = Math.floor(count * 0.12);
                    const nRing = Math.floor(count * 0.09);
                    const nPinky = count - (nWrist + nPalm + nThumb + nIndex + nMiddle + nRing);

                    // Forearm / Wrist
                    for (let i = 0; i < nWrist; i++) {
                        const y = -2.3 + (i / nWrist) * 1.1;
                        const r = 0.55 + 0.1 * (y + 2.3);
                        const angle = Math.random() * Math.PI * 2;
                        const dist = Math.sqrt(Math.random()) * r;
                        points.push(new THREE.Vector3(Math.cos(angle) * dist, y, Math.sin(angle) * dist * 0.6));
                    }
                    // Palm (Curved Metacarpal Volume)
                    for (let i = 0; i < nPalm; i++) {
                        const u = (Math.random() * 2 - 1);
                        const v = (Math.random() * 2 - 1);
                        const x = u * 1.05;
                        const y = -1.2 + (v + 1) * 1.0;
                        const cup = 0.35 * (1 - u * u) * (1 - v * v);
                        const z = (Math.random() - 0.5) * 0.4 + cup;
                        points.push(new THREE.Vector3(x, y, z));
                    }
                    // Extended Thumb
                    addSegment(nThumb, {x: -0.9, y: -0.5, z: 0.1}, {x: -1.75, y: 0.45, z: 0.5}, 0.28, 0.18);
                    // Extended Index Finger
                    addSegment(nIndex, {x: -0.70, y: 0.75, z: 0.05}, {x: -0.80, y: 2.60, z: 0.15}, 0.22, 0.14);
                    // Long Middle Finger
                    addSegment(nMiddle, {x: -0.22, y: 0.80, z: 0.08}, {x: -0.22, y: 2.90, z: 0.20}, 0.23, 0.15);
                    // Ring Finger
                    addSegment(nRing, {x: 0.26, y: 0.75, z: 0.05}, {x: 0.34, y: 2.60, z: 0.15}, 0.21, 0.14);
                    // Pinky Finger
                    addSegment(nPinky, {x: 0.72, y: 0.65, z: 0.0}, {x: 0.88, y: 2.15, z: 0.10}, 0.18, 0.12);

                } else if (shapeType === 'dna') {
                    // --- 🧬 3D DNA DOUBLE HELIX ---
                    const half = Math.floor(count / 2);
                    const turns = 3.5;
                    const height = 4.8;
                    const radius = 1.25;

                    for (let i = 0; i < half; i++) {
                        const t = (i / half);
                        const y = -height / 2 + t * height;
                        const angle = t * Math.PI * 2 * turns;
                        const jitter = (Math.random() - 0.5) * 0.15;
                        // Strand 1
                        points.push(new THREE.Vector3(Math.cos(angle) * radius + jitter, y, Math.sin(angle) * radius + jitter));
                        // Strand 2
                        points.push(new THREE.Vector3(Math.cos(angle + Math.PI) * radius + jitter, y, Math.sin(angle + Math.PI) * radius + jitter));
                    }

                } else if (shapeType === 'atom') {
                    // --- ⚛️ 3D ORBITING ATOM ---
                    const nNucleus = Math.floor(count * 0.25);
                    const nOrbits = count - nNucleus;
                    
                    // Dense Nucleus
                    for (let i = 0; i < nNucleus; i++) {
                        const r = Math.cbrt(Math.random()) * 0.7;
                        const theta = Math.random() * Math.PI * 2;
                        const phi = Math.acos(2 * Math.random() - 1);
                        points.push(new THREE.Vector3(
                            r * Math.sin(phi) * Math.cos(theta),
                            r * Math.sin(phi) * Math.sin(theta),
                            r * Math.cos(phi)
                        ));
                    }

                    // 3 Tilted Electron Orbital Rings
                    const ringCount = Math.floor(nOrbits / 3);
                    const angles = [0, Math.PI / 3, -Math.PI / 3];
                    angles.forEach(tilt => {
                        for (let i = 0; i < ringCount; i++) {
                            const a = (i / ringCount) * Math.PI * 2;
                            const r = 2.2 + (Math.random() - 0.5) * 0.2;
                            const v = new THREE.Vector3(Math.cos(a) * r, Math.sin(a) * r, (Math.random() - 0.5) * 0.15);
                            v.applyAxisAngle(new THREE.Vector3(1, 1, 0).normalize(), tilt);
                            points.push(v);
                        }
                    });

                } else if (shapeType === 'bulb') {
                    // --- 💡 3D LIGHTBULB ---
                    const nGlass = Math.floor(count * 0.70);
                    const nBase = count - nGlass;

                    for (let i = 0; i < nGlass; i++) {
                        const t = i / nGlass;
                        const y = -0.5 + t * 2.8;
                        const r = (y < 0.8) ? (0.6 + 0.4 * (y + 0.5)) : Math.sqrt(Math.max(0, 1.4 * 1.4 - (y - 0.8) * (y - 0.8)));
                        const angle = Math.random() * Math.PI * 2;
                        const dist = (Math.random() > 0.3) ? r : Math.random() * r;
                        points.push(new THREE.Vector3(Math.cos(angle) * dist, y, Math.sin(angle) * dist));
                    }
                    for (let i = 0; i < nBase; i++) {
                        const y = -1.8 + (i / nBase) * 1.2;
                        const r = 0.55 - (y + 1.8) * 0.08;
                        const angle = Math.random() * Math.PI * 2;
                        points.push(new THREE.Vector3(Math.cos(angle) * r, y, Math.sin(angle) * r));
                    }

                } else if (shapeType === 'thumbs') {
                    // --- 👍 THUMBS UP GESTURE ---
                    const nWrist = Math.floor(count * 0.12);
                    const nFist = Math.floor(count * 0.52);
                    const nThumb = count - nWrist - nFist;

                    for (let i = 0; i < nWrist; i++) {
                        const y = -2.3 + (i / nWrist) * 1.0;
                        const angle = Math.random() * Math.PI * 2;
                        const dist = Math.sqrt(Math.random()) * 0.6;
                        points.push(new THREE.Vector3(Math.cos(angle) * dist, y, Math.sin(angle) * dist * 0.7));
                    }
                    for (let i = 0; i < nFist; i++) {
                        const u = (Math.random() * 2 - 1);
                        const v = (Math.random() * 2 - 1);
                        const x = u * 1.0;
                        const y = -1.2 + (v + 1) * 0.85;
                        const z = Math.sin((u + 1) * Math.PI * 0.5) * 0.65 + (Math.random() - 0.5) * 0.35;
                        points.push(new THREE.Vector3(x, y, z));
                    }
                    addSegment(nThumb, {x: -0.45, y: 0.3, z: 0.3}, {x: -0.50, y: 2.7, z: 0.45}, 0.36, 0.22);

                } else if (shapeType === 'point') {
                    // --- 👈 POINTING GUIDANCE GESTURE ---
                    const nWrist = Math.floor(count * 0.12);
                    const nFist = Math.floor(count * 0.46);
                    const nIndex = Math.floor(count * 0.28);
                    const nThumb = count - nWrist - nFist - nIndex;

                    for (let i = 0; i < nWrist; i++) {
                        const y = -2.3 + (i / nWrist) * 1.0;
                        const angle = Math.random() * Math.PI * 2;
                        const dist = Math.sqrt(Math.random()) * 0.6;
                        points.push(new THREE.Vector3(Math.cos(angle) * dist, y, Math.sin(angle) * dist * 0.7));
                    }
                    for (let i = 0; i < nFist; i++) {
                        const u = (Math.random() * 2 - 1);
                        const v = (Math.random() * 2 - 1);
                        const x = u * 0.95;
                        const y = -1.2 + (v + 1) * 0.8;
                        const z = (Math.random() - 0.5) * 0.65;
                        points.push(new THREE.Vector3(x, y, z));
                    }
                    addSegment(nIndex, {x: -0.4, y: 0.4, z: 0.1}, {x: -0.4, y: 3.1, z: 0.25}, 0.25, 0.15);
                    addSegment(nThumb, {x: -0.85, y: -0.4, z: 0.2}, {x: -0.45, y: 0.1, z: 0.55}, 0.26, 0.18);

                } else {
                    // --- 🔮 SWARM SPHERE ---
                    for (let i = 0; i < count; i++) {
                        const phi = Math.acos(-1 + (2 * i) / count);
                        const theta = Math.sqrt(count * Math.PI) * phi;
                        const r = 1.2 + (i % 8) * 0.15 + Math.random() * 0.08;
                        points.push(new THREE.Vector3(
                            r * Math.sin(phi) * Math.cos(theta),
                            r * Math.sin(phi) * Math.sin(theta),
                            r * Math.cos(phi)
                        ));
                    }
                }

                return points;
            }

            // Large & Dense Purple/Blue Spheres Cluster Group ("3D Hand Swarm")
            const clusterGroup = new THREE.Group();
            clusterGroup.position.set(0.1, -0.2, 0); // Center hand neatly in frame
            
            const spheres = [];
            const count = 350; // 350 glowing beads for ultra-high detail hand mesh!
            const baseColor = new THREE.Color(0x6b21a8); // Rich Purple
            const strikeColor = new THREE.Color(0x00f0ff); // Electric Cyan Glow

            // Generate initial 3D Hand points
            const initialHandPoints = createShapePoints('hand', count);

            for (let i = 0; i < count; i++) {
                const sphereRadius = 0.11 + Math.random() * 0.07;
                const sphereGeo = new THREE.SphereGeometry(sphereRadius, 14, 14);

                const mat = new THREE.MeshStandardMaterial({
                    color: 0x4c1d95,
                    emissive: 0x2e0854,
                    roughness: 0.10,
                    metalness: 0.90
                });

                const mesh = new THREE.Mesh(sphereGeo, mat);

                const targetBasePos = initialHandPoints[i] ? initialHandPoints[i].clone() : new THREE.Vector3(0, 0, 0);
                const currentBasePos = targetBasePos.clone();

                mesh.position.copy(currentBasePos);
                clusterGroup.add(mesh);

                spheres.push({
                    mesh: mesh,
                    basePos: currentBasePos,
                    targetBasePos: targetBasePos,
                    displacement: new THREE.Vector3(0, 0, 0),
                    velocity: new THREE.Vector3(0, 0, 0),
                    hitIntensity: 0,
                    wobbleSpeed: 1.0 + Math.random() * 1.5,
                    wobblePhase: Math.random() * Math.PI * 2
                });
            }
            scene.add(clusterGroup);

            // Shape Switcher Logic
            function switchShape(shapeName, activeBtnId) {
                const newPoints = createShapePoints(shapeName, count);
                spheres.forEach((item, idx) => {
                    if (newPoints[idx]) {
                        item.targetBasePos.copy(newPoints[idx]);
                    }
                });

                const btnIds = ['btn-shape-hand', 'btn-shape-dna', 'btn-shape-atom', 'btn-shape-bulb', 'btn-shape-thumbs', 'btn-shape-point'];
                btnIds.forEach(id => {
                    const btn = document.getElementById(id);
                    if (!btn) return;
                    if (id === activeBtnId) {
                        btn.className = "px-2 py-0.5 rounded text-[10px] font-bold bg-purple-600 text-white shadow transition hover:scale-105 active:scale-95 cursor-pointer";
                    } else {
                        btn.className = "px-2 py-0.5 rounded text-[10px] font-bold bg-slate-800 text-purple-300 hover:text-white transition hover:scale-105 active:scale-95 cursor-pointer";
                    }
                });
            }

            document.getElementById('btn-shape-hand')?.addEventListener('click', () => switchShape('hand', 'btn-shape-hand'));
            document.getElementById('btn-shape-dna')?.addEventListener('click', () => switchShape('dna', 'btn-shape-dna'));
            document.getElementById('btn-shape-atom')?.addEventListener('click', () => switchShape('atom', 'btn-shape-atom'));
            document.getElementById('btn-shape-bulb')?.addEventListener('click', () => switchShape('bulb', 'btn-shape-bulb'));
            document.getElementById('btn-shape-thumbs')?.addEventListener('click', () => switchShape('thumbs', 'btn-shape-thumbs'));
            document.getElementById('btn-shape-point')?.addEventListener('click', () => switchShape('point', 'btn-shape-point'));

            // Interactive Gamification Pointer & Click Burst Logic
            let mouseX = 0, mouseY = 0;
            let targetWhiteX = 3.5, targetWhiteY = 2.2, targetWhiteZ = 1.5;
            let isUserControlling = false;
            let idleTimer = null;
            let clickShockwave = 0;

            // Track Mouse Cursor inside Canvas Stage
            container.addEventListener('mousemove', (e) => {
                const rect = container.getBoundingClientRect();
                const normX = ((e.clientX - rect.left) / rect.width) * 2 - 1;
                const normY = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
                
                targetWhiteX = normX * 5.2;
                targetWhiteY = normY * 3.6;
                targetWhiteZ = 1.8;

                mouseX = normX;
                mouseY = normY;

                isUserControlling = true;
                clearTimeout(idleTimer);
                idleTimer = setTimeout(() => { isUserControlling = false; }, 3500);
            });

            // Gamification Click / Tap Shockwave Explosion
            container.addEventListener('click', (e) => {
                clickShockwave = 1.0;
                spheres.forEach(item => {
                    const burstVec = item.basePos.clone().normalize();
                    const force = (0.8 + Math.random() * 0.8);
                    item.velocity.addScaledVector(burstVec, force);
                    item.hitIntensity = 1.0;
                });
            });

            // 60FPS Dynamic Animation Loop
            const clock = new THREE.Clock();

            function animate() {
                requestAnimationFrame(animate);
                const t = clock.getElapsedTime();

                // 1. White Pearl Light Source Motion
                if (!isUserControlling) {
                    const loop = (t * 0.8) % (Math.PI * 2);
                    const plungeFactor = Math.sin(loop);
                    targetWhiteX = 3.6 * Math.cos(loop * 0.5) + (1.0 - Math.abs(plungeFactor)) * 0.8;
                    targetWhiteY = 2.4 * Math.sin(loop * 0.7) + Math.cos(loop * 1.2) * 1.0;
                    targetWhiteZ = Math.sin(loop * 1.1) * 2.2;
                }

                coreMesh.position.x += (targetWhiteX - coreMesh.position.x) * 0.12;
                coreMesh.position.y += (targetWhiteY - coreMesh.position.y) * 0.12;
                coreMesh.position.z += (targetWhiteZ - coreMesh.position.z) * 0.12;

                whiteLight.position.copy(coreMesh.position);

                // Gentle Hand Floating & Waving Rotations
                clusterGroup.rotation.y = Math.sin(t * 0.5) * 0.25;
                clusterGroup.rotation.x = Math.sin(t * 0.3) * 0.10;

                // Mouse Parallax
                scene.rotation.y += (mouseX * 0.08 - scene.rotation.y) * 0.05;
                scene.rotation.x += (mouseY * 0.08 - scene.rotation.x) * 0.05;

                // 2. Collision Strike & Swarm Physics
                const coreWorldPos = coreMesh.position;

                spheres.forEach(item => {
                    const s = item.mesh;

                    // Smoothly morph base position to target 3D shape position
                    item.basePos.lerp(item.targetBasePos, 0.06);

                    const sphereWorldPos = item.basePos.clone().applyMatrix4(clusterGroup.matrixWorld);
                    const toWhiteVec = new THREE.Vector3().subVectors(coreWorldPos, sphereWorldPos);
                    const distToWhite = toWhiteVec.length();

                    const collisionRadius = 1.6;
                    const chaseRadius = 4.5;

                    if (distToWhite < collisionRadius && distToWhite > 0.001) {
                        toWhiteVec.normalize();
                        const impactForce = (collisionRadius - distToWhite) * 0.35;
                        item.velocity.addScaledVector(toWhiteVec.clone().negate(), impactForce);
                        item.hitIntensity = 1.0;
                    } else if (distToWhite < chaseRadius && distToWhite > 0.001) {
                        toWhiteVec.normalize();
                        const chaseForce = (chaseRadius - distToWhite) * 0.06;
                        item.velocity.addScaledVector(toWhiteVec, chaseForce);
                    }

                    const springForce = item.displacement.clone().multiplyScalar(-0.10);
                    item.velocity.add(springForce);
                    item.velocity.multiplyScalar(0.82);

                    item.displacement.add(item.velocity);

                    const idlePulse = Math.sin(t * item.wobbleSpeed + item.wobblePhase) * 0.04;
                    const idleOffset = item.basePos.clone().normalize().multiplyScalar(idlePulse);

                    s.position.copy(item.basePos).add(item.displacement).add(idleOffset);

                    if (item.hitIntensity > 0) {
                        item.hitIntensity -= 0.04;
                        s.material.emissive.copy(baseColor).lerp(strikeColor, item.hitIntensity);
                        s.material.emissiveIntensity = 0.3 + item.hitIntensity * 1.6;
                    } else {
                        s.material.emissive.copy(baseColor);
                        s.material.emissiveIntensity = 0.3;
                    }
                });

                renderer.render(scene, camera);
            }
            animate();

            // Window Resize Handler
            window.addEventListener('resize', () => {
                if (!container) return;
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
            });
        });
    </script>


</x-layout.app>
