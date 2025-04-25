<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_unitkerjas extends Model
{
    use HasFactory;
    protected $table = 'ref_unitkerjas';

    protected $fillable = [
        'kode_unitkerja',
        'unitkerja',
        'sub_unitkerja',
        'singkatan',
    ];

    public function pivotUser()
    {
        return $this->hasMany(PivotUser::class, 'ref_unitkerja_id');
    }
}
