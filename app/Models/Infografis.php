<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infografis extends Model
{
    use SoftDeletes;

    protected $table = 'infografis';
    protected $fillable = [
        'judul',
        'deskripsi',
        'name_file',
        'category'
    ];
}
