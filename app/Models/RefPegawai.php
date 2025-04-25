<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPegawai extends Model
{
    use HasFactory;

    protected $table = 'ref_pegawai';

    protected $fillable = [
        'nip',
        'foto',
        'alamat',
        'no_hp',
        'nip_atasan',
        'tempat_lahir',
        'tanggal_lahir',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nip', 'nip');
    }

    public function atasan()
    {
        return $this->belongsTo(User::class, 'nip_atasan', 'nip');
    }
}
