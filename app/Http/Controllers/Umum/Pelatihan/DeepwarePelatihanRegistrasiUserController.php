<?php

namespace App\Http\Controllers\Umum\Pelatihan;

use App\Http\Controllers\Controller;
use App\Models\PelatihanList;
use App\Models\PelatihanRegistrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeepwarePelatihanRegistrasiUserController extends Controller
{
    /**
     * Tampilkan daftar pendaftaran pelatihan milik user yang sedang login.
     */
    public function index()
    {
        $nip = Auth::user()->nip;

        $registrasi = PelatihanRegistrasi::with('pelatihan')
                        ->where('nip', $nip)
                        ->get();

        return view('user.pelatihan.registrasi.index', compact('registrasi'));
    }

    /**
     * Tampilkan form pendaftaran pelatihan baru.
     */
    public function create()
    {
        $pelatihan = PelatihanList::all();
        return view('user.pelatihan.registrasi.create', compact('pelatihan'));
    }

    /**
     * Simpan data pendaftaran pelatihan.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pelatihan' => 'required|exists:pelatihan_lists,id',
            'file_usulan' => 'nullable|file|mimes:pdf|max:2048',
            'file_penawaran' => 'nullable|file|mimes:pdf|max:2048',
            'biaya_akomodasi' => 'nullable|numeric',
            'biaya_hotel' => 'nullable|numeric',
            'biaya_pelatihan' => 'nullable|numeric',
            'uang_harian' => 'nullable|numeric',
        ]);

        $data = $request->all();
        $data['nip'] = Auth::user()->nip;
        $data['tanggal_daftar'] = now();

        // Upload file jika ada
        if ($request->hasFile('file_usulan')) {
            $data['file_usulan'] = $request->file('file_usulan')->store('usulan');
        }

        if ($request->hasFile('file_penawaran')) {
            $data['file_penawaran'] = $request->file('file_penawaran')->store('penawaran');
        }

        PelatihanRegistrasi::create($data);

        return redirect()->route('user.pelatihan.registrasi.index')->with('success', 'Pendaftaran berhasil.');
    }

    /**
     * Tampilkan detail registrasi milik user.
     */
    public function show(PelatihanRegistrasi $registrasi)
    {
        // Pastikan user hanya bisa melihat datanya sendiri
        if ($registrasi->nip != Auth::user()->nip) {
            abort(403);
        }

        return view('user.pelatihan.show', compact('registrasi'));
    }
}
