@extends('layouts.app')

@section('title', 'Contact Us - Solar CRM')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
@endpush

@section('content')
<div class="contact-section container">
    
    <div class="contact-header">
        <h1 class="contact-title">Get in Touch</h1>
        <p class="contact-subtitle">
            Have questions about our CRM or looking for a custom enterprise setup? Our team is ready to help you grow your solar operations.
        </p>
    </div>

    <div class="contact-layout">
        
        <!-- Contact Form -->
        <div class="contact-box">
            <form class="contact-form" action="#" method="POST">
                
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label" for="first-name">First Name</label>
                        <input type="text" id="first-name" class="form-input" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="last-name">Last Name</label>
                        <input type="text" id="last-name" class="form-input" placeholder="Doe" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Work Email</label>
                    <input type="email" id="email" class="form-input" placeholder="john@solarco.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="company">Company (Optional)</label>
                    <input type="text" id="company" class="form-input" placeholder="Solar Co. LLC">
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">How can we help?</label>
                    <textarea id="message" class="form-input" placeholder="Tell us about your needs..." required></textarea>
                </div>

                <button type="button" class="btn-submit">Send Message</button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="contact-info-panel">
            
            <div class="info-item">
                <div class="info-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="info-content">
                    <h3>Email Us</h3>
                    <p>Support: support@solarcrm.com</p>
                    <p>Sales: sales@solarcrm.com</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <div class="info-content">
                    <h3>Call Us</h3>
                    <p>Mon-Fri from 8am to 5pm AST.</p>
                    <p>+1 (555) 000-0000</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="info-content">
                    <h3>Visit Us</h3>
                    <p>100 Solar Way, Suite 400<br>Austin, TX 78701</p>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
