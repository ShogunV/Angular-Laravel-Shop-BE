<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Stripe\{ Stripe, Charge, Customer };
use App\Product;
use App\Order;

class PurchaseController extends Controller
{
    public function purchase() {
        $cart = request('cart');
        $total = request('total');
        $user = JWTAuth::parseToken()->authenticate();
    
        $cartTotal = 0;
    
        $products = Product::all();
    
        for($i=0;$i<count($cart);$i++) {
            $a = round($products->where('id', $cart[$i]['id'])->pluck('price')[0] * (1 - $products->where('id', $cart[$i]['id'])->pluck('discount')[0]/100));
            $cartTotal += round($a * $cart[$i]['quantity']);
            $cartTotal = round($cartTotal);
        }
    
        if((int)$cartTotal === (int)$total) {
            Stripe::setApiKey(config('services.stripe.secret'));
            
            $customer = Customer::create([
                'email' => request('stripeEmail'),
                'source' => request('stripeToken')
            ]);
        
            Charge::create([
                'customer' => $customer->id,
                'amount' => $cartTotal,
                'currency' => 'eur'
            ]);
            
            // $cart['total'] = $cartTotal;
            $order = [                
                'total' => $cartTotal,
                'totalQuantity' => request('totalQuantity'),
                'products' => request('cart')
            ];
            $order = serialize($order);
            
            Order::create([
                'user_id' => $user->id, 
                'order' => $order
            ]);
    
            return response()->json(['message' => 'All done!!!']);
        }
    
        return response()->json(['error' => 'There was an error!!!'], 404);
    }
}
