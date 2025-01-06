<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')->orderBy('name', 'ASC')->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validated();

        if(Category::create($validatedData)) {
            return redirect()->route('categories.index')->with('status', __('Category :category added', ['category' => $validatedData['name']]));
        }
        return back()->with('error', 'Category creation failed');
    }

    public function show()
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }
}
