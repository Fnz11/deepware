<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_golongans extends Model
{
    use HasFactory;
    protected $table = 'ref_golongans'; // Pastikan tabel sesuai dengan database
    protected $fillable = [
       'kode_golongan',
       'jenis_asn',
       'golongan',
       'pangkat',
       'pangkat_golongan',
    ];

    public function pivotUser()
    {
        return $this->hasMany(PivotUser::class, 'ref_golongan_id');
    }
}
