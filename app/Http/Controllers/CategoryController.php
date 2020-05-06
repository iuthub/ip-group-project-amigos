<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index()
  {
    $category = Category::all();
    return view('admin.category.allCategories', ['category' => $category]);
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

    
}
