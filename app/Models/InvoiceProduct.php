<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'purchase',
        'product_id',
        'invoice_id',
        'qty',
        'description',
        'price',
        'total_price',
    ];
}
