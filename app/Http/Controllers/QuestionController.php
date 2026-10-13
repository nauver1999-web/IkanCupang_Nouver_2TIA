<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Validasi data, lalu langsung pindah ke halaman respon dengan pesan info.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required|string|max:255',
            'email'      => 'required|email',
            'pertanyaan' => 'required|string',
        ]);

        // Simpan data di session supaya bisa dibaca halaman respon
        session(['question_data' => [
            'nama'       => $request->nama,
            'email'      => $request->email,
            'pertanyaan' => $request->pertanyaan,
        ]]);

        // Langsung ke halaman respon, info tampil di sana
        return redirect()
            ->route('question.respon')
            ->with('info', 'Data berhasil dimasukkan');
    }

    /**
     * Halaman respon (GET) - menampilkan data yang tadi dikirim.
     */
    public function respon()
    {
        $data = session('question_data');

        // Kalau dibuka tanpa kirim form dulu, kembali ke home
        if (!$data) {
            return redirect('/home');
        }

        return view('home-question-respone', $data);
    }
}
