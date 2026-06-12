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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');             // Nama Barang
        $table->string('slug')->unique();   // Buat link (misal: baju-keren)
        $table->text('description');        // Deskripsi panjang
        $table->integer('price');           // Harga
        $table->integer('stock');           // Stok barang
        $table->string('image')->nullable();// Foto barang (boleh kosong dulu)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
