<?php
// use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
// namespace App\Http\Controllers\User;
// use Illuminate\Support\Facades\Input;

use App\MenuLunch;
use App\Category;
class LunchMenusController extends Controller
{ 
    public function getAdminLunch()
    {

        $menues = \DB::table('menu_lunches')->paginate(3);
		return view('admin.menu',[
            'menues' => $menues,
		]);
	}

    public function getUserLunch()
    {
        $menues = \DB::table('menu_lunches')->paginate(3);
        return view('menu.menu',[
            'menues' => $menues
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

            //generate unique name for an image and upload it
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

    public function delete($id)
    {
        $menu = MenuLunch::FindOrFail($id);
        if(\File::exists('food_image/' .$menu->food_image))
        {
            //Delete the picture of the menu
            unlink('food_image/' .$menu->food_image);
        }
        $menu->delete();

        return redirect()
                ->route('adminGetMenu')
                ->with('msg', 'Item has been deleted successfully');
    }


    public function edit($id)
    {
        $categories = Category::all();
        $menu = MenuLunch::FindOrFail($id);
        $myCategory = Category::findOrFail($menu->category_id);
        return view('admin.menu.editMenu', [
            'menu' => $menu,
            'categories' => $categories,
            'myCategory' => $myCategory
        ]);
    }

    public function update(Request $request, $id)
    {
        $menu = MenuLunch::FindOrFail($id);

        //Validate input from user
        $validated = $request->validate([
            'food_name' => 'required',
            'food_description' => 'required|min:7',
            'food_price' => 'required',
            'category_id' => 'required',
            'food_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if(\File::exists($request->food_image))
        {
            if(\File::exists('food_image/' .$menu->food_image))
                //If there is a new image delete the old one
                unlink('food_image/' .$menu->food_image);

            //Get unique name for a image and upload it.
            $imageName = time().'.'.request()->food_image->getClientOriginalExtension();
            request()->food_image->move(public_path('food_image'), $imageName);

            //Update menu properties
            $menu->update([
                'food_name' => $request->food_name,
                'food_description' => $request->food_description,
                'food_price' => $request->food_price,
                'food_image' => $imageName,
                'category_id' => $request->category_id
            ]);  
        } else {
            //Update menu properties
            $menu->update($validated);
        }

        return redirect()
                ->route('adminGetMenu')
                ->with('msg', 'Item has edited successfully');

    }

   

        public function userSearch(Request $request)
    {
        $search_item = isset($_GET['search_item']) ? $_GET['search_item'] : null;
        $menus = \DB::table('menu_lunches');
        $menus->where('menu_lunches.food_name', 'LIKE', '%' .$search_item. '%', );
        $menus = $menus->get();
        return view('menu.found_items', compact('menus'));
    }


}
