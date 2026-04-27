@extends('layouts.dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-container">

    {{-- ── Page Header ──────────────────────────────────── --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Overview</h1>
            <p class="page-subtitle">Welcome back, {{ auth()->user()->name }}. Here&rsquo;s what&rsquo;s happening today.</p>
        </div>
        <div class="header-actions">
            <button class="btn btn-secondary" id="exportBtn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Export
            </button>
            <button class="btn btn-primary" id="newLeadBtn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
                New Lead
            </button>
        </div>
    </div>

    {{-- ── Stat Cards ───────────────────────────────────── --}}
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-header">
                <h3 class="stat-title">Total Leads</h3>
                <div class="stat-icon bg-blue-100 text-blue-600">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
            </div>
            <div class="stat-value">{{ number_format($metrics['total_leads']) }}</div>
            <div class="stat-meta">
                <span class="trend up">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>
                    </svg>
                    12%
                </span>
                <span class="text-muted">vs last month</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <h3 class="stat-title">Active Installations</h3>
                <div class="stat-icon bg-green-100 text-green-600">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
            </div>
            <div class="stat-value">{{ $metrics['active_installations'] }}</div>
            <div class="stat-meta">
                <span class="trend up">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>
                    </svg>
                    5%
                </span>
                <span class="text-muted">vs last month</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <h3 class="stat-title">Proposals Sent</h3>
                <div class="stat-icon bg-purple-100 text-purple-600">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                </div>
            </div>
            <div class="stat-value">{{ $metrics['proposals_sent'] }}</div>
            <div class="stat-meta">
                <span class="trend up">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>
                    </svg>
                    18%
                </span>
                <span class="text-muted">vs last month</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <h3 class="stat-title">Total Revenue</h3>
                <div class="stat-icon bg-orange-100 text-orange-600">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
            </div>
            <div class="stat-value">{{ $metrics['total_revenue'] }}</div>
            <div class="stat-meta">
                <span class="trend up">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/>
                    </svg>
                    24%
                </span>
                <span class="text-muted">vs last month</span>
            </div>
        </div>
    </div>

    {{-- ── Lower Panels ─────────────────────────────────── --}}
    <div class="content-grid">
        {{-- Recent Activity --}}
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">Recent Activity</h2>
                <a href="#" class="btn-link">View All</a>
            </div>
            <div class="panel-body p-0">
                <div class="activity-list">
                    @foreach($recentActivity as $activity)
                    <div class="activity-item">
                        <div class="activity-icon {{ $activity['type'] }}">
                            @if($activity['type'] === 'lead')
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            @elseif($activity['type'] === 'sale')
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            @elseif($activity['type'] === 'installation')
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                            @else
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                            @endif
                        </div>
                        <div class="activity-content">
                            <p class="activity-desc">{{ $activity['description'] }}</p>
                            <span class="activity-time">{{ $activity['time'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Pending Tasks --}}
        <div class="panel">
            <div class="panel-header">
                <h2 class="panel-title">Pending Tasks</h2>
                <a href="#" class="btn-link">View All</a>
            </div>
            <div class="panel-body p-0">
                <ul class="task-list">
                    <li class="task-item">
                        <label class="task-label">
                            <input type="checkbox" class="task-checkbox" id="task1">
                            <span class="task-text">Follow up with Stark Industries</span>
                        </label>
                        <span class="task-tag urgent">Urgent</span>
                    </li>
                    <li class="task-item">
                        <label class="task-label">
                            <input type="checkbox" class="task-checkbox" id="task2">
                            <span class="task-text">Review Q2 sales projections</span>
                        </label>
                        <span class="task-tag">Today</span>
                    </li>
                    <li class="task-item">
                        <label class="task-label">
                            <input type="checkbox" class="task-checkbox" id="task3">
                            <span class="task-text">Approve equipment requisition</span>
                        </label>
                        <span class="task-tag">Tomorrow</span>
                    </li>
                    <li class="task-item">
                        <label class="task-label">
                            <input type="checkbox" class="task-checkbox" id="task4">
                            <span class="task-text">Schedule maintenance for site A</span>
                        </label>
                        <span class="task-tag text-muted">This week</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
