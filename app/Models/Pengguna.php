<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengguna extends Authenticatable
{
    use HasFactory;

    public $timestamps = true; // Jika Anda menggunakan timestamps
    protected $table = 'pengguna'; // Nama tabel

    protected $fillable = ['username', 'email', 'role', 'password'];

    protected $hidden = ['password', 'remember_token']; // Menyembunyikan password dan remember_token

    // Relasi dengan transaksi
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'id_pengguna', 'id');
    }
}