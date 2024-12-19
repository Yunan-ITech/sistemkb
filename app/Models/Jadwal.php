<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaPasien',
        'jenisSuntik',
        'jadwal',
        'tanggalSuntik',
        'tanggalPengingat',
        'metodePengingat',
        'tanggalSuntikBerikutnya'
    ];
}
