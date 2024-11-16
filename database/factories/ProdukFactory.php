<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kategori;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // 'nama_produk' => $this->faker->word(),
            // 'harga' => $this->faker->numberBetween(10000, 1000000), 
            // 'stok' => $this->faker->numberBetween(1, 100),
            // 'kategori_id' => Kategori::inRandomOrder()->first()->id,
        ];
    }
}
