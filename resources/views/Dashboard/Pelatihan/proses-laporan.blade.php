@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Proses Laporan Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Proses Laporan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
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
                        placeholder="Cari laporan...">
                </div>

                <!-- Action Buttons -->
                <div class="d-flex gap-2">
                    <button class="btn btn-light-success d-inline-flex align-items-center gap-2"
                        onclick="window.location.href='#'">
                        <i class="bi bi-file-excel"></i>
                        <span>Export</span>
                    </button>
                    <button class="btn btn-light-primary d-inline-flex align-items-center gap-2" onclick="window.print()">
                        <i class="bi bi-printer"></i>
                        <span>Cetak</span>
                    </button>
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
                            <th class="fw-bolder text-nowrap ps-4">Usul Pelatihan</th>
                            <th class="fw-bolder text-nowrap text-center" style="width: 200px">Kelengkapan Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $dummyData = [
                                [
                                    'nama' => 'Pelatihan SPBE (Sistem Pemerintahan Berbasis Elektronik)',
                                    'progress' => 75,
                                ],
                                [
                                    'nama' => 'Leadership & Manajemen ASN Modern',
                                    'progress' => 90,
                                ],
                                [
                                    'nama' => 'Workshop Digital Innovation',
                                    'progress' => 45,
                                ],
                            ];
                        @endphp

                        @foreach ($dummyData as $index => $item)
                            <tr class="border-bottom">
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="ps-4 py-4">
                                    <div>{{ $item['nama'] }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex flex-column gap-2 px-4">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted fs-7">Progress</span>
                                            <span class="fw-bold fs-7">{{ $item['progress'] }}%</span>
                                        </div>
                                        <div class="progress h-6px w-100">
                                            <div class="progress-bar {{ $item['progress'] >= 75 ? 'bg-success' : ($item['progress'] >= 50 ? 'bg-primary' : 'bg-warning') }}"
                                                role="progressbar" style="width: {{ $item['progress'] }}%">
                                            </div>
                                        </div>
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

        /* Table Styling */
        .table> :not(:first-child) {
            border-top: none;
        }

        .bg-light-primary {
            background-color: #f1faff !important;
        }

        /* Progress Styling */
        .progress {
            background-color: #f5f8fa;
            border-radius: 0.475rem;
        }

        .progress-bar {
            transition: width 1s ease;
        }

        .bg-success {
            background-color: #50cd89 !important;
        }

        .bg-warning {
            background-color: #ffc700 !important;
        }

        .bg-primary {
            background-color: #009ef7 !important;
        }

        /* Responsive */
        @media (max-width: 768px) {

            .w-md-150px,
            .w-md-250px {
                width: 100% !important;
            }
        }
    </style>
@endsection
