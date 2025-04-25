<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_jabatans extends Model
{
    use HasFactory;
    protected $table = 'ref_jabatans';

    protected $fillable = [
        'jabatan',
        'jenis_jabatan',
    ];

    public function pivotUser()
    {
        return $this->hasMany(PivotUser::class, 'ref_jabatan_id');
    }
}
