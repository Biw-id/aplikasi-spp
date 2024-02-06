<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentdetail extends Model
{
    use HasFactory;

	public function orderdetail()
	{
		return $this->belongsTo('App\Models\Orderdetail');
	}
}
