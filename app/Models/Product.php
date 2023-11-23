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
        'stock',
        'photo',
        'description'
    ];

    public function Transaction(){
        return $this->hasMany(Transaction::class);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
