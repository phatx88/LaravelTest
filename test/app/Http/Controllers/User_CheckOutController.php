<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Province;
use App\Models\Transport;

use App\Models\OrderItem;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
session_start();
class User_CheckOutController extends Controller
{
    public function index() {
        $province = Province::orderby('id', 'ASC')->get();

        if (Auth::check()) {
            $user = Auth::user();
            return view('pages.checkout' , ['user' => $user])->with(compact('province'));
        }

        return view('pages.checkout')->with(compact('province'));
    }

    public function check_out_shopping(Request $request){
        $data = $request->all();
        $shipping_fee = 0;
        $transport = Transport::where('province_id', $data['pronvince'])->get();
        foreach($transport as $key => $val){
             $shipping_fee = $val->price;
        }
        if(Auth::check()) {
            $customer_id = Auth::user()->id;
            $order = new Order();
            $order->customer_id = $customer_id;
            $order->shipping_fullname = $data['user_name'];
            $order->shipping_email = $data['user_email'];
            $order->shipping_mobile = $data['user_mobile'];
            $order->payment_method = $data['pay_method_checkout'];
            $order->coupon_id = $data['coupon_id'];
            $order->shipping_housenumber_street = $data['user_street_address'];
            $order->shipping_ward_id = $data['ward'];
            $order->shipping_fee = $shipping_fee;
            $order->save();
         }else{
            $order = new Order();
            $order->shipping_fullname = $data['user_name'];
            $order->shipping_email = $data['user_email'];
            $order->shipping_mobile = $data['user_mobile'];
            $order->payment_method = $data['pay_method_checkout'];
            $order->coupon_id = $data['coupon_id'];
            $order->shipping_housenumber_street = $data['user_street_address'];
            $order->shipping_ward_id = $data['ward'];
            $order->shipping_fee = $shipping_fee;
            $order->save();
          }
        $order_id =  $order->id;
         foreach(Session('cart') as $key => $cart){
            $order_details = new OrderItem();
            $order_details->product_id = $cart['product_id'];
            $order_details->order_id = $order_id;
            $order_details->qty = $cart['product_quantity'];
            $order_details->unit_price = $cart['product_price'];
            $order_details->total_price = $cart['product_quantity'] * $cart['product_price'];
            $order_details->save();
         }

        Session::forget('cart');
        Session::forget('coupon');
        Session::forget('fee');
        Session::forget('subtotal');

    }
}

