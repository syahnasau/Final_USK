<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'price',
        'quantity',
        'status',
        'order_id'
    ];

    public function Wallet(){
        return $this->hasOne(Wallet::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
