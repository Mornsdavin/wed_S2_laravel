<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'imgid';
    protected $fillable=[
        'product_id',
        'color_name',
        'product_img',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

