<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardGuruController extends Controller
{
    public function index()
    {
        return view('is_guru.dashboard');
    }
}
