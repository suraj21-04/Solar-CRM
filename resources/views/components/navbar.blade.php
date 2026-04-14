<!-- NAVBAR -->
<nav id="navbar" class="navbar-container">
    <div class="container">
        <div class="nav-wrapper">

            <!-- LEFT: Logo -->
            <div class="nav-logo" onclick="window.location.href='{{ route('home') }}'">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18.75a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-1.5a.75.75 0 01.75-.75zM6.166 17.834a.75.75 0 001.06 1.06l1.591-1.59a.75.75 0 10-1.06-1.061l-1.591 1.59zM4.5 12a.75.75 0 01-.75-.75H1.5a.75.75 0 010 1.5h2.25A.75.75 0 014.5 12zM6.166 6.166a.75.75 0 001.06 1.061L5.636 5.636A.75.75 0 004.576 6.7l1.59 1.59z" />
                </svg>
                <span>Solar CRM</span>
            </div>

            <!-- CENTER: Navigation Links (Desktop) -->
            <div class="nav-menu" id="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Home</a>

                <!-- Mega Dropdown -->
                <div class="has-mega-menu">
                    <button>
                        Features
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div class="mega-menu">
                        <div class="mega-menu-grid">
                            <!-- Feature 1 -->
                            <a href="#" class="mega-menu-card">
                                <div class="mega-icon-wrapper">
                                    <div class="mega-icon emerald">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mega-text">
                                    <h3>Lead Management</h3>
                                    <p>Capture, assign, and track solar prospects effortlessly.</p>
                                </div>
                            </a>
                            <!-- Feature 2 -->
                            <a href="#" class="mega-menu-card">
                                <div class="mega-icon-wrapper">
                                    <div class="mega-icon blue">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mega-text">
                                    <h3>Sales Management</h3>
                                    <p>Automate proposals and accelerate your solar deals.</p>
                                </div>
                            </a>
                            <!-- Feature 3 -->
                            <a href="#" class="mega-menu-card">
                                <div class="mega-icon-wrapper">
                                    <div class="mega-icon amber">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mega-text">
                                    <h3>Inventory Management</h3>
                                    <p>Track panels, inverters, and hardware in real-time.</p>
                                </div>
                            </a>
                            <!-- Feature 4 -->
                            <a href="#" class="mega-menu-card">
                                <div class="mega-icon-wrapper">
                                    <div class="mega-icon purple">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mega-text">
                                    <h3>Tracking Management</h3>
                                    <p>Monitor project milestones and installation KPIs.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
            </div>

            <!-- RIGHT: Auth / Profile -->
            <div class="nav-actions">
                @guest
                    <a href="{{ route('login') }}" class="btn-secondary">Sign In</a>
                    <a href="{{ route('register') }}" class="btn-primary">Sign Up</a>
                @endguest
            </div>

            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="mobile-menu-btn">
                <svg id="menu-icon-open" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-icon-close" style="width: 24px; height: 24px; display: none;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu-panel">
        <div class="mobile-nav-links">
            <a href="{{ route('home') }}" class="mobile-link">Home</a>

            <!-- Mobile Dropdown Accordion -->
            <div>
                <button id="mobile-features-btn" class="mobile-features-btn">
                    Features
                    <svg id="mobile-features-icon" style="width: 16px; height: 16px; transition: transform 0.2s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Accordion Content -->
                <div id="mobile-features-content" class="mobile-features-content">
                    <a href="#" class="mobile-sub-link">Lead Management</a>
                    <a href="#" class="mobile-sub-link">Sales Management</a>
                    <a href="#" class="mobile-sub-link">Inventory Management</a>
                    <a href="#" class="mobile-sub-link">Tracking Management</a>
                </div>
            </div>

            <a href="{{ route('about') }}" class="mobile-link">About Us</a>
            <a href="{{ route('pricing') }}" class="mobile-link">Pricing</a>
            <a href="{{ route('contact') }}" class="mobile-link">Contact Us</a>
        </div>

        <div class="mobile-auth">
            @guest
                <a href="{{ route('login') }}" class="btn-mobile-secondary">Sign In</a>
                <a href="{{ route('register') }}" class="btn-mobile-primary">Sign Up</a>
            @endguest
        </div>
    </div>
</nav>