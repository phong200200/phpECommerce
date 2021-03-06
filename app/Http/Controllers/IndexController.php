<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Product\CategoryService;
use Illuminate\Contracts\Session\Session;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

class IndexController extends Controller
{

    protected $productservices;
    protected $categoryservices;
    public $currentCate = 0;
    public function __construct(ProductService $productService, CategoryService $categoryservices)
    {
        $this -> productservices = $productService;
        $this -> categoryservices = $categoryservices;
    }

    public function index(){
        return view('base.index', [
            'thisCate' => null,
            'title' => 'Index',
            'products' => $this -> productservices -> getAll(),
            'categories' => $this -> categoryservices -> getAllCategories(),
            'currentcate' => $this -> currentCate,
            'newcart' => Session('cart')
        ]);
    }

    public function changecate($cateid){
        $this -> currentCate = $cateid;
        return view('base.index', [
            'thisCate' => $this -> categoryservices -> getNameCateById($this -> currentCate)[0],
            'title' => 'Index',
            'products' => $this -> productservices -> getByParent($cateid),
            'categories' => $this -> categoryservices -> getAllCategories(),
            'currentcate' => $cateid,
            'newcart' => Session('cart')
        ]);
    }
}
