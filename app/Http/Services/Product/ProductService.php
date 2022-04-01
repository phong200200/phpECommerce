<?php
namespace App\Http\Services\Product;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductService{
    public function create($request){
        try {
            if($this -> getProductById($request -> input() -> id) == null ){
                Product::create([
                    'name' => (string) $request->input('name'),
                    'parent_id' => (int) $request->input('parent_id'),
                    'description'=> (string) $request->input('description'),
                    'content' => (string) $request->input('content'),
                    'active' => (string) $request->input('active'),
                ]);
            }else{
                $this -> putProduct($request);
            }
            
            Session::flash('success','Succeeded');
        } catch (\Exception $err) {
            Session::flash('error',$err->getMessage());
            return false;
        }

        return true;
    }
    public function putProduct(Request $request){
        $product = $this -> getProductById($request -> input() -> id);
        if($product != null){
            return Product::updated($request -> input());
        }else{
            $this -> create($request);
        }
    }

    public function getByParent($parentId){
        return Product::where('parent_id', $parentId) -> get();
    }
    public function getAll(){
        return Product::orderbyDesc('id')->paginate(10);
    }

    public function getProductById($id){
        $product = Product::Where('id', $id);
        if($product == null){
            return null;
        }
        return $product;
    }

    
}
?>