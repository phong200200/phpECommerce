<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $_productService;
    public function __construct(ProductService $productService)
    {
        $this -> _productService = $productService;
    }
    public function addtocart($id){
        dd($this -> _productService -> getProductById($id));
    }

}
