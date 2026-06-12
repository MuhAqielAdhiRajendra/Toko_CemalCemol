<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    
    // Izinkan semua kolom diisi
    protected $guarded = [];

    // 1 Order punya banyak Items
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}