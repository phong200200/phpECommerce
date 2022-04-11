<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\CategoryService;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use GuzzleHttp\Psr7\Response;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productservices;
    protected $categoryservices;

    public function __construct(ProductService $productService, CategoryService $categoryservices)
    {
        $this -> productservices = $productService;
        $this -> categoryservices = $categoryservices;
    }
    public function create(){
        return view('admin.product.add',[
            'title' => 'Thêm Danh mục',
            'products' => $this -> productservices -> getAll(),
            'categories' => $this -> categoryservices -> getAllCategories()
        ]);
    }

    public function store(Request $request){
        $result = $this-> productservices->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.product.list', [
            'title'=> 'List Product',
            'products'=> $this-> productservices -> getAll(),
            'categories'=> $this -> categoryservices -> getAllCategories()
        ]);
    }

    public function delete(Request $request): JsonResponse{
        $result = $this -> productservices -> destroy($request);
        if($result == false){
            return Response() -> json([
                'error' => true,
            ]);
        }
        return Response() -> json([
            'error' => false,
            'message' => 'deleted'
        ]);
    }
    public function edit(Product $product){
        $_productId = $product -> getAttribute('id');
        return view('admin.product.edit', [
            'title'=> 'List Product',
            'product'=> $this-> productservices -> getProductById($product -> getAttribute('id'))[0],
            'categories'=> $this -> categoryservices -> getAllCategories()
        ]);
    }

}
