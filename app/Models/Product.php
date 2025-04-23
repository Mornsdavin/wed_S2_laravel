<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_code',
        'product_name',
        'battery',
        'storage',
        'display',
        'ram',
        'processor',
        'camera',
        'warranty',
        'price',

    ];
    public function product_image(){
        return $this->hasMany(ProductImage::class);
    }
    public function invoices(){
        return $this->belongsToMany(Invoice::class);
    }
}
