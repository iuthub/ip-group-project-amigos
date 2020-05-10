<?php

namespace App\Http\Controllers;

use App\Category;
use App\MenuLunch;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function __construct()
  {
      $this->middleware('isAdmin');
      $this->middleware('auth');
  }

  public function index()
  {
    $categories = \DB::table('categories')->paginate(8);
    return view('admin.category.allCategories', ['categories' => $categories]);
  }
    
  public function create()
  {
      return view('admin.category.createCategory');
  }


  public function store(Request $request)
  {
    $validated = $request ->validate([
      'categoryName' => 'required|min:5'
    ]);

    Category::create($validated);

    return redirect()
              ->route('allCategories')
              ->with('msg', 'Category has been created successfully');
  }


  public function edit($id)
  {
    $category = Category::findOrFail($id);
    return view('admin.category.editCategory', ['category' => $category]);
  }

  public function update(Request $request, $id)
  {
    $category = Category::findOrFail($id);

    $validated = $request ->validate([
      'categoryName' => 'required|min:5'
    ]);
    
    $category->update($validated);

    return redirect()
          ->route('allCategories')
          ->with('msg', 'Category has been updated successfully');

  }

  public function delete($id)
  {
    $category = Category::findOrFail($id);

    $category->delete();

    return redirect()
          ->route('allCategories')
          ->with('msg', 'Category has been deleted successfully');
  }


  public function categoryMenu($id)
  {
    $menues = MenuLunch::where('category_id', $id)->paginate(4);
    
    return view('admin.category.categoryMenu', ['menues' => $menues]);
  }
    
}
