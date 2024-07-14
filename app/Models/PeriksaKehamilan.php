<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaKehamilan extends Model
{
    use HasFactory;

    protected $table = 'periksa_kehamilans'; // Menentukan nama tabel

    protected $fillable = [
        'ibu_hamil_id',
        'tanggal_periksa',
        'tinggi_badan',
        'berat_badan',
        'tensi_darah',
        'keterangan',
    ];

    public function ibuHamil()
    {
        return $this->belongsTo(IbuHamil::class, 'ibu_hamil_id');
    }
}
