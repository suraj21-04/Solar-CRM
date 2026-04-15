@extends('layouts.app')

@section('title', 'About Us - Solar CRM')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endpush

@section('content')
    <div class="about-hero">
        <div class="container">
            <h1 class="about-title">Empowering Solar Installers</h1>
            <p class="about-subtitle">
                We are on a mission to accelerate the transition to renewable energy by building the best management tools
                for solar businesses everywhere.
            </p>
        </div>
    </div>

    <div class="about-content container">
        <div class="about-grid">
            <div class="about-image-wrapper">
                <img class="about-image"
                    src="https://images.unsplash.com/photo-1548613052-1925b4ff025b?q=80&w=800&auto=format&fit=crop"
                    alt="Solar Team">
            </div>
            <div class="about-text">
                <h2>Our Story</h2>
                <p>
                    Founded by industry veterans, Solar CRM was built out of frustration with clunky, generic software that
                    didn't understand the unique needs of the solar industry.
                </p>
                <p>
                    Whether it's managing complex inventory flows, handling permits, or tracking installations on the roof,
                    we know what it takes. We built Solar CRM to be the central nervous system for your solar operations.
                </p>
            </div>
        </div>
    </div>

    <div class="team-section">
        <div class="container">
            <h2 class="team-title">Meet Our Leadership</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img class="team-img" src="https://i.pravatar.cc/300?img=11" alt="Jane Doe">
                    <h3 class="team-name">Jane Doe</h3>
                    <p class="team-role">CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img class="team-img" src="https://i.pravatar.cc/300?img=12" alt="John Smith">
                    <h3 class="team-name">John Smith</h3>
                    <p class="team-role">Chief Technology Officer</p>
                </div>
                <div class="team-member">
                    <img class="team-img" src="https://i.pravatar.cc/300?img=5" alt="Emily Chen">
                    <h3 class="team-name">Emily Chen</h3>
                    <p class="team-role">Head of Product</p>
                </div>
                <div class="team-member">
                    <img class="team-img" src="https://i.pravatar.cc/300?img=8" alt="Marcus Johnson">
                    <h3 class="team-name">Marcus Johnson</h3>
                    <p class="team-role">Head of Customer Success</p>
                </div>
            </div>
        </div>
    </div>
@endsection