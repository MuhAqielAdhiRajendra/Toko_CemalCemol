<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    // --- TAMBAHKAN INI YA WOK ---
    // Ini jembatan biar OrderItem kenal sama Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}