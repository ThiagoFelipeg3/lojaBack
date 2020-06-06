<?php

namespace Loja\Repository\Product;

use Loja\Entities\Product\Product;

class ProductRepository
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;        
    }

    public function getAll()
    {
        return $this->product->with(Product::$_with)->get();
    }


}
