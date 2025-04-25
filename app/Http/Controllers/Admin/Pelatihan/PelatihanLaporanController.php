<?php

namespace App\Http\Controllers;

use App\Models\PelatihanLaporan;
use Illuminate\Http\Request;

class PelatihanLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all pelatihan laporan data
        $pelatihanLaporan = PelatihanLaporan::all();

        // Return the view with pelatihan laporan data
        return view('admin.pelatihan.laporan.index', compact('pelatihanLaporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PelatihanLaporan $pelatihanLaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelatihanLaporan $pelatihanLaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelatihanLaporan $pelatihanLaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelatihanLaporan $pelatihanLaporan)
    {
        //
    }
}
