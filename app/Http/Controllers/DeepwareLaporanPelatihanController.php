<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeepwareLaporanPelatihanController extends Controller
{
    public function LaporanPelatihan()
    {
        return view('Dashboard.Pelatihan.laporan-pelatihan');
    }

    public function ProsesLaporan()
    {
        return view('Dashboard.Pelatihan.proses-laporan');
    }

    public function UsulPelatihan()
    {
        return view('Dashboard.Pelatihan.usul-pelatihan');
    }

    public function VerifikasiPelatihan($id)
    {
        return view('Dashboard.Pelatihan.verifikasi-pelatihan', compact('id'));
    }

    public function VerifikasiUsul($id)
    {
        return view('Dashboard.Pelatihan.verifikasi-usul-pelatihan', compact('id'));
    }

    public function UploadOPD()
    {
        return view('Dashboard.Pelatihan.upload-opd');
    }
}
