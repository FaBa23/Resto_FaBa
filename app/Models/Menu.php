<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Tentukan kolom mana yang bisa diisi secara massal
    protected $fillable = [
        'category',
        'name',
        'description',
        'price',
        'is_top_pick',
    ];
}