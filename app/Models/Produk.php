<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'harga_jual',
        'harga_dasar',
        'stok',
        'kategori_id',
    ];
    /**
     * Dapatkan kategori produk ini.
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_produk', 'id');
    }

}
