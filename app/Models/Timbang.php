<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timbang extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'tanggal_timbang',
        'usia',
        'tinggi_badan',
        'berat_badan',
        'keterangan',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
