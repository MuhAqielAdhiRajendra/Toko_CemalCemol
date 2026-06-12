<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preorder extends Model
{
    use HasFactory;
    
    // Kalau nama tabelmu beneran 'preorder' (tanpa s), uncomment baris bawah ini:
    // protected $table = 'preorder'; 

    protected $fillable = ['product_id', 'start_date', 'end_date', 'delivery_date', 'quota'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}