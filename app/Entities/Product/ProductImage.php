<?php

namespace Loja\Entities\Product;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'products_images';

    protected $fillable = [
        'id',
        'id_product',
        'url'
    ];
}
