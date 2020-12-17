<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Statu;
use App\Models\WayToPay;
use App\Models\Domiciliary;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Models\StatuOrder;
use DB;
use Cart;
Use Auth;
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
        return view('productos.carrito',[
        'way_to_pay'=>WayToPay::all()])->with($params);
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
   public function procesopedido(Request $request){

        if(Cart::getContent()->count()>0):
            $order= new Order();
            echo (Cart::getSubTotal());
            $order->id= time();
            $order->order_price=(Cart::getSubTotal());
            $order->order_date=date('d-m-Y');
            $order->order_delivery=date('d-m-Y');
            $order->order_quantity=(count(Cart::getContent()));
            $order->order_address=$request->get('direccion');
            $order->domiciliary_document=Domiciliary::first()->domiciliary_document;
            $order->customer_document= Auth::user()->documento;
            $order->way_id=$request->get('medio');

            DB::select("SELECT AddOrders('$order->id',' $order->order_date',
            '$order->order_delivery','$order->order_quantity',
            '$order->order_address','$order->order_price',
            '$order->customer_document',
            '$order->domiciliary_document',
            '$order->way_id')");

           foreach(Cart::getContent() as $product):
                $orderproduct = new  OrderProduct();
                $orderproduct->id= time();
                $orderproduct->product_id  = $product->id;
                $orderproduct->order_id = $order->id;
                DB::select("SELECT AddProductOrders('$orderproduct->id',
                '$orderproduct->order_id','$orderproduct->product_id ')");
            endforeach;
          foreach(Cart::getContent() as $statu):
                $statuorder = new  StatuOrder();
                $statuorder->id= time();
                $statuorder->status_id =1;
                $statuorder->order_id = $order->id;
                DB::select("SELECT AddStatusOrder('$statuorder->id','$statuorder->order_id','$statuorder->status_id')");
            endforeach;
           //Cart::clear();
            return redirect("/pago");
        else:
            return redirect ('/cart-checkout');
        endif;
    }
    }
