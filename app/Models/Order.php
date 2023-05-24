<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Order extends Model
{
    use HasFactory;
    use Notifiable;

    
    protected $table = 'orders';
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
        'user_id',
        'payment_status',
        'delivery_status'
    ];
}
