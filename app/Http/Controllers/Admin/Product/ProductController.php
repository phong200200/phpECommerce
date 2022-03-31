<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create(){
        return view('admin.menu.add',[
            'title' => 'Thêm Danh mục',
            'menus' => $this -> menuservice -> getParent()
        ]);
    }

    public function store(Request $request){
        $result = $this-> menuservice->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.menu.list', [
            'title'=> 'List Product',
            'menus'=> $this-> menuservice -> getAll()
        ]);
    }
}
