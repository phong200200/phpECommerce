<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Product\CategoryService;

class IndexController extends Controller
{

    protected $productservices;
    protected $categoryservices;

    public function __construct(ProductService $productService, CategoryService $categoryservices)
    {
        $this -> productservices = $productService;
        $this -> categoryservices = $categoryservices;
    }

    public function index(){

        return view('base.index', [
            'title' => 'Index',
            'products' => $this -> productservices -> getAll(),
            'categories' => $this -> categoryservices -> getAllCategories()
        ]);
    }
}
