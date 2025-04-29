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
            <form action="{{ route('Dashboard.Pelatihan.verifikasiRegistrasi', $pelatihanRegistrasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <!-- Nama & NIP -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control form-control-solid" value="{{ $pelatihanRegistrasi->user->name }}"
                            readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">NIP</label>
                        <input type="text" class="form-control form-control-solid" value="{{ $pelatihanRegistrasi->user->nip }}"
                            readonly>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-bold">Golongan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $pelatihanRegistrasi->user->userPivot->golongan->golongan }}" readonly>
                    </div>

                    <!-- Jabatan & Unit Kerja -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jabatan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $pelatihanRegistrasi->user->userPivot->jabatan->jabatan }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Unit Kerja</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $pelatihanRegistrasi->user->userPivot->unitKerja->unit_kerja }}" readonly>
                    </div>

                    <!-- Pelatihan & Waktu -->
                    <div class="col-md-8">
                        <label class="form-label fw-bold">Nama Pelatihan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $pelatihanRegistrasi->pelatihan->nama_pelatihan }}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Waktu Pelaksanaan</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $pelatihanRegistrasi->pelatihan->tanggal_pelaksanaan }}" readonly>
                    </div>

                    <!-- Biaya -->
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Pelaksanaan</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid"
                                value="{{ number_format($pelatihanRegistrasi->biaya_pelatihan, 0, ',', '.') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Hotel</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid"
                                value="{{ number_format($pelatihanRegistrasi->biaya_hotel, 0, ',', '.') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Biaya Akomodasi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid"
                                value="{{ number_format($pelatihanRegistrasi->biaya_akomodasi, 0, ',', '.') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Uang Harian</label>
                            <input type="text" class="form-control form-control-solid"
                                value="{{ number_format($pelatihanRegistrasi->uang_harian, 0, ',', '.') }}">
                        </div>
                    </div>

                    <!-- Files -->
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Surat Pengantar/Surat OPD</label>
                        <div class="d-flex align-items-center gap-2">
                            </a>
                        </div>
                        @if ($pelatihanRegistrasi->file_usulan)
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ asset('storage/' . $pelatihanRegistrasi->file_usulan) }}" target="_blank"
                                    class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                    <i class="bi bi-file-pdf"></i>
                                    <span>{{ basename($pelatihanRegistrasi->file_usulan) }}</span>
                                </a>
                            </div>
                        @else
                            <p class="text-muted">Belum ada file</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">File Penawaran</label>
                        @if ($pelatihanRegistrasi->file_penawaran)
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ asset('storage/' . $pelatihanRegistrasi->file_penawaran) }}" target="_blank"
                                    class="btn btn-light-info w-100 d-flex align-items-center gap-2">
                                    <i class="bi bi-file-pdf"></i>
                                    <span>{{ basename($pelatihanRegistrasi->file_penawaran) }}</span>
                                </a>
                            </div>
                        @else
                            <p class="text-muted">Belum ada file</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Surat Tugas</label>
                        <input type="file" class="form-control form-control-solid" name="surat_tugas">
                    </div>

                    <!-- Status & Keterangan -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Status</label>
                        <select class="form-select form-select-solid" name="status">
                            <option value="proses verifikasi" {{ $pelatihanRegistrasi->status == 'proses verifikasi' ? 'selected' : '' }}>Proses
                            </option>
                            <option value="diterima" {{ $pelatihanRegistrasi->status == 'diterima' ? 'selected' : '' }}>Disetujui
                            </option>
                            <option value="ditolak" {{ $pelatihanRegistrasi->status == 'ditolak' ? 'selected' : '' }}>Ditolak
                            </option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label fw-bold">Keterangan</label>
                        <textarea class="form-control form-control-solid" rows="3" name="keterangan"
                        placeholder="Tambahkan catatan atau keterangan jika diperlukan">{{ old('keterangan', $pelatihanRegistrasi->keterangan) }}</textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light" onclick="window.history.back()">
                                <i class="bi bi-arrow-left me-2"></i>Batal
                            </button>
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
