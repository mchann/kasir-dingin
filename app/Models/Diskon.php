<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskon';

    protected $fillable = [
        'nama_diskon',
        'persentase',
        'tgl_mulai',
        'tgl_akhir',
    ];
}
