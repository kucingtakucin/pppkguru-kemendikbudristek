<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengaduanJudul extends Model
{
    use SoftDeletes;

    protected $table = 'pengaduan_judul';
    protected $fillable = [
        'tiket',
        'judul',
        'nama',
        'email',
        'no_hp',
        'asal_provinsi',
        'asal_kabupaten_kota',
        'status',
    ];

    public function pengaduan_riwayat()
    {
        return $this->hasMany(PengaduanRiwayat::class);
    }
}
