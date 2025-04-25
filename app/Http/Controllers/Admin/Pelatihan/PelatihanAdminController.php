<?php

namespace App\Http\Controllers\Admin\Pelatihan;

use App\Http\Controllers\Controller;
use App\Models\PelatihanList;
use App\Models\ref_jenispelatihans;
use App\Models\ref_metodepelatihans;
use App\Models\ref_pelaksanaanpelatihans;
use Illuminate\Http\Request;

class PelatihanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all pelatihan data
        $pelatihan = PelatihanList::with([
            'pelaksanaanPelatihan',
            'metodePelatihan',
            'jenisPelatihan'
        ])->get();

        // Return the view with pelatihan data
        return view('admin.pelatihan.list.index', compact('pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all jenis pelatihan, pelaksanaan pelatihan, and metode pelatihan data
        $jenisPelatihan = ref_jenispelatihans::all();
        $pelaksanaanPelatihan = ref_pelaksanaanpelatihans::all();
        $metodePelatihan = ref_metodepelatihans::all();

        // Return the view with jenis pelatihan, pelaksanaan pelatihan, and metode pelatihan data
        return view('admin.pelatihan.create', compact('jenisPelatihan', 'pelaksanaanPelatihan', 'metodePelatihan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nip' => 'required|exists:ref_pegawais,nip',
            // 'nip' => 'required|exists:ref_pegawais,nip|unique:pelatihan_1_lists,nip',
            'nama_pelatihan' => 'required|string|max:255',
            'jenis_pelatihan' => 'required|exists:ref_jenispelatihans,kode_jenispelatihan',
            'pelaksanaan_pelatihan' => 'required|exists:ref_pelaksanaanpelatihans,kode_pelaksanaanpelatihan',
            'metode_pelatihan' => 'required|exists:ref_metodepelatihans,kode_metodepelatihan',
            'tempat_pelatihan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'penyelenggara' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link_pelatihan' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new pelatihan record
        PelatihanList::create($request->all());

        // Redirect to the pelatihan index with success message
        return redirect()->route('admin.pelatihan.index')->with('success', 'Pelatihan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the pelatihan data by ID
        $pelatihan = PelatihanList::findOrFail($id);

        // Return the view with pelatihan data
        return view('admin.pelatihan.show', compact('pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the pelatihan data by ID
        $pelatihan = PelatihanList::findOrFail($id);

        // Fetch all jenis pelatihan, pelaksanaan pelatihan, and metode pelatihan data
        $jenisPelatihan = ref_jenispelatihans::all();
        $pelaksanaanPelatihan = ref_pelaksanaanpelatihans::all();
        $metodePelatihan = ref_metodepelatihans::all();

        // Return the view with pelatihan data and other related data
        return view('admin.pelatihan.edit', compact('pelatihan', 'jenisPelatihan', 'pelaksanaanPelatihan', 'metodePelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'nip' => 'required|exists:ref_pegawais,nip',
            'nama_pelatihan' => 'required|string|max:255',
            'jenis_pelatihan' => 'required|exists:ref_jenispelatihans,kode_jenispelatihan',
            'pelaksanaan_pelatihan' => 'required|exists:ref_pelaksanaanpelatihans,kode_pelaksanaanpelatihan',
            'metode_pelatihan' => 'required|exists:ref_metodepelatihans,kode_metodepelatihan',
            'tempat_pelatihan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'penyelenggara' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'link_pelatihan' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the pelatihan record by ID and update it
        $pelatihan = PelatihanList::findOrFail($id);
        $pelatihan->update($request->all());

        // Redirect to the pelatihan index with success message
        return redirect()->route('admin.pelatihan.index')->with('success', 'Pelatihan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the pelatihan record by ID
        $pelatihan = PelatihanList::findOrFail($id);

        // Delete the pelatihan record
        $pelatihan->delete();

        // Redirect to the pelatihan index with success message
        return redirect()->route('admin.pelatihan.index')->with('success', 'Pelatihan deleted successfully.');
    }

    /**
     * Search for pelatihan by ID.
     */
    public function searchById(Request $request)
    {
        // Validate the search request
        $request->validate([
            'id' => 'required|exists:pelatihan_1_lists,id',
        ]);

        // Fetch pelatihan data by ID
        $pelatihan = PelatihanList::findOrFail($request->id);

        // Return the view with pelatihan data
        return view('admin.pelatihan.show', compact('pelatihan'));
    }

    /**
     * Search for pelatihan by NIP.
     */
    public function search(Request $request)
    {
        // Validate the search request
        $request->validate([
            'nip' => 'required|exists:ref_pegawais,nip',
        ]);

        // Fetch pelatihan data by NIP
        $pelatihan = PelatihanList::where('nip', $request->nip)->get();

        // Return the view with pelatihan data
        return view('admin.pelatihan.index', compact('pelatihan'));
    }

    /**
     * Search for pelatihan by name.
     */
    public function searchByName(Request $request)
    {
        // Validate the search request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Fetch pelatihan data by name
        $pelatihan = PelatihanList::where('nama_pelatihan', 'like', '%' . $request->name . '%')->get();

        // Return the view with pelatihan data
        return view('admin.pelatihan.index', compact('pelatihan'));
    }

    /**
     * Search for pelatihan by date.
     */
    public function searchByDate(Request $request)
    {
        // Validate the search request
        $request->validate([
            'date' => 'required|date',
        ]);

        // Fetch pelatihan data by date
        $pelatihan = PelatihanList::whereDate('tanggal_mulai', $request->date)->get();

        // Return the view with pelatihan data
        return view('admin.pelatihan.index', compact('pelatihan'));
    }
}
