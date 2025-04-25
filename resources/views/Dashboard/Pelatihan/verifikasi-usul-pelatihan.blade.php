@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Verifikasi Usulan Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('Dashboard.Pelatihan.usul-pelatihan') }}">Usul Pelatihan</a></li>
        <li class="breadcrumb-item active">Verifikasi Usulan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0 pt-6 bg-transparent">
            <div class="d-flex flex-column">
                <h4 class="fw-bold mb-1">Verifikasi Usulan Pelatihan</h4>
                <p class="text-muted mb-0">Verifikasi data usulan pelatihan pegawai</p>
            </div>
        </div>

        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <!-- Nama & NIP -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control form-control-solid" value="Ahmad Fauzi" readonly>
                    </div>

                    <!-- NIP & Jabatan -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NIP</label>
                        <input type="text" class="form-control form-control-solid" value="198505152010011001" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jabatan</label>
                        <input type="text" class="form-control form-control-solid" value="Kepala Seksi Pengembangan"
                            readonly>
                    </div>

                    <!-- Unit Kerja & Nama Pelatihan -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Unit Kerja</label>
                        <input type="text" class="form-control form-control-solid" value="BKPSDM Kota Surakarta"
                            readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama Pelatihan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="Pelatihan Kepemimpinan Nasional Tingkat II" readonly>
                    </div>

                    <!-- Waktu & Total Biaya -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Waktu Pelatihan</label>
                        <input type="text" class="form-control form-control-solid" value="1-15 Februari 2024" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Total Biaya</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" value="11.500.000" readonly>
                        </div>
                    </div>

                    <!-- Files -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Biaya Laporan Penyelenggaraan</label>
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                <i class="bi bi-file-pdf"></i>
                                <span>laporan_biaya.pdf</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Sertifikat Pelatihan</label>
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                <i class="bi bi-file-pdf"></i>
                                <span>sertifikat.pdf</span>
                            </a>
                        </div>
                    </div>

                    <!-- Status & Keterangan -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Status</label>
                        <select class="form-select form-select-solid" name="status">
                            <option value="usulan">Usulan</option>
                            <option value="disetujui">Disetujui</option>
                            <option value="ditolak">Ditolak</option>
                            <option value="revisi">Perlu Revisi</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-bold">Keterangan</label>
                        <textarea class="form-control form-control-solid" rows="3" name="keterangan"
                            placeholder="Tambahkan catatan atau keterangan jika diperlukan"></textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light" onclick="window.history.back()">
                                <i class="bi bi-arrow-left me-2"></i>Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-2"></i>Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('additional-css')
    <style>
        .form-label {
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            color: #5e6278;
        }

        .form-control-solid {
            background-color: #f5f8fa;
            border-color: #f5f8fa;
            color: #5e6278;
            transition: color 0.2s ease;
        }

        .form-control-solid:focus {
            background-color: #eef3f7;
            border-color: #009ef7;
            color: #5e6278;
            box-shadow: none;
        }

        .form-select-solid {
            background-color: #f5f8fa;
            border-color: #f5f8fa;
            color: #5e6278;
        }

        .form-select-solid:focus {
            background-color: #eef3f7;
            border-color: #009ef7;
            box-shadow: none;
        }

        .input-group-text {
            border: none;
            font-size: 0.875rem;
        }

        textarea.form-control-solid {
            resize: none;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 0.475rem;
        }

        .btn-light {
            background-color: #f5f8fa;
            border-color: #f5f8fa;
            color: #7e8299;
        }

        .btn-light:hover {
            background-color: #e4e6ef;
            border-color: #e4e6ef;
            color: #7e8299;
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
    </style>
@endsection
