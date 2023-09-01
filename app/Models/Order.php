<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table ='orders';
    public $primaryKey = 'orderID';
    public $fillable = [
        'matricID',
        'productName',
        'productPrice',
        'file',
        'pickupDate',
        'quantity',
        'pickupLocation',
        'totalPrice',
        'payment_status',
        'delivery_status',
    ];
}
