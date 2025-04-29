@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Usul Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Usul Pelatihan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0 pt-6 bg-transparent">
            <!-- Navigation & Actions -->
            <div class="d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between mb-5">
                <!-- Tab Navigation -->
                <div class="d-flex gap-2">
                    <a href="{{ route('Dashboard.Pelatihan.usul-pelatihan') }}"
                        class="btn {{ request()->routeIs('Dashboard.Pelatihan.usul-pelatihan') ? 'btn-primary' : 'btn-light-primary' }}">
                        Usul Pelatihan
                    </a>
                    <a href="{{ route('Dashboard.Pelatihan.laporan-pelatihan') }}"
                        class="btn {{ request()->routeIs('Dashboard.Pelatihan.laporan-pelatihan') ? 'btn-primary' : 'btn-light-primary' }}">
                        Laporan Pelatihan
                    </a>
                    <a href="{{ route('Dashboard.Pelatihan.proses-laporan') }}"
                        class="btn {{ request()->routeIs('Dashboard.Pelatihan.proses-laporan') ? 'btn-primary' : 'btn-light-primary' }}">
                        Proses Pelatihan
                    </a>
                </div>

                <!-- Search Box -->
                <div class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
                    <div class="position-relative">
                        <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        <input type="text" class="form-control form-control-solid ps-10 w-md-250px"
                            placeholder="Cari usulan...">
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-light-success d-inline-flex align-items-center gap-2">
                            <i class="bi bi-file-excel"></i>
                            <span>Export</span>
                        </button>
                        <button class="btn btn-light-primary d-inline-flex align-items-center gap-2"
                            onclick="window.print()">
                            <i class="bi bi-printer"></i>
                            <span>Cetak</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="border-bottom bg-light-primary text-muted fw-bold">
                            <th class="min-w-50px text-center">No</th>
                            <th class="min-w-200px">Nama</th>
                            <th class="min-w-200px">Unit Kerja</th>
                            <th class="min-w-150px">Tanggal Daftar</th>
                            <th class="min-w-250px">Nama Pelatihan</th>
                            <th class="min-w-150px">Waktu Pelaksanaan</th>
                            <th class="min-w-150px">Biaya Pelatihan</th>
                            <th class="min-w-150px">Biaya Hotel</th>
                            <th class="min-w-150px">Biaya Akomodasi</th>
                            <th class="min-w-150px">Uang Harian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dummyData = [
                                [
                                    'id' => 1,
                                    'nama' => 'Ahmad Fauzi',
                                    'unit_kerja' => 'BKPSDM Kota Surakarta',
                                    'tanggal_daftar' => '2024-01-15',
                                    'pelatihan' => 'Pelatihan Kepemimpinan Nasional Tingkat II',
                                    'waktu' => '1-15 Februari 2024',
                                    'biaya_pelatihan' => '5.000.000',
                                    'biaya_hotel' => '3.000.000',
                                    'biaya_akomodasi' => '2.000.000',
                                    'uang_harian' => '1.500.000',
                                ],
                                [
                                    'id' => 2,
                                    'nama' => 'Siti Rahayu',
                                    'unit_kerja' => 'BKPSDM Kota Surakarta',
                                    'tanggal_daftar' => '2024-01-16',
                                    'pelatihan' => 'Workshop Manajemen ASN',
                                    'waktu' => '20-25 Februari 2024',
                                    'biaya_pelatihan' => '4.500.000',
                                    'biaya_hotel' => '2.500.000',
                                    'biaya_akomodasi' => '1.800.000',
                                    'uang_harian' => '1.200.000',
                                ],
                            ];
                        @endphp

                        @foreach ($dummyData as $index => $item)
                            <tr class="border-bottom cursor-pointer"
                                onclick="window.location.href='{{ route('Dashboard.Pelatihan.showVerifikasiRegistrasi', $item->id) }}'">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->userPivot->unitKerja->unit_kerja }}</td>
                                <td>{{ date('d/m/Y', strtotime($item->tanggal_daftar)) }}</td>
                                <td>{{ $item->pelatihan->nama_pelatihan }}</td>
                                <td>{{ $item->pelatihan->tanggal_pelaksanaan }}</td>
                                <td>Rp {{ $item->biaya_pelatihan }}</td>
                                <td>Rp {{ $item->biaya_hotel }}</td>
                                <td>Rp {{ $item->biaya_akomodasi }}</td>
                                <td>Rp {{ $item->uang_harian }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('additional-css')
    <style>
        /* Utility Classes */
        .w-md-150px {
            width: 150px !important;
        }

        .w-md-250px {
            width: 250px !important;
        }

        .h-6px {
            height: 6px !important;
        }

        .ps-10 {
            padding-left: 2.75rem !important;
        }

        /* Form Controls */
        .form-control-solid {
            background-color: #f5f8fa;
            border-color: #f5f8fa;
            color: #5e6278;
        }

        .form-control-solid:focus {
            background-color: #eef3f7;
            border-color: #eef3f7;
        }

        .form-select-solid {
            background-color: #f5f8fa;
            border-color: #f5f8fa;
            color: #5e6278;
        }

        /* Table Styling */
        .table> :not(:first-child) {
            border-top: none;
        }

        .bg-light-primary {
            background-color: #f1faff !important;
        }

        /* Badge Styling */
        .badge {
            padding: 0.5em 0.9em;
            font-weight: 500;
        }

        .badge-success {
            background-color: #50cd89;
            color: #fff;
        }

        .badge-danger {
            background-color: #f1416c;
            color: #fff;
        }

        .badge-light-primary {
            background-color: #f1faff;
            color: #009ef7;
        }

        .badge-light-dark {
            background-color: #f5f8fa;
            color: #5e6278;
        }

        /* Button States */
        .btn-light-primary {
            background-color: #f1faff;
            border-color: transparent;
            color: #009ef7;
        }

        .btn-light-primary:hover {
            background-color: #009ef7;
            color: #fff;
        }

        .btn-light-success {
            background-color: #e8fff3;
            border-color: transparent;
            color: #50cd89;
        }

        .btn-light-success:hover {
            background-color: #50cd89;
            color: #fff;
        }

        .btn-light-info {
            background-color: #f8f5ff;
            border-color: transparent;
            color: #7239ea;
        }

        .btn-light-info:hover {
            background-color: #7239ea;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {

            .w-md-150px,
            .w-md-250px {
                width: 100% !important;
            }
        }

        /* Print Styles */
        @media print {

            .btn,
            .form-control {
                display: none;
            }
        }

        /* Row Click Styling */
        .cursor-pointer {
            cursor: pointer;
        }

        .cursor-pointer:hover {
            background-color: #f8f9fa;
        }
    </style>
@endsection
