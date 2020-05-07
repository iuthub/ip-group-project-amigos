<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\MenuLunch;
class OrderController extends Controller
{
    public function index($id)
    {
        $menu = MenuLunch::findOrFail($id);
        return view('order.index', ['menu' => $menu]);
    }
}
