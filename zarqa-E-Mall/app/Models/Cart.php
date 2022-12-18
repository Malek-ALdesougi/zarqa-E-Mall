<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // ?? not sure from this realtion
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
