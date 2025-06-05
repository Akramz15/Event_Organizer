<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestStar extends Model
{
    protected $fillable = [
        'nama_band_artis',
        'deskripsi',
        'anggota_band',
        'instagram',
        'twitter',
        'youtube',
        'foto',
    ];
}
