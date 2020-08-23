<?php

namespace Loja\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Loja\Http\Controllers\Controller;
use Loja\Repository\Product\ProductRepository;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAllProducts();
    }

    public function getImage($image)
    {
        return Storage::get("public/products/$image");
    }
}
