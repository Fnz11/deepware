<?php

namespace App\Http\Controllers\Admin\Pelatihan;

use App\Http\Controllers\Controller;
use App\Models\PelatihanList;
use App\Models\PelatihanRegistrasi;
use Illuminate\Http\Request;

class DeepwarePelatihanRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all pelatihan registrasi data
        $pelatihanRegistrasi = PelatihanRegistrasi::with([
            'user.userPivot.golongan',
            'user.userPivot.unitKerja',
            'user.userPivot.jabatan',
            'pelatihan'
        ])->get();

        // Return the view with pelatihan registrasi data
        return view('Dashboard.Pelatihan.usul-pelatihan', compact('pelatihanRegistrasi'));
    }

    public function showVerifikasiRegistrasi(PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Fetch the pelatihan registrasi by ID
        $pelatihanRegistrasi->load([
            'user.userPivot.golongan',
            'user.userPivot.unitKerja',
            'user.userPivot.jabatan',
            'pelatihan'
        ]);

        // Show the verification page for the specified pelatihan
        return view('Dashboard.Pelatihan.verifikasi-pelatihan', compact('pelatihanRegistrasi'));
    }

    public function VerifikasiRegistrasi(Request $request, PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Validasi hanya field 'status'
        $validatedData = $request->validate([
            'status' => 'required|in:proses verifikasi,diterima,ditolak',
            // 'keterangan' => 'nullable|string', // Untuk nanti kalau mau tambah keterangan
            // 'surat_tugas' => 'nullable|file|mimes:pdf|max:2048', // Untuk nanti kalau upload file
        ]);

        // Update hanya status
        $pelatihanRegistrasi->update([
            'status' => $validatedData['status'],
        ]);

        // Kalau nanti mau upload file surat tugas
        /*
    if ($request->hasFile('surat_tugas')) {
        $path = $request->file('surat_tugas')->store('pelatihan/surat_tugas', 'public');
        $pelatihanRegistrasi->update(['surat_tugas' => $path]);
    }
    */

        return redirect()->route('Dashboard.Pelatihan.usul-pelatihan')
            ->with('success', 'Status pelatihan berhasil diperbarui.');
    }


    public function VerifikasiUsul($id)
    {
        return view('Dashboard.Pelatihan.verifikasi-usul-pelatihan', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all pelatihan data
        $pelatihan = PelatihanList::all();

        // Return the view with pelatihan data
        return view('admin.pelatihan.registrasi.create', compact('pelatihan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nip' => 'required|exists:ref_pegawais,nip',
            'id_pelatihan' => 'required|exists:pelatihan_lists,id',
            'tanggal_daftar' => 'required|date',
            'biaya_akomodasi' => 'nullable|numeric',
            'biaya_hotel' => 'nullable|numeric',
            'biaya_pelatihan' => 'nullable|numeric',
            'uang_harian' => 'nullable|numeric',
            'file_usulan' => 'nullable|file|mimes:pdf|max:2048',
            'file_penawaran' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Create a new pelatihan registrasi
        PelatihanRegistrasi::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('pelatihan.registrasi.index')->with('success', 'Pelatihan registrasi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Show the details of the specified pelatihan registrasi
        return view('admin.pelatihan.registrasi.show', compact('pelatihanRegistrasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Fetch all pelatihan data
        $pelatihan = PelatihanList::all();

        // Return the view with pelatihan registrasi and pelatihan data
        return view('admin.pelatihan.registrasi.edit', compact('pelatihanRegistrasi', 'pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Validate the request data
        $request->validate([
            'nip' => 'required|exists:ref_pegawais,nip',
            'id_pelatihan' => 'required|exists:pelatihan_lists,id',
            'tanggal_daftar' => 'required|date',
            'biaya_akomodasi' => 'nullable|numeric',
            'biaya_hotel' => 'nullable|numeric',
            'biaya_pelatihan' => 'nullable|numeric',
            'uang_harian' => 'nullable|numeric',
            'file_usulan' => 'nullable|file|mimes:pdf|max:2048',
            'file_penawaran' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Update the pelatihan registrasi
        $pelatihanRegistrasi->update($request->all());

        // Redirect to the index page with success message
        return redirect()->route('pelatihan.registrasi.index')->with('success', 'Pelatihan registrasi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelatihanRegistrasi $pelatihanRegistrasi)
    {
        // Delete the pelatihan registrasi
        $pelatihanRegistrasi->delete();

        // Redirect to the index page with success message
        return redirect()->route('pelatihan.registrasi.index')->with('success', 'Pelatihan registrasi deleted successfully.');
    }
}
