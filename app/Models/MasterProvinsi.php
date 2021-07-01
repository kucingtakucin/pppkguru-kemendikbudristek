<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MasterProvinsi extends Model
{
    protected $table = 'master_propinsi';
    protected $primaryKey = 'kode_wilayah';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
