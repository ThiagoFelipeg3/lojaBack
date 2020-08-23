<?php

namespace Loja\Repository\Product;

use Loja\Entities\Product\Product;
use Loja\Repository\BaseRepository;

class ProductRepository extends BaseRepository
{
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function getAllProducts()
    {
        return $this->getAllAndYourRelationships();
    }

}
