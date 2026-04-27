@extends('layouts.auth')

@section('title', 'Create Account — Solar CRM')
@section('meta_description', 'Create your free Solar CRM account and start managing your solar business smarter today.')

@section('content')
    <!-- Mobile Logo -->
    <a href="{{ route('home') }}" class="auth-mobile-logo" aria-label="Solar CRM Home">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
            <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
        </svg>
        <span>Solar CRM</span>
    </a>

    <div class="auth-card">
        <!-- Card Header -->
        <div class="auth-card-header">
            <div class="auth-card-eyebrow" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Free forever plan included
            </div>
            <h2 class="auth-card-title">Create your account</h2>
            <p class="auth-card-subtitle">
                Already have an account?
                <a href="{{ route('login') }}">Sign in instead</a>
            </p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="auth-alert error" role="alert" style="margin-bottom: 20px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
                <ul style="margin:0; padding-left:16px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form id="register-form" class="auth-form" action="{{ route('register') }}" method="POST" novalidate>
            @csrf

            <!-- First & Last Name Row -->
            <div class="auth-form-row">
                <div class="form-group">
                    <label for="first_name" class="form-label">First name</label>
                    <div class="form-input-wrapper">
                        <input
                            id="first_name"
                            type="text"
                            name="first_name"
                            class="form-input"
                            placeholder="Jane"
                            value="{{ old('first_name') }}"
                            autocomplete="given-name"
                            required
                            aria-required="true"
                        >
                        <svg class="form-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="form-label">Last name</label>
                    <div class="form-input-wrapper">
                        <input
                            id="last_name"
                            type="text"
                            name="last_name"
                            class="form-input"
                            placeholder="Doe"
                            value="{{ old('last_name') }}"
                            autocomplete="family-name"
                            required
                            aria-required="true"
                        >
                        <svg class="form-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Work email</label>
                <div class="form-input-wrapper">
                    <input
                        id="email"
                        type="email"
                        name="email"
                        class="form-input"
                        placeholder="you@company.com"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        required
                        aria-required="true"
                    >
                    <svg class="form-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="form-input-wrapper">
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="form-input"
                        placeholder="Min. 8 characters"
                        autocomplete="new-password"
                        required
                        aria-required="true"
                        oninput="checkPasswordStrength(this.value)"
                    >
                    <svg class="form-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                    <button
                        type="button"
                        class="form-password-toggle"
                        aria-label="Toggle password visibility"
                        onclick="togglePassword('password', this)"
                    >
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
                <!-- Strength indicator -->
                <div class="password-strength-bar" aria-hidden="true">
                    <div class="password-strength-fill" id="strength-fill"></div>
                </div>
                <span class="password-strength-label" id="strength-label" aria-live="polite"></span>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm password</label>
                <div class="form-input-wrapper">
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        class="form-input"
                        placeholder="••••••••"
                        autocomplete="new-password"
                        required
                        aria-required="true"
                    >
                    <svg class="form-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    <button
                        type="button"
                        class="form-password-toggle"
                        aria-label="Toggle confirm password visibility"
                        onclick="togglePassword('password_confirmation', this)"
                    >
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Submit -->
            <button id="register-submit-btn" type="submit" class="btn-auth-submit" style="margin-top: 4px;">
                <span>Create free account</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                </svg>
            </button>

            <!-- Terms -->
            <p class="auth-terms">
                By creating an account, you agree to our
                <a href="#">Terms of Service</a> and
                <a href="#">Privacy Policy</a>.
            </p>
        </form>
    </div>

    <!-- Back to home -->
    <a href="{{ route('home') }}" class="auth-back-home">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/>
        </svg>
        Back to home
    </a>
@endsection

@push('scripts')
<script>
    function togglePassword(fieldId, btn) {
        const field = document.getElementById(fieldId);
        const isPassword = field.type === 'password';
        field.type = isPassword ? 'text' : 'password';
        btn.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        btn.innerHTML = isPassword
            ? `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                   <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
                   <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
                   <line x1="1" y1="1" x2="23" y2="23"/>
               </svg>`
            : `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                   <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
               </svg>`;
    }

    function checkPasswordStrength(value) {
        const fill  = document.getElementById('strength-fill');
        const label = document.getElementById('strength-label');
        if (!value) {
            fill.className  = 'password-strength-fill';
            label.className = 'password-strength-label';
            label.textContent = '';
            return;
        }
        const hasUpper   = /[A-Z]/.test(value);
        const hasLower   = /[a-z]/.test(value);
        const hasNumber  = /\d/.test(value);
        const hasSpecial = /[^A-Za-z0-9]/.test(value);
        const score = [value.length >= 8, hasUpper, hasLower, hasNumber, hasSpecial]
                        .filter(Boolean).length;

        if (score <= 2) {
            fill.className  = 'password-strength-fill weak';
            label.className = 'password-strength-label weak';
            label.textContent = 'Weak — add numbers and symbols';
        } else if (score <= 3) {
            fill.className  = 'password-strength-fill fair';
            label.className = 'password-strength-label fair';
            label.textContent = 'Fair — could be stronger';
        } else {
            fill.className  = 'password-strength-fill strong';
            label.className = 'password-strength-label strong';
            label.textContent = 'Strong — great password!';
        }
    }
</script>
@endpush
