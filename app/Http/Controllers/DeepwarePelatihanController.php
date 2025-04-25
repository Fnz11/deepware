<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeepwarePelatihanController extends Controller
{
    public function index()
    {
        return view('pelatihan.index');
    }

    public function show($id)
    {
        return view('pelatihan.show', compact('id'));
    }

    public function pendaftaran()
    {
        return view('Dashboard.Pelatihan.pendaftaran');
    }

    public function daftarPelatihan()
    {
        return view('Dashboard.Pelatihan.daftar-pelatihan');
    }

    public function create()
    {
        return view('Dashboard.Pelatihan.create');
    }

    public function edit($id)
    {
        return view('Dashboard.Pelatihan.edit', compact('id'));
    }
}