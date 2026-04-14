<style>
    /* Custom Mega Menu transition styles */
    .mega-menu {
        visibility: hidden;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .has-mega-menu:hover .mega-menu, 
    .mega-menu.active-mobile {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
    }

    /* Nav Sticky shadow transition */
    #navbar { transition: box-shadow 0.3s ease, background-color 0.3s ease; }
    #navbar.scrolled { @apply shadow-md bg-white/90 backdrop-blur-md; }
</style>

<!-- NAVBAR -->
<nav id="navbar" class="fixed w-full top-0 z-50 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- LEFT: Logo -->
            <div class="flex items-center flex-shrink-0 cursor-pointer">
                <svg class="h-8 w-8 text-amber-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18.75a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-1.5a.75.75 0 01.75-.75zM6.166 17.834a.75.75 0 001.06 1.06l1.591-1.59a.75.75 0 10-1.06-1.061l-1.591 1.59zM4.5 12a.75.75 0 01-.75-.75H1.5a.75.75 0 010 1.5h2.25A.75.75 0 014.5 12zM6.166 6.166a.75.75 0 001.06 1.061L5.636 5.636A.75.75 0 004.576 6.7l1.59 1.59z" />
                </svg>
                <span class="ml-2 text-xl font-bold text-slate-900 tracking-tight">Solar CRM</span>
            </div>

            <!-- CENTER: Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-8" id="nav-links">
                <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">Home</a>
                
                <!-- Mega Dropdown -->
                <div class="relative has-mega-menu group">
                    <button class="flex items-center text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors py-8">
                        Features
                        <svg class="ml-1 w-4 h-4 text-slate-400 group-hover:text-amber-500 transition-transform group-hover:-rotate-180 duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div class="mega-menu absolute top-full left-1/2 -translate-x-1/2 w-[600px] bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-6 z-50">
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Feature 1 -->
                            <a href="#" class="flex p-4 rounded-xl hover:bg-slate-50 transition-colors group/card">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover/card:bg-emerald-500 group-hover/card:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-semibold text-slate-900 group-hover/card:text-amber-500 transition-colors">Lead Management</h3>
                                    <p class="mt-1 text-sm text-slate-500">Capture, assign, and track solar prospects effortlessly.</p>
                                </div>
                            </a>
                            <!-- Feature 2 -->
                            <a href="#" class="flex p-4 rounded-xl hover:bg-slate-50 transition-colors group/card">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 group-hover/card:bg-blue-500 group-hover/card:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-semibold text-slate-900 group-hover/card:text-amber-500 transition-colors">Sales Management</h3>
                                    <p class="mt-1 text-sm text-slate-500">Automate proposals and accelerate your solar deals.</p>
                                </div>
                            </a>
                            <!-- Feature 3 -->
                            <a href="#" class="flex p-4 rounded-xl hover:bg-slate-50 transition-colors group/card">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center text-amber-600 group-hover/card:bg-amber-500 group-hover/card:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-semibold text-slate-900 group-hover/card:text-amber-500 transition-colors">Inventory Management</h3>
                                    <p class="mt-1 text-sm text-slate-500">Track panels, inverters, and hardware in real-time.</p>
                                </div>
                            </a>
                            <!-- Feature 4 -->
                            <a href="#" class="flex p-4 rounded-xl hover:bg-slate-50 transition-colors group/card">
                                <div class="flex-shrink-0 mt-1">
                                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center text-purple-600 group-hover/card:bg-purple-500 group-hover/card:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm font-semibold text-slate-900 group-hover/card:text-amber-500 transition-colors">Tracking Management</h3>
                                    <p class="mt-1 text-sm text-slate-500">Monitor project milestones and installation KPIs.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">About Us</a>
                <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">Pricing</a>
                <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">Contact Us</a>
            </div>

            <!-- RIGHT: Auth / Profile -->
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors px-3 py-2">Sign In</a>
                    <a href="{{ route('register') }}" class="text-sm font-medium bg-amber-500 text-white hover:bg-amber-600 hover:shadow-lg hover:shadow-amber-500/30 transition-all rounded-full px-5 py-2.5">Sign Up</a>
                @endguest

                @auth
                    <!-- Profile Avatar when logged in -->
                    <div class="relative group cursor-pointer">
                        <div class="flex items-center space-x-2">
                            <img class="w-9 h-9 rounded-full object-cover border-2 border-amber-500 p-0.5" src="https://ui-avatars.com/api/?name=User&background=f59e0b&color=fff" alt="Profile">
                        </div>
                        <div class="absolute right-0 top-full mt-2 w-48 bg-white border border-slate-100 rounded-xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Dashboard</a>
                                <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Settings</a>
                                <!-- Log out stub -->
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-slate-50 border-t border-slate-100 mt-1">Sign out</a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 transition-colors">
                    <svg class="h-6 w-6" id="menu-icon-open" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden" id="menu-icon-close" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-100">
        <div class="pt-2 pb-4 space-y-1 px-4">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-900 bg-slate-50">Home</a>
            
            <!-- Mobile Dropdown Accordion -->
            <div>
                <button id="mobile-features-btn" class="w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50">
                    Features
                    <svg class="h-4 w-4 transform transition-transform" id="mobile-features-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <!-- Accordion Content -->
                <div id="mobile-features-content" class="hidden pl-6 pr-3 py-2 space-y-3 bg-slate-50/50 rounded-lg mx-3 mt-1 text-sm border border-slate-100">
                    <a href="#" class="block text-slate-600 hover:text-amber-500">Lead Management</a>
                    <a href="#" class="block text-slate-600 hover:text-amber-500">Sales Management</a>
                    <a href="#" class="block text-slate-600 hover:text-amber-500">Inventory Management</a>
                    <a href="#" class="block text-slate-600 hover:text-amber-500">Tracking Management</a>
                </div>
            </div>

            <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">About Us</a>
            <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">Pricing</a>
            <a href="#" class="text-sm font-medium text-slate-600 hover:text-amber-500 transition-colors">Contact Us</a>
        </div>
        
        <div class="pt-4 pb-4 border-t border-slate-100 px-4">
            @guest
                <div class="flex flex-col space-y-3">
                    <a href="{{ route('login') }}" class="w-full text-center px-4 py-2 border border-slate-300 rounded-lg text-slate-700 bg-white hover:bg-slate-50 font-medium">Sign In</a>
                    <a href="{{ route('register') }}" class="w-full text-center px-4 py-2 border border-transparent rounded-lg text-white bg-amber-500 hover:bg-amber-600 font-medium">Sign Up</a>
                </div>
            @endguest
            @auth
                <div class="flex items-center px-3">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=User&background=f59e0b&color=fff" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-slate-800">User Profile</div>
                        <div class="text-sm font-medium text-slate-500">user@example.com</div>
                    </div>
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50">Dashboard</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50">Settings</a>
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:text-red-700 hover:bg-red-50">Sign out</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

<!-- JAVASCRIPT FOR INTERACTIONS -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Navbar Sticky Effect
        const navbar = document.getElementById('navbar');
        if(navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 10) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if(btn) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });
        }

        // Mobile Features Accordion
        const featuresBtn = document.getElementById('mobile-features-btn');
        const featuresContent = document.getElementById('mobile-features-content');
        const featuresIcon = document.getElementById('mobile-features-icon');

        if(featuresBtn) {
            featuresBtn.addEventListener('click', () => {
                featuresContent.classList.toggle('hidden');
                // Rotate icon
                if (featuresContent.classList.contains('hidden')) {
                    featuresIcon.style.transform = 'rotate(0deg)';
                } else {
                    featuresIcon.style.transform = 'rotate(180deg)';
                }
            });
        }
    });
</script>
