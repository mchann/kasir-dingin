<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c

class Pengguna extends Authenticatable
{
    use HasFactory;
<<<<<<< HEAD

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
=======
    
    public $timestamps = true;
    protected $table = 'pengguna';

    protected $fillable = ['username','email', 'role', 'password'];

    protected $hidden = ['password', 'remember_token']; // Tambahkan remember_token jika diperlukan
}
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c
