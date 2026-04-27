<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $metrics = [
            'total_leads'          => 1432,
            'active_installations' => 84,
            'proposals_sent'       => 245,
            'total_revenue'        => '$124,500',
        ];

        $recentActivity = [
            ['description' => 'New lead assigned: John Doe',                  'time' => '10 min ago',  'type' => 'lead'],
            ['description' => 'Proposal accepted by Wayne Enterprises',        'time' => '1 hour ago',  'type' => 'sale'],
            ['description' => 'Installation started at 123 Main St',          'time' => '3 hours ago', 'type' => 'installation'],
            ['description' => 'Inventory restocked: Solar Panels (200 Units)','time' => '1 day ago',   'type' => 'inventory'],
        ];

        return view('dashboard.index', compact('metrics', 'recentActivity'));
    }
}
