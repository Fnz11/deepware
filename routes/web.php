<?php

use App\Http\Controllers\DeepwarePelatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DatabaseEkatalog\PelatihanController;
use App\Http\Controllers\Admin\Brosur\BrosurAdminController;
use App\Http\Controllers\Admin\DatabaseEkatalog\EkatalogController;
use App\Http\Controllers\Admin\Akpk\AkpkAdminController;

use App\Http\Controllers\ExportUsulanController;

use App\Http\Controllers\Admin\Laporan\LaporanController;
use App\Http\Controllers\ImportUsulanController;
use App\Http\Controllers\ExportEkatalogController;
use App\Http\Controllers\ImportArsipController;
use App\Http\Controllers\ImportPelatihanController;
use App\Http\Controllers\ImportDiklatController;
use App\Http\Controllers\Admin\Laporan\RekapController;
use App\Http\Controllers\Umum\EkatalogPelatihan\EkatalogUmumController;
use App\Http\Controllers\Umum\EvaluasiPasca\EvaluasiAlumniController;
use App\Http\Controllers\Umum\DirektoriPelatihan\DirektoriUmumController;
use App\Http\Controllers\Umum\UsulanBrosur\BrosurUmumController;
use App\Http\Controllers\Auth\UserEvaluasiController;
use App\Http\Controllers\Admin\Evaluasi\AlumniAdminController;
use App\Http\Controllers\Admin\Evaluasi\AtasanAdminController;
use App\Http\Controllers\Admin\Evaluasi\PertanyaanController;
use App\Http\Controllers\Admin\Pelatihan\PelatihanAdminController;
use App\Http\Controllers\Umum\Akpk\AkpkController;
use App\Http\Controllers\Auth\LoginAkpkController;
use App\Http\Controllers\AkpkPertanyaanDiriController;
use App\Http\Controllers\AkpkPertanyaanAtasanController;
use App\Http\Controllers\AkpkHasilEvaluasiDiriController;
use App\Http\Controllers\AkpkHasilEvaluasiAtasanController;
use App\Http\Controllers\DeepwareKepegawaianController;
use App\Http\Controllers\DeepwareLaporanPelatihanController;

// #################### DEEPWARE - PELATIHAN🌟 ####################
Route::get('/', function () {
    return view('FrontPage.index');
});

// Public routes
Route::get('/pelatihan', [DeepwarePelatihanController::class, 'index'])->name('pelatihan.index');
Route::get('/pelatihan/{id}', [DeepwarePelatihanController::class, 'show'])->name('pelatihan.show');

// Dashboard routes (protected)
Route::prefix('dashboard/pelatihan')->group(function () {
    // Pelatihan
    Route::get('/', [DeepwarePelatihanController::class, 'dashboard'])->name('dashboard.pelatihan.dashboard');
    Route::get('/pendaftaran', [DeepwarePelatihanController::class, 'pendaftaran'])->name('dashboard.pelatihan.pendaftaran');
    Route::get('/reverensi', [DeepwarePelatihanController::class, 'reverensi'])->name('dashboard.pelatihan.reverensi');
    Route::get('/daftar-pelatihan', [DeepwarePelatihanController::class, 'daftarPelatihan'])->name('dashboard.pelatihan.daftar');
    Route::get('/tambah-pelatihan', [DeepwarePelatihanController::class, 'create'])->name('dashboard.pelatihan.create');
    Route::get('/edit-pelatihan/{id}', [DeepwarePelatihanController::class, 'edit'])->name('dashboard.pelatihan.edit');

    // Laporan Pelatihan
    Route::get('/proses-laporan', [DeepwareLaporanPelatihanController::class, 'ProsesLaporan'])->name('Dashboard.Pelatihan.proses-laporan');
    Route::get('/laporan-pelatihan', [DeepwareLaporanPelatihanController::class, 'LaporanPelatihan'])->name('Dashboard.Pelatihan.laporan-pelatihan');
    Route::get('/laporan-usul-pelatihan', [DeepwareLaporanPelatihanController::class, 'UsulPelatihan'])->name('Dashboard.Pelatihan.usul-pelatihan');
    Route::get('/verifikasi-pelatihan/{id}', [DeepwareLaporanPelatihanController::class, 'VerifikasiPelatihan'])->name('Dashboard.Pelatihan.verifikasi-pelatihan');
    Route::get('/verifikasi-usul-pelatihan/{id}', [DeepwareLaporanPelatihanController::class, 'VerifikasiUsul'])->name('Dashboard.Pelatihan.verifikasi-usul-pelatihan');
    Route::get('/upload-opd', [DeepwareLaporanPelatihanController::class, 'UploadOPD'])->name('Dashboard.Pelatihan.UploadOPD');

    // Kepegawaian
    Route::get('/kepegawaian', [DeepwareKepegawaianController::class, 'index'])->name('Dashboard.Pelatihan.Kepegawaian.index');
    Route::get('/tambah-kepegawaian', [DeepwareKepegawaianController::class, 'create'])->name('Dashboard.Pelatihan.Kepegawaian.create');
    Route::get('/kepegawaian/{id}', [DeepwareKepegawaianController::class, 'edit'])->name('Dashboard.Pelatihan.Kepegawaian.edit');
});

//Route untuk halaman publik
Route::get('/', function () {
    return view('FrontPage.index');
})->name('frontpage.index');

Route::middleware('auth')->group(function () {
    Route::get('/selfAssessment', [AkpkPertanyaanDiriController::class, 'index']);
    Route::post('/self-assessment/simpan', [AkpkPertanyaanDiriController::class, 'store'])->name('self-assessment.simpan');

    Route::get('/assessmentBawahan', function () {
        return view('MenuUmum.Akpk.Assessment.assessmentBawahan');
    });

    Route::get('/assessmentBawahan', [AkpkPertanyaanAtasanController::class, 'index'])->name('assessment.bawahan');

    Route::post('/assessment-atasan', [AkpkPertanyaanAtasanController::class, 'store'])->name('assessment-atasan.simpan');

    Route::get('/hasilSelfAssessment',  [AkpkHasilEvaluasiDiriController::class, 'index'])->name('hasilSelfAssessment');

    Route::get('/hasilAssessmentBawahan', [AkpkHasilEvaluasiAtasanController::class, 'index'])->name('hasilAssessmentBawahan');

    Route::get('/usulan', function () {
        return view('MenuUmum.Akpk.UsulanPelatihan.Usulan.usulPelatihan');
    });

    Route::get('/hasilUsulan', function () {
        return view('MenuUmum.Akpk.UsulanPelatihan.Usulan.hasilUsulan');
    });

    Route::get('/solowasis', function () {
        return view('MenuUmum.Akpk.UsulanPelatihan.Solowasis.solowasis');
    });

    Route::get('/hasilSolowasis', function () {
        return view('MenuUmum.Akpk.UsulanPelatihan.Solowasis.hasilSolowasis');
    });

    Route::get('/dashboardSuperAdminAKpk', function () {
        return view('SuperAdmin.Akpk.dashboardSuperAdminAkpk');
    })->name('superadmin.akpk.dashboard');

    Route::post('/usulan/store', [AkpkController::class, 'storeUsulan'])->name('usulan.store');
    Route::put('/usulan/update/{id}', [AkpkController::class, 'updateUsulan'])->name('usulan.update');

    Route::get('/nomenklatur', function () {
        return view('MenuUmum.Akpk.UsulanPelatihan.Nomenklatur.nomenklatur');
    });

    Route::get('/profilAKPK', function () {
        return view('MenuUmum.Akpk.profil');
    });
});

//route untuk menu umum usulan brosur
Route::get('/BrosurPelatihan', [BrosurUmumController::class, 'index'])->name('BrosurPelatihan.usulan');
Route::get('BrosurPelatihan/create', [BrosurUmumController::class, 'create'])->name('BrosurPelatihan.createusulan');
Route::post('BrosurPelatihan/store', [BrosurUmumController::class, 'store'])->name('BrosurPelatihan.storeusulan');

//route untuk menu umum e-katalog pelatihan
Route::get('/EkatalogPelatihan', [EkatalogUmumController::class, 'index'])->name('EkatalogPelatihan.ekatalog');
Route::get('/EkatalogPelatihan/view/{id}', [EkatalogUmumController::class, 'view'])->name('EkatalogPelatihan.viewekatalog');

//route untuk menu umum direktori laporan
Route::get('/DirektoriPelatihan', [DirektoriUmumController::class, 'index'])->name('DirektoriPelatihan.direktori');
Route::get('DirektoriPelatihan/create', [DirektoriUmumController::class, 'create'])->name('DirektoriPelatihan.createdirektori');
Route::post('DirektoriPelatihan/store', [DirektoriUmumController::class, 'store'])->name('DirektoriPelatihan.storedirektori');
Route::get('/DirektoriPelatihan/view/{id}', [DirektoriUmumController::class, 'view'])->name('DirektoriPelatihan.viewdirektori');


// Route untuk login admin
Route::get('admin0', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin0', [LoginController::class, 'logins']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//Route Untuk AKPK
Route::get('/dashboard-akpk', [AkpkController::class, 'index'])->name('akpk.index');



//Route Untuk AKPK
Route::get('/homepage-akpk', [AkpkController::class, 'index'])->name('akpk.index');

// Login untuk AKPK
Route::get('/login-akpk', [LoginAkpkController::class, 'showLoginForm'])->name('login.akpk');
Route::post('/login-akpk', [LoginAkpkController::class, 'login'])->name('login.akpk.post');
Route::post('/logout-akpk', [LoginAkpkController::class, 'logout'])->name('logout.akpk');

Route::middleware(['role:admin|superadmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // Route untuk halaman usulan brosur

    Route::get('/brosur/usulan', [BrosurAdminController::class, 'index'])->name('Admin.Brosur.usulan');
    Route::get('/brosur/arsip', [BrosurAdminController::class, 'index'])->name('Admin.Brosur.arsip');
    Route::put('/brosur/approve/{id}', [BrosurAdminController::class, 'approve'])->name('brosur.approve');
    Route::get('/brosur/editusulan/{brosur}', [BrosurAdminController::class, 'edit'])->name('Admin.Brosur.editusulan');
    Route::put('/brosur/updateusulan/{brosur}', [BrosurAdminController::class, 'update'])->name('Admin.Brosur.updateusulan');
    Route::delete('/brosur/deleteusulan/{id}', [BrosurAdminController::class, 'deletes'])->name('brosur.deleteusulan');
    Route::get('/brosur/create', [BrosurAdminController::class, 'create'])->name('Admin.Brosur.create');
    Route::post('/brosur/store', [BrosurAdminController::class, 'storebrosur'])->name('brosur.store');
    Route::get('/brosur/edit/{id}', [BrosurAdminController::class, 'edit'])->name('Admin.Brosur.edit');
    Route::put('/brosur/update/{id}', [BrosurAdminController::class, 'update'])->name('brosur.update');



    Route::get('/exportusulan-excel', [ExportUsulanController::class, 'exportusulan'])->name('exportusulan.excel');
    Route::post('/import-usulan', [ImportUsulanController::class, 'importUsulanDiklat'])->name('import.usulan');
    Route::post('/import-arsip', [ImportArsipController::class, 'importArsip'])->name('import.arsip');



    // Route untuk nama ekatalog databse
    Route::get('/ekatalog/database', [PelatihanController::class, 'index'])->name('Admin.ekatalog.database');
    Route::post('/store/{type}', [PelatihanController::class, 'store'])->name('pelatihan.store');
    Route::delete('/deletedatas/{model}/{id}', [PelatihanController::class, 'delete'])->name('deletedata');


    Route::patch('/pelatihan/{id}', [PelatihanController::class, 'update'])->name('pelatihan.update');



    // // route untuk ekatalog diklat
    Route::get('/ekatalog/createpelatihan', [PelatihanController::class, 'create'])->name('ekatalog.createpelatihan');
    Route::post('/ekatalog/storepelatihan', [PelatihanController::class, 'storepelatihan'])->name('ekatalog.storepelatihan');
    Route::post('/import-pelatihan', [ImportPelatihanController::class, 'importPelatihan'])->name('import.pelatihan');
    Route::put('/toggle-status/{id_katalog2}', [EkatalogController::class, 'toggleStatus'])->name('toggle.status');


    // // Route untuk halaman ekatalog diklat
    Route::get('/ekatalog/diklat', [EkatalogController::class, 'index'])->name('admin.ekatalog.diklat');
    Route::get('/ekatalog/creatediklat', [EkatalogController::class, 'create'])->name('admin.ekatalog.creatediklat');
    Route::post('/ekatalog/storediklat', [EkatalogController::class, 'store'])->name('admin.ekatalog.storediklat');
    Route::get('/ekatalog/viewdiklat/{id}', [EkatalogController::class, 'view'])->name('admin.ekatalog.viewdiklat');

    Route::get('/ekatalog/deleteekatalog/{id}', [EkatalogController::class, 'destroy'])->name('deleteekatalog');
    Route::get('/exportekatalog-excel', [ExportEkatalogController::class, 'exportekatalog'])->name('exportekatalog.excel');
    Route::post('/import-diklat', [ImportDiklatController::class, 'importDiklat'])->name('import.diklat');

    // // Route untuk halaman laporan
    Route::get('/laporan/usulan', [LaporanController::class, 'index'])->name('laporan.usulan');
    Route::get('/laporan/arsip', [LaporanController::class, 'index'])->name('laporan.arsip');
    Route::get('/laporan/createusulan', [LaporanController::class, 'create'])->name('laporan.createusulan');
    Route::post('/laporan/storediklat', [LaporanController::class, 'store'])->name('laporan.storeusulan');
    Route::put('/laporan/editarsip/{id}', [LaporanController::class, 'update'])->name('laporan.updateusulan');
    Route::get('/laporan/editarsip/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.editlaporan');
    Route::delete('/laporan/deleteusulanlaporan/{id}', [LaporanController::class, 'destroy'])->name('deleteusulanlaporan');
    Route::get('/laporan/approve/{id}', [LaporanController::class, 'approve'])->name('approvelaporan');



    // // Route untuk halaman rekap pelatihan
    Route::get('/laporan/rekap', [RekapController::class, 'index'])->name('laporan.rekap');

    //route untuk halaman evaluasi alumni
    Route::get('/evaluasi/alumni', [AlumniAdminController::class, 'index'])->name('evaluasi.alumni');
    Route::get('/evaluasi/viewalumni/{id}', [AlumniAdminController::class, 'view'])->name('evaluasi.viewalumni');
    Route::get('/alumni/edit/{id}', [AlumniAdminController::class, 'edit'])->name('evaluasi.editalumni');
    Route::put('/alumni/{id}', [AlumniAdminController::class, 'update'])->name('evaluasi.updatealumni');
    Route::delete('/evaluasi/destroyalumni/{id}', [AlumniAdminController::class, 'destroy'])->name('evaluasi.destroyalumni');

    Route::get('/evaluasi/atasan', [AtasanAdminController::class, 'index'])->name('evaluasi.atasan');
    Route::get('/evaluasi/viewatasan/{id}', [AtasanAdminController::class, 'view'])->name('evaluasi.viewatasan');
    Route::get('/atasan/edit/{id}', [AtasanAdminController::class, 'edit'])->name('evaluasi.editatasan');
    Route::put('/atasan/{id}', [AtasanAdminController::class, 'update'])->name('evaluasi.updateatasan');
    Route::delete('/evaluasi/destroyatasan/{id}', [AtasanAdminController::class, 'destroy'])->name('evaluasi.destroyatasan');


    Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan.index');
    Route::delete('/pertanyaan/{id}', [PertanyaanController::class, 'destroy'])->name('pertanyaan.destroy');
    Route::get('/pertanyaan/create', [PertanyaanController::class, 'create'])->name('pertanyaan.create');
    Route::post('/pertanyaan', [PertanyaanController::class, 'store'])->name('pertanyaan.store');
    Route::get('/pertanyaan/{id}/edit', [PertanyaanController::class, 'edit'])->name('pertanyaan.edit');
    Route::put('/pertanyaan/{id}', [PertanyaanController::class, 'update'])->name('pertanyaan.update');

    // Route untuk submenu Dashboard AKPK
    Route::get('/akpk/dashboard', [AkpkAdminController::class, 'dashboard'])->name('Admin.Akpk.dashboard');

    // Route pelatihan
    Route::get('/pelatihan', [PelatihanAdminController::class, 'index'])->name('pelatihan.index');
});

Route::middleware(['role:superadmin'])->group(function () {

    // Route untuk submenu SelfASessment
    Route::get('/akpk/selfassessment', [AkpkAdminController::class, 'tabelSelfAssessment'])->name('Admin.Akpk.selfassessment');
    // Route untuk submenu assessment Atasan
    Route::get('/akpk/asessmentatasan', [AkpkAdminController::class, 'tabelAssessmentAtasan'])->name('Admin.Akpk.asessmentatasan');
    // Route untuk submenu Evaluasi Assessment
    Route::get('/akpk/evaluasiassessment', [AkpkAdminController::class, 'tabelEvaluasiAssessment'])->name('Admin.Akpk.evaluasiassessment');


    // Route untuk submenu usul pelatihan solo wasis
    Route::get('/akpk/usulpelatihansolowasis', [AkpkAdminController::class, 'tabelUsulanPelatihanSolowasis'])->name('Admin.Akpk.Usulan.usulpelatihansolowasis');
    // Route untuk submenu usul kebutuhan pelatihan
    Route::get('/akpk/usulkebutuhanpelatihan', [AkpkAdminController::class, 'tabelUsulanKebutuhanPelatihan'])->name('Admin.Akpk.Usulan.usulkebutuhanpelatihan');


    Route::get('/akpk/pertanyaan', [AkpkAdminController::class, 'manajemenPertanyaanDiri'])->name('Admin.Akpk.ManajemenData.manajemenpertanyaan');
    Route::post('/admin/pertanyaanDiri/store', [AkpkAdminController::class, 'simpanPertanyaanDiri'])->name('adminpertanyaandiri.store');
    Route::post('/admin/pertanyaanDiri/update', [AkpkAdminController::class, 'updatePertanyaanDiri'])->name('adminpertanyaandiri.update');
    Route::post('/admin/pertanyaanDiri/hapus', [AkpkAdminController::class, 'hapusPertanyaanDiri'])->name('adminpertanyaandiri.hapus');
    Route::post('/admin/pertanyaanAtasan/store', [AkpkAdminController::class, 'simpanPertanyaanAtasan'])->name('adminpertanyaanatasan.store');
    Route::post('/admin/pertanyaanAtasan/update', [AkpkAdminController::class, 'updatePertanyaanAtasan'])->name('adminpertanyaanatasan.update');
    Route::post('/admin/pertanyaanAtasan/hapus', [AkpkAdminController::class, 'hapusPertanyaanAtasan'])->name('adminpertanyaanatasan.hapus');
    Route::post('/pertanyaan/toggle-status-diri', [AkpkAdminController::class, 'toggleStatusDiri'])->name('pertanyaan.toggleStatusDiri');
    Route::post('/pertanyaan/toggle-status-atasan', [AkpkAdminController::class, 'toggleStatusAtasan'])->name('pertanyaan.toggleStatusAtasan');
    Route::get('/akpk/pertanyaanAtasan', [AkpkAdminController::class, 'manajemenPertanyaanAtasan'])->name('Admin.Akpk.ManajemenData.Atasan.manajemenpertanyaanAtasan');
    Route::get('/akpk/komentar', [AkpkAdminController::class, 'manajemenKomentar'])->name('Admin.Akpk.ManajemenData.manajemenkomentar');
    Route::get('/akpk/galeri', [AkpkAdminController::class, 'manajemenGaleri'])->name('Admin.Akpk.ManajemenData.manajemenGaleri');
    Route::get('/akpk/solowasis', [AkpkAdminController::class, 'manajemenSolowasis'])->name('Admin.Akpk.ManajemenData.manajemenSolowasis');
});

Route::middleware(['role:admin'])->group(function () {

    Route::get('/akpk/rumpun', [AkpkAdminController::class, 'manajemenRumpun'])->name('Admin.Akpk.ManajemenData.manajemenRumpun');
    Route::get('/akpk/usulanPelatihanAdmin', [AkpkAdminController::class, 'tabelUsulanAdmin'])->name('Admin.Akpk.Usulan.Admin.usulkebutuhanpelatihanAdmin');
    Route::get('/akpk/nomenklatur', [AkpkAdminController::class, 'dataNomenklatur'])->name('Admin.Akpk.Usulan.Admin.dataNomenklatur');
});

use App\Http\Middleware\RoleMiddleware;

Route::get('/EvaluasiPasca', [UserEvaluasiController::class, 'index'])->name('EvaluasiPasca.homepage');
Route::post('/login', [UserEvaluasiController::class, 'login'])->name('auth.login');
Route::post('/logout', [UserEvaluasiController::class, 'logout'])->name('logout');

// Middleware untuk masing-masing role
Route::middleware([RoleMiddleware::class . ':alumni'])->group(function () {
    Route::get('/dashboard/alumni', [UserEvaluasiController::class, 'alumni'])->name('dashboard.alumni');
    Route::get('/evaluasi/pertanyaanalumni', [EvaluasiAlumniController::class, 'index'])->name('evaluasi.formalumni');
    Route::post('/evaluasi/simpan-alumni', [EvaluasiAlumniController::class, 'store'])->name('evaluasi.simpanalumni');

    Route::get('/evaluasi/alumni/pertanyaan', [EvaluasiAlumniController::class, 'showPertanyaan'])->name('evaluasi.pertanyaanalumni');
    Route::post('/evaluasi/alumni/simpan-jawaban', [EvaluasiAlumniController::class, 'simpanJawaban'])->name('evaluasi.simpanjawaban');
});


Route::middleware([RoleMiddleware::class . ':atasan'])->group(function () {
    Route::get('/dashboard/atasan', [UserEvaluasiController::class, 'atasan'])->name('dashboard.atasan');
});

Route::middleware([RoleMiddleware::class . ':rekan'])->group(function () {
    Route::get('/dashboard/rekan', [UserEvaluasiController::class, 'rekan'])->name('dashboard.rekan');
});
