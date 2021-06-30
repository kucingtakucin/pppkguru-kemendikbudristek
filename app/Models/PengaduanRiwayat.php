<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengaduanRiwayat extends Model
{
    use SoftDeletes;

    protected $table = 'pengaduan_riwayat';
    protected $fillable = [
        'judul',
        'pengaduan_judul_id',
        'isi',
        'who',
        'user_id',
    ];

    public function pengaduan_judul()
    {
        return $this->belongsTo(PengaduanJudul::class, 'pengaduan_judul_id');
    }
}
