<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productservices;

    public function __construct(ProductService $productService)
    {
        $this -> productservices = $productService;
    }
    public function create(){
        return view('admin.menu.add',[
            'title' => 'Thêm Danh mục',
            'products' => $this -> productservices -> getAll()
        ]);
    }

    public function store(Request $request){
        $result = $this-> productservices->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.menu.list', [
            'title'=> 'List Product',
            'products'=> $this-> productservices -> getAll()
        ]);
    }
}
