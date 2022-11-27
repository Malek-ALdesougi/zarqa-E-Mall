<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'image',
        'tag',
        'description'
    ];


    public function stores(){
        return $this->belongsTo(Store::class);
    }


    public function carts(){
        return $this->belongsTo(Cart::class);
    }


    public function orderDetails(){
        return $this->belongsTo(OrderDetail::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
