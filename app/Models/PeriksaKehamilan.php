<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriksaKehamilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'ibu_hamil_id',
        'tanggal_periksa',
        'tinggi_badan',
        'berat_badan',
        'tensi_darah',
        'vitamin',
        'keterangan',
    ];

    public function ibuHamil()
    {
        return $this->belongsTo(IbuHamil::class);
    }
}
