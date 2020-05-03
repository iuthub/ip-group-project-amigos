<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\MenuLunch;

class LunchMenusController extends Controller
{ 
	public function getAdminLunch(){
		return view('admin.menu',[
			'lunches' => MenuLunch::all()
		]);
	}

    public function getUserLunch(){
        return view('menu.menu',[
            'lunches' => MenuLunch::all()
        ]);
    }

    public function postCreateLunch(Request $req) {
        $lunch = new MenuLunch([
        	'food_name' => $req->input('lunch_name'),
        	'food_price' => $req->input('lunch_price'),
        	'food_description' => $req->input('lunch_description')
        ]);

        $lunch->save();
        return redirect()->route('adminGetMenu');
    }
}
