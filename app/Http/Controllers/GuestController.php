<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Galeri;
use App\Models\PesanMasuk;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {   
        $galeri = Galeri::all();
        $informasi = AboutUs::first();
        return view('welcome', compact('galeri', 'informasi'));
    }
    public function kirim_pesan(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'pesan' => 'required',
            ]);
            $tanggal = now()->format('Y-m-d');
            PesanMasuk::create([
                'tanggal' => $tanggal,
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan
            ]);
            return redirect()->route('home')->with('success', 'Pesan Anda berhasil dikirim.');
        } catch (\Throwable $th) { 
            return redirect()->route('home')->with('error', 'Pesan Anda gagal dikirim. ' . $th->getMessage());
        }

    }
}
