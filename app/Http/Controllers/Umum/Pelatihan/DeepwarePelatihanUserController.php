<?php

namespace App\Http\Controllers\Umum\Pelatihan;

use App\Http\Controllers\Controller;
use App\Models\PelatihanList;
use Illuminate\Http\Request;

class DeepwarePelatihanUserController extends Controller
{
    /**
     * Tampilkan semua pelatihan yang tersedia.
     */
    public function index()
    {
        $pelatihan = PelatihanList::with([
            'pelaksanaanPelatihan',
            'metodePelatihan',
            'jenisPelatihan'
        ])->latest()->paginate(10);
        
         // Return the view with pelatihan data
        return view('user.pelatihan.list.index', compact('pelatihan'));
    }

    /**
     * Tampilkan detail dari pelatihan tertentu.
     */
    public function show($id)
    {
        $pelatihan = PelatihanList::with([
            'pelaksanaanPelatihan',
            'metodePelatihan',
            'jenisPelatihan'
        ])->findOrFail($id);

        return view('user.pelatihan.show', compact('pelatihan'));
    }

    
    /**
     * Pencarian berdasarkan nama pelatihan.
     */
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $pelatihan = PelatihanList::where('nama_pelatihan', 'like', '%' . $request->query . '%')->get();

        return view('user.pelatihan.index', compact('pelatihan'));
    }

    /**
     * Pencarian berdasarkan tanggal mulai.
     */
    public function searchByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $pelatihan = PelatihanList::whereDate('tanggal_mulai', $request->date)->get();

        return view('user.pelatihan.index', compact('pelatihan'));
    }
}
