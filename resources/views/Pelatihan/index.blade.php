@extends('layouts.app')

@section('title', 'Pelatihan BKPSDM')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section position-relative bg-light-primary py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Tingkatkan Kompetensi ASN Melalui Pelatihan Berkualitas</h1>
                    <p class="lead text-muted mb-5">Platform pelatihan terpadu untuk pengembangan kompetensi Aparatur Sipil Negara menuju Smart ASN 2024</p>
                    <div class="d-flex gap-3">
                        <a href="#daftar-pelatihan" class="btn btn-primary btn-lg px-4">Lihat Pelatihan</a>
                        <a href="/contact" class="btn btn-outline-primary btn-lg px-4">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" alt="Hero Image" class="img-fluid rounded-4 shadow-sm">
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-100">
                <path fill="#ffffff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,234.7C960,235,1056,181,1152,170.7C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <!-- Legal Basis Section -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Dasar Hukum Pelatihan ASN</h2>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4">Undang-Undang Nomor 5 Tahun 2014</h5>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-4 bg-light-primary rounded-4">
                                    <h6 class="fw-bold mb-3">Pasal 70</h6>
                                    <p class="mb-0">ASN berhak mendapatkan pengembangan kompetensi sekurang-kurangnya 20 jam pelajaran dalam satu tahun.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 bg-light-primary rounded-4">
                                    <h6 class="fw-bold mb-3">Pasal 71</h6>
                                    <p class="mb-0">Pemerintah wajib memberikan kesempatan kepada ASN untuk mengikuti pendidikan dan pelatihan dalam rangka pengembangan kompetensi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Training List Section -->
    <div id="daftar-pelatihan" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Daftar Pelatihan Tersedia</h2>
            <p class="text-muted">Pilih pelatihan yang sesuai dengan kebutuhan pengembangan kompetensi Anda</p>
        </div>

        <div class="row g-4">
            @php
                $dummyData = [
                    [
                        'nama' => 'Pelatihan SPBE (Sistem Pemerintahan Berbasis Elektronik)',
                        'deskripsi' => 'Program pelatihan komprehensif untuk meningkatkan pemahaman SPBE',
                        'tanggal' => '25-29 Oktober 2025',
                        'kategori' => 'Teknologi',
                        'status' => 'Buka',
                        'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3'
                    ],
                    [
                        'nama' => 'Leadership & Manajemen ASN Modern',
                        'deskripsi' => 'Pelatihan kepemimpinan transformasional untuk ASN modern',
                        'tanggal' => '10-15 November 2025',
                        'kategori' => 'Kepemimpinan',
                        'status' => 'Tutup',
                        'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0'
                    ],
                    [
                        'nama' => 'Digital Innovation & Transformation',
                        'deskripsi' => 'Memahami inovasi digital dalam pemerintahan modern',
                        'tanggal' => '5-10 Desember 2025',
                        'kategori' => 'Teknologi',
                        'status' => 'Buka',
                        'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c'
                    ]
                ];
            @endphp

            @foreach($dummyData as $item)
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-elevate-up">
                        <img src="{{ $item['image'] }}" class="card-img-top" alt="Training Image" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge badge-light-primary">{{ $item['kategori'] }}</span>
                                @if($item['status'] === 'Buka')
                                    <span class="badge badge-success">Pendaftaran Dibuka</span>
                                @else
                                    <span class="badge badge-danger">Pendaftaran Ditutup</span>
                                @endif
                            </div>
                            <h5 class="fw-bold mb-3">{{ $item['nama'] }}</h5>
                            <p class="text-muted mb-3">{{ $item['deskripsi'] }}</p>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-calendar3 text-primary"></i>
                                <span class="text-muted">{{ $item['tanggal'] }}</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4">
                            <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light-primary py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">BKPSDM</h5>
                    <p class="text-muted mb-4">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia berkomitmen untuk meningkatkan kualitas ASN melalui pelatihan berkualitas.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-light-primary btn-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-light-primary btn-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-light-primary btn-icon"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Pelatihan</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold mb-4">Kontak</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 text-muted"><i class="bi bi-geo-alt me-2"></i> Jl. Example No. 123</li>
                        <li class="mb-2 text-muted"><i class="bi bi-telephone me-2"></i> (021) 1234-5678</li>
                        <li class="mb-2 text-muted"><i class="bi bi-envelope me-2"></i> info@bkpsdm.go.id</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold mb-4">Newsletter</h6>
                    <p class="text-muted mb-4">Dapatkan informasi terbaru tentang pelatihan</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <div class="text-center text-muted">
                <small>&copy; 2024 BKPSDM. All rights reserved.</small>
            </div>
        </div>
    </footer>
@endsection

@section('additional-css')
<style>
    /* Utility Classes */
    .hover-elevate-up {
        transition: transform 0.3s ease;
    }
    .hover-elevate-up:hover {
        transform: translateY(-5px);
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
    
    /* Button Styling */
    .btn-icon {
        width: 38px;
        height: 38px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.475rem;
    }
    
    .rounded-4 {
        border-radius: 0.75rem !important;
    }
</style>
@endsection
