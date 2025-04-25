@extends('layouts.Pelatihan.pelatihan-dashboard')

@section('title', 'Dashboard - BKPSDM')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
@endsection

@section('content')
    <!-- Stats Cards Row -->
    <div class="row g-4 mb-5">
        <!-- Total Pelatihan Card -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol bg-light-primary rounded-3 me-3 p-3">
                        <i class="bi bi-mortarboard fs-3 text-primary"></i>
                    </div>
                    <div>
                        <div class="fs-7 text-muted mb-1">Total Pelatihan</div>
                        <div class="d-flex align-items-end gap-2">
                            <div class="fs-4 fw-bold">700</div>
                            <div class="fs-7 text-success mb-1">
                                <i class="bi bi-arrow-up"></i> 8.3%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jenis Unit Kerja -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol bg-light-success rounded-3 me-3 p-3">
                        <i class="bi bi-buildings fs-3 text-success"></i>
                    </div>
                    <div>
                        <div class="fs-7 text-muted mb-1">Unit Kerja</div>
                        <div class="fs-4 fw-bold">70</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usulan -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol bg-light-warning rounded-3 me-3 p-3">
                        <i class="bi bi-file-earmark-text fs-3 text-warning"></i>
                    </div>
                    <div>
                        <div class="fs-7 text-muted mb-1">Usulan Masuk</div>
                        <div class="fs-4 fw-bold">145</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelatihan -->
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol bg-light-info rounded-3 me-3 p-3">
                        <i class="bi bi-calendar2-check fs-3 text-info"></i>
                    </div>
                    <div>
                        <div class="fs-7 text-muted mb-1">Pelatihan</div>
                        <div class="fs-4 fw-bold">50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <!-- Main Chart Card -->
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-transparent py-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Statistik Pelatihan</h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-light-primary btn-sm active">Harian</button>
                            <button class="btn btn-light-primary btn-sm">Mingguan</button>
                            <button class="btn btn-light-primary btn-sm">Bulanan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="mixedChart" style="height: 350px;"></div>
                </div>
            </div>
        </div>

        <!-- Progress & Stats -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-transparent py-4">
                    <h5 class="fw-bold mb-0">Progress Laporan</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column gap-4">
                        <!-- Circular Progress -->
                        <div class="text-center mb-3">
                            <div id="circularProgress"></div>
                        </div>
                        
                        <!-- Stats List -->
                        <div class="d-flex justify-content-between p-3 bg-light-primary rounded-3">
                            <div>
                                <div class="fs-7 text-muted">Selesai</div>
                                <div class="fs-5 fw-bold">234</div>
                            </div>
                            <div>
                                <div class="fs-7 text-muted">Dalam Proses</div>
                                <div class="fs-5 fw-bold">45</div>
                            </div>
                            <div>
                                <div class="fs-7 text-muted">Tertunda</div>
                                <div class="fs-5 fw-bold">12</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Row -->
    <div class="row g-4">
        <!-- Recent Activities -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-transparent py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Aktivitas Terbaru</h5>
                        <button class="btn btn-light-primary btn-sm">Lihat Semua</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="timeline px-4 py-3">
                        @foreach(range(1, 4) as $i)
                        <div class="timeline-item pb-4">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="bi bi-check2 fs-4 text-success"></i>
                                </div>
                            </div>
                            <div class="timeline-content ps-4">
                                <div class="fw-bold">Pelatihan Baru Ditambahkan</div>
                                <div class="text-muted fs-7 mb-2">20 menit yang lalu</div>
                                <div class="p-3 bg-light-primary rounded-3 fs-7">
                                    Pelatihan "Manajemen ASN Modern" telah ditambahkan ke sistem
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Trainings -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-transparent py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Pelatihan Mendatang</h5>
                        <div class="d-flex gap-2">
                            <select class="form-select form-select-sm form-select-solid w-100px">
                                <option value="all">Semua</option>
                                <option value="week">Minggu Ini</option>
                                <option value="month">Bulan Ini</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <tbody>
                                @foreach(range(1, 5) as $i)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="symbol symbol-40px bg-light-primary rounded-3">
                                                <i class="bi bi-calendar-event text-primary"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold">Pelatihan Kepemimpinan</div>
                                                <div class="text-muted fs-7">25 Peserta</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="fw-bold">28 Feb 2024</div>
                                        <div class="text-muted fs-7">09:00 WIB</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional-css')
<style>
    .symbol {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .bg-light-primary { background-color: #f1faff !important; }
    .bg-light-success { background-color: #e8fff3 !important; }
    .bg-light-warning { background-color: #fff8dd !important; }
    .bg-light-info { background-color: #f8f5ff !important; }

    .text-primary { color: #009ef7 !important; }
    .text-success { color: #50cd89 !important; }
    .text-warning { color: #ffc700 !important; }
    .text-info { color: #7239ea !important; }

    .progress-ring {
        padding: 2rem;
    }

    .timeline {
        position: relative;
    }
    
    .timeline-item {
        position: relative;
    }
    
    .timeline-line {
        position: absolute;
        left: 19px;
        width: 2px;
        bottom: 0;
        top: 40px;
        background-color: #f5f8fa;
    }
    
    .timeline-icon {
        position: relative;
        z-index: 1;
    }
    
    .symbol-40px {
        width: 40px;
        height: 40px;
    }
</style>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mixed Chart
        var mixedOptions = {
            series: [{
                name: 'Pendaftar',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
            }, {
                name: 'Kelulusan',
                type: 'area',
                data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
            }],
            chart: {
                height: 350,
                type: 'line',
                stacked: false,
                toolbar: { show: false }
            },
            stroke: {
                width: [0, 2, 5],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },
            fill: {
                opacity: [0.85, 0.25, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                }
            },
            markers: {
                size: 0
            },
            xaxis: {
                categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan',
                    '07 Jan', '08 Jan', '09 Jan', '10 Jan', '11 Jan'
                ],
            }
        };
        new ApexCharts(document.querySelector("#mixedChart"), mixedOptions).render();

        // Circular Progress
        var progressOptions = {
            series: [76],
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '70%',
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '16px',
                            offsetY: -10
                        },
                        value: {
                            fontSize: '30px',
                            show: true,
                        },
                    }
                },
            },
            labels: ['Progress'],
            colors: ['#009ef7']
        };
        new ApexCharts(document.querySelector("#circularProgress"), progressOptions).render();
    });
</script>
@endsection
