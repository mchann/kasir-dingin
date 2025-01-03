<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('role');
<<<<<<< HEAD
            $table->string('email')->nullable()->unique();  // Menambahkan kolom email
            $table->string('password'); // Kolom password sudah ada, tetap biarkan dengan string
            $table->timestamps(); // Jika kamu ingin menambahkan waktu create_at dan update_at
=======
            $table->string('email')->nullable()->unique(); 
            $table->string('password'); 
            $table->timestamps(); 
>>>>>>> 510fcf1da4d4f354a1241ffe85f81e30205ce94c
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
