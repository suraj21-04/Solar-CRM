@extends('layouts.app')

@section('title', 'Pricing - Solar CRM')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/pricing.css') }}">
@endpush

@section('content')
<div class="pricing-hero container">
    <h1 class="pricing-title">Simple, Transparent Pricing</h1>
    <p class="pricing-subtitle">
        Choose the plan that fits your solar business scale. No hidden fees or surprise charges.
    </p>

    <!-- Pricing Toggle -->
    <div class="billing-toggle">
        <span class="toggle-label" id="label-monthly">Monthly</span>
        <div class="toggle-switch" id="billing-switch">
            <div class="toggle-slider"></div>
        </div>
        <span class="toggle-label active" id="label-annual">Annually (Save 20%)</span>
    </div>

    <!-- Pricing Grid -->
    <div class="pricing-grid">
        
        <!-- Starter Plan -->
        <div class="pricing-card">
            <h3 class="plan-name">Starter</h3>
            <p class="plan-desc">For small solo installers or new teams.</p>
            <div class="plan-price" id="price-starter">
                $49<span>/mo</span>
            </div>
            <p class="plan-price-period">billed annually</p>
            
            <ul class="features-list">
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Up to 3 Users
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Basic Lead Tracking
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    100 Proposals/mo
                </li>
            </ul>
            <a href="#" class="btn-pricing btn-pricing-secondary">Start Free Trial</a>
        </div>

        <!-- Pro Plan -->
        <div class="pricing-card popular">
            <span class="popular-badge">Most Popular</span>
            <h3 class="plan-name">Professional</h3>
            <p class="plan-desc">For growing solar installation businesses.</p>
            <div class="plan-price" id="price-pro">
                $129<span>/mo</span>
            </div>
            <p class="plan-price-period">billed annually</p>
            
            <ul class="features-list">
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Up to 15 Users
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Advanced Lead Routing
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Unlimited Proposals
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Inventory Tracking Module
                </li>
            </ul>
            <a href="#" class="btn-pricing btn-pricing-primary">Get Professional</a>
        </div>

        <!-- Enterprise Plan -->
        <div class="pricing-card">
            <h3 class="plan-name">Enterprise</h3>
            <p class="plan-desc">For large companies with dedicated needs.</p>
            <div class="plan-price" id="price-ent">
                $349<span>/mo</span>
            </div>
            <p class="plan-price-period">billed annually</p>
            
            <ul class="features-list">
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Unlimited Users
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Custom APIs & Integrations
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Dedicated Account Manager
                </li>
                <li class="feature-item">
                    <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    White-label Capability
                </li>
            </ul>
            <a href="#" class="btn-pricing btn-pricing-secondary">Contact Sales</a>
        </div>
        
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleSwitch = document.getElementById('billing-switch');
        const labelMonthly = document.getElementById('label-monthly');
        const labelAnnual = document.getElementById('label-annual');
        
        const priceStarter = document.getElementById('price-starter');
        const pricePro = document.getElementById('price-pro');
        const priceEnt = document.getElementById('price-ent');
        
        let isAnnual = true;
        toggleSwitch.classList.add('annual');

        toggleSwitch.addEventListener('click', () => {
            isAnnual = !isAnnual;
            if(isAnnual) {
                toggleSwitch.classList.add('annual');
                labelAnnual.classList.add('active');
                labelMonthly.classList.remove('active');
                
                priceStarter.innerHTML = '$49<span>/mo</span>';
                pricePro.innerHTML = '$129<span>/mo</span>';
                priceEnt.innerHTML = '$349<span>/mo</span>';
            } else {
                toggleSwitch.classList.remove('annual');
                labelAnnual.classList.remove('active');
                labelMonthly.classList.add('active');
                
                priceStarter.innerHTML = '$59<span>/mo</span>';
                pricePro.innerHTML = '$149<span>/mo</span>';
                priceEnt.innerHTML = '$399<span>/mo</span>';
            }
        });
    });
</script>
@endpush
