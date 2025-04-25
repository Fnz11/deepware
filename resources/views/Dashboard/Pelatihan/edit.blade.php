@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Edit Pelatihan - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Daftar Pelatihan</a></li>
        <li class="breadcrumb-item active">Edit Pelatihan</li>
    </ol>
@endsection

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header border-0 pt-6 bg-transparent">
        <div class="d-flex flex-column">
            <h4 class="fw-bold mb-1">Edit Pelatihan</h4>
            <p class="text-muted mb-0">Perbarui informasi pelatihan dengan mengisi formulir berikut</p>
        </div>
    </div>

    <div class="card-body">
        <form 
        {{-- action="{{ route('pelatihan.update', $pelatihan->id) }}"  --}}
        method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-4">
                <!-- Nama Pelatihan -->
                <div class="col-md-8">
                    <label class="form-label fw-bold">Nama Pelatihan</label>
                    <input type="text" class="form-control form-control-solid" name="nama_pelatihan" 
                           value="{{ old('nama_pelatihan', $pelatihan->nama_pelatihan) }}" placeholder="Masukkan nama pelatihan">
                </div>

                <!-- Kategori -->
                <div class="col-md-4">
                    <label class="form-label fw-bold">Kategori</label>
                    <select class="form-select form-select-solid" name="kategori">
                        <option value="">Pilih kategori</option>
                        <option value="Teknologi" {{ old('kategori', $pelatihan->kategori) == 'Teknologi' ? 'selected' : '' }}>Teknologi</option>
                        <option value="Kepemimpinan" {{ old('kategori', $pelatihan->kategori) == 'Kepemimpinan' ? 'selected' : '' }}>Kepemimpinan</option>
                        <option value="Manajemen" {{ old('kategori', $pelatihan->kategori) == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                    </select>
                </div>

                <!-- Periode Pelatihan -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Tanggal Pelaksanaan</label>
                    <div class="input-group">
                        <input type="date" class="form-control form-control-solid" name="tanggal_mulai" 
                               value="{{ old('tanggal_mulai', $pelatihan->tanggal_mulai) }}">
                        <span class="input-group-text bg-light fw-bold">sampai</span>
                        <input type="date" class="form-control form-control-solid" name="tanggal_selesai"
                               value="{{ old('tanggal_selesai', $pelatihan->tanggal_selesai) }}">
                    </div>
                </div>

                <!-- Kuota & Tempat -->
                <div class="col-md-3">
                    <label class="form-label fw-bold">Kuota Peserta</label>
                    <input type="number" class="form-control form-control-solid" name="kuota" 
                           value="{{ old('kuota', $pelatihan->kuota) }}" placeholder="Jumlah peserta">
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-bold">Tempat Pelatihan</label>
                    <input type="text" class="form-control form-control-solid" name="tempat" 
                           value="{{ old('tempat', $pelatihan->tempat) }}" placeholder="Lokasi pelatihan">
                </div>

                <!-- Periode Pendaftaran -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Periode Pendaftaran</label>
                    <div class="input-group">
                        <input type="date" class="form-control form-control-solid" name="daftar_mulai"
                               value="{{ old('daftar_mulai', $pelatihan->daftar_mulai) }}">
                        <span class="input-group-text bg-light fw-bold">sampai</span>
                        <input type="date" class="form-control form-control-solid" name="daftar_selesai"
                               value="{{ old('daftar_selesai', $pelatihan->daftar_selesai) }}">
                    </div>
                </div>

                <!-- Status -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Status</label>
                    <select class="form-select form-select-solid" name="status">
                        <option value="draft" {{ old('status', $pelatihan->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $pelatihan->status) == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>

                <!-- Image Upload -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Gambar Preview</label>
                    <div class="dropzone-container">
                        <input type="file" class="form-control form-control-solid" name="image" accept="image/*">
                        <div class="preview-image mt-2 {{ $pelatihan->image ? '' : 'd-none' }}">
                            <img src="{{ $pelatihan->image ? asset($pelatihan->image) : '#' }}" 
                                 alt="Preview" class="img-fluid rounded" style="max-height: 200px">
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Deskripsi Pelatihan</label>
                    <textarea class="form-control form-control-solid" name="deskripsi" rows="4" 
                              placeholder="Deskripsikan detail pelatihan">{{ old('deskripsi', $pelatihan->deskripsi) }}</textarea>
                </div>

                <!-- Manfaat/Benefit -->
                <div class="col-md-12">
                    <label class="form-label fw-bold">Manfaat Pelatihan</label>
                    <textarea class="form-control form-control-solid" name="manfaat" rows="4" 
                              placeholder="Jelaskan manfaat yang akan didapat">{{ old('manfaat', $pelatihan->manfaat) }}</textarea>
                </div>

                <!-- Form Actions -->
                <div class="col-12">
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-light" onclick="window.history.back()">
                            <i class="bi bi-arrow-left me-2"></i>Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-2"></i>Perbarui Pelatihan
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
    // Image preview functionality
    document.querySelector('input[name="image"]').addEventListener('change', function(e) {
        const preview = document.querySelector('.preview-image');
        const image = preview.querySelector('img');
        
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                image.src = e.target.result;
                preview.classList.remove('d-none');
            }
            
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endsection
