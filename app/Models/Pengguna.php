<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;
    
    public $timestamps = true;
    protected $table = 'pengguna';

    protected $fillable = ['username','email', 'role', 'password'];

    protected $hidden = ['password', 'remember_token']; // Tambahkan remember_token jika diperlukan
}
