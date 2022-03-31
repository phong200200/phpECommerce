<?php
namespace App\Http\Services;

use App\Models\Menu;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuServices{
    public function create($request){
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
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

    public function getParent(){
        return Product::where('parent_id', 0) -> get();
    }
    public function getAll(){
        return Product::orderbyDesc('id')->paginate(10);
    }
}
?>