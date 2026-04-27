<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Solar CRM')</title>
    <meta name="description" content="@yield('meta_description', 'Sign in to Solar CRM — the all-in-one platform for solar businesses.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- Auth Page CSS -->
    <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">

    @stack('styles')
</head>
<body class="auth-body">
    <div class="auth-wrapper">

        <!-- ===== LEFT BRANDING PANEL ===== -->
        <div class="auth-panel-left">
            <div class="auth-panel-left-inner">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="auth-logo" aria-label="Solar CRM Home">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="5"/>
                        <line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                        <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                    </svg>
                    <span>Solar CRM</span>
                </a>

                <!-- Headline -->
                <div class="auth-panel-headline">
                    <h1>Power your solar<br>business forward.</h1>
                    <p>Join thousands of solar installers managing their entire operation — from lead to installation — in one smart platform.</p>
                </div>

                <!-- Feature list -->
                <ul class="auth-features" aria-label="Key features">
                    <li class="auth-feature-item">
                        <span class="auth-feature-icon emerald" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Manage leads, quotes &amp; installs in one dashboard</span>
                    </li>
                    <li class="auth-feature-item">
                        <span class="auth-feature-icon blue" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Real-time energy production &amp; savings analytics</span>
                    </li>
                    <li class="auth-feature-item">
                        <span class="auth-feature-icon amber" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Automated permit tracking &amp; compliance tools</span>
                    </li>
                </ul>

                <!-- Testimonial -->
                <blockquote class="auth-testimonial">
                    <p>"Solar CRM cut our admin time by 40%. We close twice as many deals now."</p>
                    <footer class="auth-testimonial-footer">
                        <!-- Using UI faces instead of pravatar for variety -->
                        <img src="https://i.pravatar.cc/48?img=33" alt="Marcus Reed" class="auth-testimonial-avatar">
                        <div>
                            <cite class="auth-testimonial-name">Marcus Reed</cite>
                            <span class="auth-testimonial-role">CEO, SunPeak Installations</span>
                        </div>
                    </footer>
                </blockquote>
            </div>

            <!-- Decorative elements -->
            <div class="auth-blob-1" aria-hidden="true"></div>
            <div class="auth-blob-2" aria-hidden="true"></div>
            <div class="auth-blob-3" aria-hidden="true"></div>
            <div class="auth-blob-4" aria-hidden="true"></div>
        </div>

        <!-- ===== RIGHT FORM PANEL ===== -->
        <div class="auth-panel-right">
            <div class="auth-form-wrapper">
                @yield('content')
            </div>
        </div>

    </div>

    @stack('scripts')
</body>
</html>
