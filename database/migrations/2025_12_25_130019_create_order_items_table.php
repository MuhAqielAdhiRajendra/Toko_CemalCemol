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
    Schema::create('order_items', function (Blueprint $table) {
        $table->id();
        // Hubungkan ke tabel orders
        $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
        // Hubungkan ke tabel products
        $table->foreignId('product_id')->constrained('products');
        $table->integer('quantity');
        
        $table->integer('price'); // Harga saat beli (penting, jaga2 kalau harga asli naik)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
