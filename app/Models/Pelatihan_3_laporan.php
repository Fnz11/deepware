<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelatihan_3_laporan extends Model
{
    use HasFactory;

    protected $table = 'pelatihan_3_laporans';

    protected $fillable = [
        'id_registrasi',
        'judul_laporan',
        'latar_belakang',
        'laporan_pelatihan',
        'sertifikat',
        'total_biaya',
        'status',
    ];

    // Relasi ke tabel pelatihan_2_registers
    public function registrasi()
    {
        return $this->belongsTo(Pelatihan_2_usulan::class, 'id_registrasi');
    }
}
