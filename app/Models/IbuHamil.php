<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'nama_suami',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
    ];
}
