<?php
namespace App\Http\Services\Product;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryService{
    public function create($request){
        try {
            Category::create([
                'name' => (string) $request->input('name'),
            ]);
            Session::flash('success','Succeeded');
        } catch (\Exception $err) {
            Session::flash('error',$err->getMessage());
            return false;
        }

        return true;
    }

    public function getAllCategories(){
        return Product::query('select * from categories') -> get();
    }

}
?>