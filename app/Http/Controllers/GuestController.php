<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class GuestController extends Controller
{
    public function home()
    {
        $biodatas = Biodata::withCount(['pendidikans', 'pengalamans', 'keahlians'])->latest()->take(3)->get();
        return view('pages.guest.home', compact('biodatas'));
    }

    public function about()
    {
        return view('pages.guest.about');
    }

    public function cv()
    {
        $biodatas = Biodata::withCount(['pendidikans', 'pengalamans', 'keahlians'])->latest()->get();
        return view('pages.guest.cv', compact('biodatas'));
    }

    public function cvDetail(string $id)
    {
        $biodata = Biodata::with(['pendidikans', 'pengalamans', 'keahlians'])->findOrFail($id);
        return view('pages.guest.cv-detail', compact('biodata'));
    }

    public function kontak()
    {
        return view('pages.guest.kontak');
    }
}
