<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $dokter = Dokter::where('user_id', Auth::id())->first();
        return view('dokter.profil', compact('dokter'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);

        $dokter = Dokter::where('user_id', Auth::id())->first();
        $dokter->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('dokter.profil')->with('success', 'Profil berhasil diperbarui');
    }
} 