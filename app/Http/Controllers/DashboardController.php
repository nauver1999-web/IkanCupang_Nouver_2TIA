<?php

namespace App\Http\Controllers;

use App\Models\{Biodata, Keahlian, Pendidikan, Pengalaman, User};

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            ['CV / Biodata', Biodata::count(), 'fa-id-card'],
            ['Pendidikan', Pendidikan::count(), 'fa-graduation-cap'],
            ['Pengalaman', Pengalaman::count(), 'fa-briefcase'],
            ['Keahlian', Keahlian::count(), 'fa-screwdriver-wrench'],
        ];
        $terbaru = Biodata::latest()->take(5)->get();
        return view('pages.dashboard', compact('stats', 'terbaru'));
    }
}
