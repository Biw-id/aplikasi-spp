<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'kategori_id',
        'harga'
    ];

    public function kategori()
    {
        // produk ini hanya memiliki satu kategori
        return $this->belongsTo(Kategori::class);
    }
}
