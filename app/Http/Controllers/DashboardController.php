<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('pages.admin.dashboard');
    }

    public function customer()
    {
        return view('pages.customer.dashboard');
    }
}
