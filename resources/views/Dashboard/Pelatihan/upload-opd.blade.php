@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Upload Surat OPD - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Upload Surat OPD</li>
    </ol>
@endsection

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header border-0 pt-6 bg-transparent">
            <div class="d-flex flex-column">
                <h4 class="fw-bold mb-1">Upload Surat OPD</h4>
                <p class="text-muted mb-0">Lengkapi formulir berikut untuk mengajukan usulan pelatihan</p>
            </div>
        </div>

        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <!-- Nama Pelatihan -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Nama Pelatihan</label>
                        <input type="text" class="form-control form-control-solid" name="nama_pelatihan" required>
                    </div>

                    <!-- Waktu Pelaksanaan -->
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Waktu Pelaksanaan</label>
                        <div class="input-group">
                            <input type="date" class="form-control form-control-solid" name="tanggal_mulai" required>
                            <span class="input-group-text bg-light fw-bold">sampai</span>
                            <input type="date" class="form-control form-control-solid" name="tanggal_selesai" required>
                        </div>
                    </div>

                    <!-- Biaya Section -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Biaya Pelatihan</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" name="biaya_pelatihan" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Biaya Hotel</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" name="biaya_hotel" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Biaya Akomodasi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" name="biaya_akomodasi" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Uang Harian</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input type="text" class="form-control form-control-solid" name="uang_harian" required>
                        </div>
                    </div>

                    <!-- File Uploads -->
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Surat Pengantar/Usulan OPD</label>
                        <input type="file" class="form-control form-control-solid" name="surat_opd"
                            accept=".pdf,.doc,.docx" required>
                        <div class="text-muted fs-7 mt-2">Format: PDF, DOC, DOCX (Max. 5MB)</div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">File Penawaran</label>
                        <input type="file" class="form-control form-control-solid" name="file_penawaran"
                            accept=".pdf,.doc,.docx" required>
                        <div class="text-muted fs-7 mt-2">Format: PDF, DOC, DOCX (Max. 5MB)</div>
                    </div>

                    <!-- Form Actions -->
                    <div class="col-12">
                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-light" onclick="window.history.back()">
                                <i class="bi bi-arrow-left me-2"></i>Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-2"></i>Upload
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
    </style>

    <script>
        // Format currency inputs
        document.querySelectorAll(
                'input[name$="_pelatihan"], input[name$="_hotel"], input[name$="_akomodasi"], input[name$="_harian"]')
            .forEach(input => {
                input.addEventListener('input', function(e) {
                    let value = this.value.replace(/\D/g, "");
                    this.value = new Intl.NumberFormat('id-ID').format(value);
                });
            });
    </script>
@endsection
