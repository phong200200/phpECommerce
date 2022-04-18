<?php
namespace App\Http\Services\Product;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductService{
    public function create($request){
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'category_id' => (int) $request->input('parent_id'),
                'description'=> (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active'),
            ]);
            Session::flash('success','Succeeded');
        } catch (\Exception $err) {
            Session::flash('error',$err->getMessage());
            return false;
        }

        return true;
    }
    public function putProduct(Request $request){
        $product = $this -> getProductById($request -> input()['id']);
        if($product != null){
            return Product::updated($request -> input());
        }else{
            $this -> create($request);
        }
    }


    public function GetNewestProductWithSpecificQty($qty){
        $product = DB::table('products') -> orderByDesc('created_at') -> limit($qty)-> get();
        if($product == null){
            return null;
        }
        return $product;
    }

    public function getByParent($parentId){
        return Product::where('category_id', $parentId) -> get();
    }
    public function getAll(){
        return DB::table('products')-> orderBy('id') ->paginate(15);
    }

    public function getProductById($id){
        $product = DB::table('products')
                        ->where('id', '=', $id) -> first();
        if($product == null){
            return null;
        }
        return $product;
    }

    public function destroy($request){
        $_id = $request -> input('id');
        $product = Product::where('id', $_id) -> first();
        if($product){
            return Product::where('id', $_id) -> delete();
        }
        return false;
    }
}
