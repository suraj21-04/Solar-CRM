@extends('layouts.app')

@section('title', 'Solar CRM - Manage Your Business Smarter')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('content')
    <div class="hero-section">
        <!-- Background decorations -->
        <div class="hero-bg-decor-1"></div>
        <div class="hero-bg-decor-2"></div>

        <div class="container hero-grid">

            <!-- LEFT SIDE (Text & CTAs) -->
            <div class="hero-content">
                <span class="badge-new">
                    <span class="badge-dot"></span>
                    New: Advanced Tracking Management
                </span>

                <h1 class="hero-title">
                    Manage Your <br class="hidden-mobile">
                    <span class="text-gradient">Solar Business</span> Smarter
                </h1>

                <p class="hero-subtitle">
                    All-in-one CRM designed specifically for solar professionals. Seamlessly handle leads, accelerate sales,
                    track inventory, and monitor project milestones from a single platform.
                </p>

                <div class="hero-actions">
                    <a href="#" class="btn-primary btn-large">
                        Get Started
                        <svg style="margin-left:8px; width:20px; height:20px;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="#" class="btn-outline btn-large">
                        Book Demo
                    </a>
                </div>

                <div class="hero-trust">
                    <div class="avatars">
                        <img src="https://i.pravatar.cc/100?img=1" alt="User">
                        <img src="https://i.pravatar.cc/100?img=2" alt="User">
                        <img src="https://i.pravatar.cc/100?img=3" alt="User">
                        <img src="https://i.pravatar.cc/100?img=4" alt="User">
                    </div>
                    <p>Trusted by <strong>10,000+</strong> solar installers</p>
                </div>
            </div>

            <!-- RIGHT SIDE (Illustration Image) -->
            <div class="hero-visual">
                <div class="visual-decor-1"></div>
                <div class="visual-decor-2"></div>

                <div class="visual-wrapper">
                    <div class="visual-inner">
                        <img src="/img/ADMIN_DASHBOARD.png" alt="Solar Panels Management Dashboard" class="visual-img">

                        <div class="visual-overlay-card">
                            <div class="card-info">
                                <div class="card-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <div class="card-text">
                                    <p>Weekly Installations</p>
                                    <p>+42% Growth</p>
                                </div>
                            </div>
                            <div class="card-value">
                                84
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection