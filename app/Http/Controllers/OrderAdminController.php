<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\DB;


class OrderAdminController extends Controller
{
    public function index()
    {
        $users = User::where('type', 'user')->paginate(8);
        $orders = DB::table('orders')->paginate(8);
        
        return view('admin.order.index', [
            'users' => $users,
            'orders' => $orders
        ]);
    }

    public function delivered($id)
    {
        $order = Order::findOrFail($id);
        $order->recived = true;
        $order->save();

        return redirect()
                ->route('adminOrderPage')
                ->with('msg', 'Order has been delivered');
    }

    public function cancel($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()
                ->route('adminOrderPage')
                ->with('msg', 'Order has been deleted');
    }
}
