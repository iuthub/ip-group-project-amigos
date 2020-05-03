<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function create()
    {
        return view('admin/category/createCategory');
    }

    


    public function store(Request $request)
    {
      $validated = $request ->validate([
      	'categoryName' => 'required|min:5'
      ]);
      Category::create($validated);
      return view('main.index')->with('msg', 'Category has been created successfully');
    }

    
}
