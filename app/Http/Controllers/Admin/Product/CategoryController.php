<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $categoryservices;

    public function __construct(CategoryService $categoryservices)
    {
        $this -> categoryservices = $categoryservices;
    }

    public function index(){
        return view('admin.category.index', [
            'title' => 'List Categories',
            'categories' => $this -> categoryservices -> getAllCategories()
        ]);
    }
}
