<?php
namespace App\Http\Services\Product;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use JsonSerializable;

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
        try {
            return Category::orderbydesc('id')-> get();
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function getNameCateById($cate_id){
        try {
            $cate = DB::table('categories')
                        ->select('namecate')
                        ->where('id', '=', $cate_id)
                        ->limit(1)
                        ->get();
            return $cate;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
?>