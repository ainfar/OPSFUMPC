<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table ='product';
    public $primaryKey = 'productID';
    public $fillable = [
        'productName', 
        'product_qty', 
        'productImage', 
        'productPrice',
    ];
}
