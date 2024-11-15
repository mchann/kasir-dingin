<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 10 kategori
        Kategori::factory(10)->create();

        // Buat 10 produk dengan kategori acak
        Produk::factory(10)->create();
    }
}
