<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function add(Request $request){
        $product=Product::find($request->product_id);
        Cart::add(
            $product->id,
            $product->product_name,
            $product->product_price,
            1,
            array("product_photo"=>$product->product_photo)
        );
        return back()->with('success',"$product->product_name ¡Se ha agregado al carrito de compra!");
    }
    public function cart(){
        $params=[
            'tittle'=>'Mirar Carrito',
        ];
        return view('productos.carrito')->with($params);
    }
    public function clear(){
        Cart::clear();
        return back()->with('success',"Se ha vaciado el carrito de compra.");
    }
    public function removeitem(Request $request){
        //$produt=Product::where('id', $request->id)->firstOrFail();
        Cart::remove([
            'id'=>$request->id,
        ]);
        return back()->with('success', "Producto eliminado con exito del carrito.");
    }
}
