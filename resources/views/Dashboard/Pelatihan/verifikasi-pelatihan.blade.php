@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Verifikasi Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('Dashboard.Pelatihan.laporan-pelatihan') }}">Laporan Pelatihan</a></li>
        <li class="breadcrumb-item active">Verifikasi Pelatihan</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0 pt-6 bg-transparent">
            <div class="d-flex flex-column">
                <h4 class="fw-bold mb-1">Verifikasi Pelatihan</h4>
                <p class="text-muted mb-0">Verifikasi data pelatihan pegawai</p>
            </div>
        </div>

        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <!-- Nama & NIP -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control form-control-solid" value="Ahmad Fauzi" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">NIP</label>
                        <input type="text" class="form-control form-control-solid" value="198505152010011001" readonly>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-bold">Golongan</label>
                        <input type="text" class="form-control form-control-solid" value="III/d" readonly>
                    </div>

                    <!-- Jabatan & Unit Kerja -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jabatan</label>
                        <input type="text" class="form-control form-control-solid" value="Kepala Seksi Pengembangan"
                            readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Unit Kerja</label>
                        <input type="text" class="form-control form-control-solid" value="BKPSDM Kota Surakarta"
                            readonly>
                    </div>

                    <!-- Pelatihan & Waktu -->
                    <div class="col-md-8">
                        <label class="form-label fw-bold">Nama Pelatihan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="Pelatihan Kepemimpinan Nasional Tingkat II" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Waktu Pelaksanaan</label>
                        <input type="text" class="form-control form-control-solid" value="1-15 Februari 2024" readonly>
                    </div>

                    <!-- Biaya -->
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Pelaksanaan</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" value="5.000.000">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Hotel</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" value="3.000.000">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Akomodasi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" value="2.000.000">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Uang Harian</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" value="1.500.000">
                        </div>
                    </div>

                    <!-- Files -->
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Surat Pengantar/Surat OPD</label>
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                <i class="bi bi-file-pdf"></i>
                                <span>surat_opd.pdf</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">File Penawaran</label>
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                <i class="bi bi-file-pdf"></i>
                                <span>penawaran.pdf</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Surat Tugas</label>
                        <input type="file" class="form-control form-control-solid" name="surat_tugas">
                    </div>

                    <!-- Status & Keterangan -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Status</label>
                        <select class="form-select form-select-solid" name="status">
                            <option value="pending">Pending</option>
                            <option value="approved">Disetujui</option>
                            <option value="rejected">Ditolak</option>
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
