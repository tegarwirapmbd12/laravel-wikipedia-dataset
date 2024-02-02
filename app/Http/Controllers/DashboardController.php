<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $kegiatans = Dashboard::all();
        return view('welcome', compact('kegiatans'));
    }
}
