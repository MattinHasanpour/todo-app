<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =Category::all();

        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:20',
        ]);

        Category::create([
            'title' => $request->title,
        ]);

        // اضافه کردن پیام موفقیت به سشن
        return redirect()->route('category.create')->with('success', 'Category created successfully!');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        // ارسال پیام موفقیت به سشن
        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }

    public function update(Category $category, Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:20',
        ]);

        $category->update([
            'title' => $request->title,
        ]);

        // ارسال پارامتر category به روت category.edit
        return redirect()->route('category.edit', ['category' => $category->id])->with('success', 'Category updated successfully!');
    }
    
    
}
