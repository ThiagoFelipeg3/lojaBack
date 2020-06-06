<?php

namespace Loja\Entities\Products;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 
        'description', 
        'stock', 
        'price', 
        'price_from', 
        'rating', 
        'featured', 
        'sale', 
        'bestseller', 
        'new_product', 
        'options'
    ];
}

