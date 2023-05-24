<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'product_title',
        'product_quantity',
        'product_price',
        'product_image',
        'product_id',
        'user_id'
    ];
}
