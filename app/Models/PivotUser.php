<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotUser extends Model
{
    use HasFactory;

    protected $table = 'pivot_user';
    protected $fillable = [
        'nip', 'ref_unitkerja_id', 'ref_jabatan_id', 'ref_golongan_id',
        'tgl_mulai', 'tgl_akhir', 'is_unitkerja', 'is_jabatan', 'is_golongan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nip');
    }

    public function unitkerja()
    {
        return $this->belongsTo(ref_unitkerjas::class, 'ref_unitkerja_id');
    }

    public function jabatan()
    {
        return $this->belongsTo(ref_jabatans::class, 'ref_jabatan_id');
    }

    public function golongan()
    {
        return $this->belongsTo(ref_golongans::class, 'ref_golongan_id');
    }
}
