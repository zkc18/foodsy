<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'food_id',
        'quantity',
        'price'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
