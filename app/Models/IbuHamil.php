<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    use HasFactory;

    protected $table = 'ibu_hamils'; // Menentukan nama tabel

    protected $fillable = [
        'nama_lengkap',
        'nama_suami',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
    ];

    public function periksaKehamilan()
    {
        return $this->hasMany(PeriksaKehamilan::class, 'ibu_hamil_id');
    }
}
