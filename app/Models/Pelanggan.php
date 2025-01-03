<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan'; // Pastikan tabel ini sesuai dengan database
    protected $primaryKey = 'id'; // Kolom primary key dari tabel

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'pelanggan_id', 'id');
    }
}
