<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // Ini biar semua kolom bisa diisi (kecuali id & timestamps)
    protected $guarded = []; 
    protected $fillable = [
    'name', 
    'slug', // <--- Jangan lupa ini!
    'description', 
    'price', 
    'stock', 
    'image'];
    
    public function preorder()
    {
        // HasOne: Mengambil 1 data PO terbaru
        return $this->hasOne(Preorder::class)->latest();
    }
}