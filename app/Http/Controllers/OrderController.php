<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\MenuLunch;
use App\User;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $menu = MenuLunch::findOrFail($id);
        return view('order.index', ['menu' => $menu]);
    }


    public function confirmOrder(Request $request)
    {
        $request->validate([
            'address' => 'required|min:8'
        ]);
        $food_num = $request->inputNumber;
        $food_id = $request->food_id;
        $user_id = $request->user_id;
        $address = $request->address;

        $food = MenuLunch::findOrFail($food_id);
        $user = User::findOrFail($user_id);

        $food_price = $food->food_price * $food_num;


        $user->address = $address;
        $user->save();
        Order::create([
            'food_type' => $food->food_name,
            'food_number' => $food_num,
            'food_price' => $food_price,
            'address' => $address,
            'user_id' => $user_id
        ]);

        return redirect()
                ->route('getMenu')
                ->with('msg', 'Order has been created!');

    }

    public function myOrders()
    {
        $orders = auth()->user()->orders;
        return view('order.myOrders', ['orders' => $orders]);
    }

    public function cancel($id)
    {
        
        $order = Order::findOrFail($id);
        if($order->user_id == auth()->user()->id)
        {
            $order->delete();
            return redirect()
                ->route('myOrders')
                ->with('msg', 'Order has been canceled successfully');
        } else {
            return redirect()
                ->route('myOrders')
                ->with('msg', 'Something went wrong');
        }
    }
}
