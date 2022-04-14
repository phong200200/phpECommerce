<?php
namespace App\BusinessHelper;
class CartHelper{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart)
    {
        if($cart){
            $this -> products = $cart -> products;
            $this -> totalPrice = $cart -> totalPrice;
            $this -> totalQuantity = $cart -> totalQuantity;
        }
    }

    public function AddCart($product, $id){
        $newProduct = ['quantity' => 0, 'price' => $product -> price, 'productInfo' => $product];
        if($this -> products){
            if(array_key_exists($id, $product)){
                $newProduct = $product[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product -> price;
        $this -> products[$id] = $newProduct;
        $this -> totalPrice += $product -> price;
        $this -> totalQuantity ++;
    }
}