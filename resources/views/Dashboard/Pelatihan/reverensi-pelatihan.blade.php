@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Referensi Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Referensi Pelatihan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <!-- Header Section -->
        <div class="card-header border-0 pt-6 bg-transparent">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Referensi Pelatihan</h4>
                    <p class="text-muted mb-0">Daftar referensi pelatihan BKPSDM</p>
                </div>

                <!-- Search Box -->
                <div class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
                    <div class="position-relative">
                        <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                        <input type="text" class="form-control form-control-solid ps-10 w-md-250px"
                            placeholder="Cari referensi...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="border-bottom bg-light-primary">
                            <th class="fw-bolder text-nowrap text-center" style="width: 50px">No</th>
                            <th class="fw-bolder text-nowrap ps-4">Nama Pelatihan</th>
                            <th class="fw-bolder text-nowrap">Pengusul</th>
                            <th class="fw-bolder text-nowrap" style="width: 100px">Tahun</th>
                            <th class="fw-bolder text-nowrap text-end pe-4" style="width: 100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dummyData = [
                                [
                                    'nama' => 'Pelatihan SPBE (Sistem Pemerintahan Berbasis Elektronik)',
                                    'pengusul' => 'Bidang IT BKPSDM',
                                    'tahun' => '2024',
                                ],
                                [
                                    'nama' => 'Leadership & Manajemen ASN Modern',
                                    'pengusul' => 'Bidang Pengembangan',
                                    'tahun' => '2024',
                                ],
                            ];
                        @endphp

                        @foreach ($dummyData as $index => $item)
                            <tr class="border-bottom">
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="ps-4">
                                    <div>{{ $item['nama'] }}</div>
                                </td>
                                <td>{{ $item['pengusul'] }}</td>
                                <td>{{ $item['tahun'] }}</td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-icon btn-sm btn-light-info" data-bs-toggle="tooltip"
                                        title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
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
