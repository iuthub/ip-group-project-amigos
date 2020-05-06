<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\MenuLunch;
use App\Category;
class LunchMenusController extends Controller
{ 
	public function getAdminLunch(){
		return view('admin.menu',[
            'menues' => MenuLunch::all(),
		]);
	}

    public function getUserLunch(){
        return view('menu.menu',[
            'menues' => MenuLunch::all()
        ]);
    }

    public function postCreateLunch(Request $request) {

        $validated = $request->validate([
            'food_name' => 'required',
            'food_description' => 'required|min:8',
            'food_price' => 'required',
            'category_id' => 'required',
            'food_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->food_image != null){
            $imageName = time().'.'.request()->food_image->getClientOriginalExtension();
            request()->food_image->move(public_path('food_image'), $imageName);
            MenuLunch::create([
                'food_name' => $request->food_name,
                'food_description' => $request->food_description,
                'food_price' => $request->food_price,
                'food_image' => $imageName,
                'category_id' => $request->category_id
            ]);
        }

        else{
            MenuLunch::create($validated);
        }


        return redirect()
                ->route('adminGetMenu')
                ->with('msg', 'Item has been added to menu successfully');
    }

    public function create()
    {
        return view('admin.menu.createMenu',[
            'categories' => Category::all()
		]);
    }
}
