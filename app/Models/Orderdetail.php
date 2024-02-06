<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;

    public function user()
    {
        // order detail ini hanya memiliki satu user
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produk()
    {
        // order detail ini hanya memiliki satu produk
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function payment()
    {
        // order detail ini hanya memiliki satu payment
        return $this->belongsTo(Paymentdetail::class, 'payment_id');
    }
}
