<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

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
