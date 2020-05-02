<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\MenuLunch;

class LunchMenusController extends Controller
{ 
	public function getLunch(){
		return view('admin.menu',[
			'lunches' => MenuLunch::all()
		]);
	}

    public function postCreateLunch(Request $req) {
        $lunch = new MenuLunch([
        	'lunch_name' => $req->input('lunch_name'),
        	'lunch_price' => $req->input('lunch_price'),
        	'lunch_description' => $req->input('lunch_description')
        ]);

        $lunch->save();
        return redirect()->route('adminGetMenu');
    }
}
