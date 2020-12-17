<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Auth;
use Sum;
use App\Models\Order;
use App\Http\Controllers\CartController;
class StripeController extends Controller
{
    public function stripe(){
       // Enter Your Stripe Secret
       \Stripe\Stripe::setApiKey('sk_test_51HyoEgDgfPrOKCH7SM0SPN5i03GlhUm9jE2oiepnfhNJZmhWuhXfvbeJfggxDRezlHwHB3sowe8zF2VH2ahJT8fi004u8MANkM');
        //$subtotal=(Cart::getSubTotal());
         $amount =(Cart::getSubTotal());
         $amount *= 1000;
         $amount = (int) $amount;


         $payment_intent = \Stripe\PaymentIntent::create([
           'description' => 'Stripe Test Payment',
           'amount' => $amount,
           'currency' => 'COP',//cambiar la moneda
           'description' => 'Payment From Codehunger',
           'payment_method_types' => ['card'],
           // 'customer'=>$customer->id,
        ]);
       $intent = $payment_intent->client_secret;
       Cart::clear();
       return view('productos.confirmar',compact('intent'));


   }

   public function pay()
   {
       return redirect('/productos');
   }
}
