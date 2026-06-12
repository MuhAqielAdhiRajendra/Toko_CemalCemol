<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Daftar kolom yang BOLEH diisi secara massal (Mass Assignment)
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'badge', // <--- Jangan lupa ini biar labelnya bisa kesimpen
    ];
}