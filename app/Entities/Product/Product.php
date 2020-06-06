<?php

namespace Loja\Entities\Product;

use Illuminate\Database\Eloquent\Model;
use Loja\Entities\Brand\Brand;
use Loja\Entities\Categorie\Categorie;

class Product extends Model
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

    public static $_with = [
        'categorie',
        'brand'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_category');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }
}
