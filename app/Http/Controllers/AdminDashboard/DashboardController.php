<?php

namespace App\Http\Controllers\AdminDashboard;

class DashboardController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('admin-panel.admin');
    }
}