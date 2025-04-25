<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeepwareKepegawaianController extends Controller
{
    public function index()
    {
        return view('Dashboard.Pelatihan.Kepegawaian.index');
    }

    public function create()
    {
        return view('Dashboard.Pelatihan.Kepegawaian.create');
    }

    public function edit($id)
    {
        return view('Dashboard.Pelatihan.Kepegawaian.edit', compact('id'));
    }
}
