<?php

namespace App\Http\Controllers\Products;

use App\BusinessHelper\CartHelper;
use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Location;

class CartController extends Controller
{
    public $_productService;
    public $request;
    public function __construct(ProductService $productService)
    {
        $this -> _productService = $productService;
    }

    public function index(){
        return view('shopping.checkout', [
            'title' => 'Checkout',
            'newcart' => Session('cart')
        ]);
    }

    public function postFromCheckout(Request $request){
        dd($request);
    }
    public function addtocart(Request $request, $id){
        $product = $this -> _productService -> getProductById($id);
        if($product != null){
            $oldcart = Session('cart') ? Session('cart') : null;
            $newcart = new CartHelper($oldcart);
            $newcart -> AddCart($product, $id);
            $request -> session() -> put('cart', $newcart);
        }
        return view('shopping.cart', [
            'newcart' => $newcart
        ]);
    }

    public function deleteSession(Request $request){
        $request -> session() -> forget('cart');
        return view('shopping.cart',[
            'newcart' => Session('cart')
        ]);
    }

    public function deleteCartItem(Request $request, $id){
        $oldcart = Session('cart') ? Session('cart') : null;
        $newcart = new CartHelper($oldcart);
        $newcart -> deleteCartItem($id);

        if(count($newcart -> products) > 0){
            $request->session()->put('cart', $newcart);
        }else{
            $request->session()->forget('cart');
        }
        return view('shopping.cart',[
            'newcart' => Session('cart')
        ]);
    }

    public function delelefromcheckout(Request $request, $id){
        $oldcart = Session('cart') ? Session('cart') : null;
        $newcart = new CartHelper($oldcart);
        $newcart -> deleteCartItem($id);

        if(count($newcart -> products) > 0){
            $request->session()->put('cart', $newcart);
        }else{
            $request->session()->forget('cart');
        }
        return view('shopping.checkout',[
            'newcart' => Session('cart')
        ]);
    }
}
