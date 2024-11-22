<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    public $timestamps = false;

    protected $fillable = [
        'nama_kategori',
    ];

//  relasi dengan produk
    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'kategori_id', 'id');
    }
}
