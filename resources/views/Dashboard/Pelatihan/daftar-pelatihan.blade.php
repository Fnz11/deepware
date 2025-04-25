@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Daftar Pelatihan - BKPSDM')

@section('page-title', 'Daftar Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Daftar Pelatihan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <!-- Header Section -->
        <div class="card-header border-0 py-4 bg-transparent">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Daftar Pelatihan</h4>
                    <p class="text-muted mb-0">Manajemen data pelatihan BKPSDM</p>
                </div>

                <!-- Search & Filter Section -->
                <div class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
                    <div class="position-relative">
                        <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        <input type="text" class="form-control form-control-solid ps-10 w-md-250px"
                            placeholder="Cari pelatihan...">
                    </div>
                    <button onclick="window.location.href = '/dashboard/pelatihan/tambah-pelatihan'"
                        class="btn btn-primary px-4 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-plus-circle"></i>
                        <span>Tambah Pelatihan</span>
                    </button>
                </div>
            </div>

            <!-- Advanced Filter -->
            <div class="d-flex flex-wrap gap-3 mt-4">
                <select class="form-select form-select-solid w-md-150px">
                    <option value="">Status</option>
                    <option value="active">Aktif</option>
                    <option value="closed">Tutup</option>
                </select>
                <select class="form-select form-select-solid w-md-150px">
                    <option value="">Kategori</option>
                    <option value="technology">Teknologi</option>
                    <option value="leadership">Kepemimpinan</option>
                </select>
                <select class="form-select form-select-solid w-md-150px">
                    <option value="">Periode</option>
                    <option value="current">Bulan Ini</option>
                    <option value="next">Bulan Depan</option>
                </select>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="border-bottom bg-light-primary">
                            <th class="fw-bolder text-nowrap text-center" style="width: 50px">No</th>
                            <th class="fw-bolder text-nowrap ps-4">Detail Pelatihan</th>
                            <th class="fw-bolder text-nowrap">Status & Progress</th>
                            <th class="fw-bolder text-nowrap">Timeline</th>
                            <th class="fw-bolder text-nowrap text-end pe-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dummyData = [
                                [
                                    'id' => 1,
                                    'nama' => 'Pelatihan SPBE (Sistem Pemerintahan Berbasis Elektronik)',
                                    'deskripsi' =>
                                        'Program pelatihan komprehensif yang dirancang untuk meningkatkan pemahaman dan implementasi SPBE di lingkungan pemerintahan. Mencakup aspek tata kelola, manajemen layanan, dan teknologi informasi sesuai dengan Perpres No. 95 Tahun 2018.',
                                    'tanggal' => '25-29 Oktober 2025',
                                    'kategori' => 'Teknologi',
                                    'kuota' => '25 Peserta',
                                    'buka' => '17 Agustus 2025',
                                    'tutup' => '31 Agustus 2025',
                                    'status' => 'Buka',
                                    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3',
                                ],
                                [
                                    'id' => 2,
                                    'nama' => 'Leadership & Manajemen ASN Modern',
                                    'deskripsi' =>
                                        'Pelatihan kepemimpinan transformasional untuk ASN modern yang mencakup aspek strategic thinking, emotional intelligence, dan digital leadership. Program ini diselaraskan dengan SMART ASN 2024 untuk menciptakan pemimpin adaptif di era digital.',
                                    'tanggal' => '10-15 November 2025',
                                    'kategori' => 'Kepemimpinan',
                                    'kuota' => '20 Peserta',
                                    'buka' => '1 September 2025',
                                    'tutup' => '15 September 2025',
                                    'status' => 'Tutup',
                                    'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0',
                                ],
                            ];
                        @endphp
                        @foreach ($dummyData as $index => $item)
                            <tr class="border-bottom">
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="symbol-[45px]">
                                            <img src="{{ $item['image'] }}" alt="" class="rounded-3 w-100 h-100">
                                        </div>
                                        <div>
                                            <div class="fw-bold mb-1">{{ $item['nama'] }}</div>
                                            <div class="d-flex align-items-center gap-2 mt-1">
                                                <span class="badge badge-light-primary">{{ $item['kategori'] }}</span>
                                                <span class="text-muted fs-7">•</span>
                                                <span class="text-muted fs-7">{{ $item['kuota'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column gap-2">
                                        @if ($item['status'] === 'Buka')
                                            <span class="badge badge-success">Pendaftaran Dibuka</span>
                                        @else
                                            <span class="badge badge-danger">Pendaftaran Ditutup</span>
                                        @endif
                                        <div class="progress h-6px w-100 bg-light-primary">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-800 fw-bold">{{ $item['tanggal'] }}</span>
                                        <div class="d-flex align-items-center gap-1 mt-1">
                                            <span class="badge badge-light-dark fs-8">Mulai: {{ $item['buka'] }}</span>
                                            <span class="badge badge-light-dark fs-8">Selesai: {{ $item['tutup'] }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('dashboard.pelatihan.edit', $item['id'] ?? 1) }}"
                                            class="btn btn-icon btn-sm btn-light-primary" data-bs-toggle="tooltip"
                                            title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button class="btn btn-icon btn-sm btn-light-info" data-bs-toggle="tooltip"
                                            title="Detail">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-icon btn-sm btn-light-danger" data-bs-toggle="tooltip"
                                            title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
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

        /* Progress Bar */
        .progress {
            background-color: #f5f8fa;
        }

        /* Button States */
        .btn-light-primary:hover {
            background-color: #009ef7;
            color: #fff;
        }

        .btn-light-info:hover {
            background-color: #7239ea;
            color: #fff;
        }

        .btn-light-danger:hover {
            background-color: #f1416c;
            color: #fff;
        }

        @media (max-width: 768px) {

            .w-md-150px,
            .w-md-250px {
                width: 100% !important;
            }
        }
    </style>
@endsection
