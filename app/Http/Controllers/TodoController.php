<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Todo; // ایمپورت مدل Todo
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    // نمایش لیست وظایف
    public function index()
    {
        $todos = Todo::paginate(8); // دریافت همه وظایف
        // dd($todos);
        return view('todos.index',compact('todos')); // ارسال داده‌ها به ویو
    }
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function completed(Todo $todo)
    {
        $todo->update([
            'Status'=> 1
        ]);
        return redirect()->route('todos')->with('success', 'Todo created successfully');
    }

    public function create()
    {
        $categories = Category::all(); // دریافت همه دسته‌بندی‌ها
        return view('todos.create', compact('categories')); // ارسال داده‌ها به ویو
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|min:3|max:16',
            'description' => 'required',
            'category' => 'required|integer',
        ]);

        $filename= time() . '_' . $request->image->getClientOriginalName();
        $request->image->storeAs('/images', $filename);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'image' => $filename,
        ]);
        return redirect()->route('todos')->with('success', 'Todo created successfully');
    }

    public function edit(Todo $todo)
    {       
        $categories = Category::all(); // دریافت همه دسته‌بندی‌ها
        return view('todos.edit', compact('todo','categories'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'title' => 'required|min:3|max:16',
            'description' => 'required',
            'category' => 'required|integer',
        ]);
        if($request->hasFile('image')){
            Storage::delete('/images/'.$todo->image);
            $filename= time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('/images', $filename);
        }

        $todo->update([
            'image' => $request->hasFile('image') ? $filename : $todo->image,
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
        ]);
        return redirect()->route('todos')->with('success', 'Todo created successfully');
    }
    public function destroy(Todo $todo)
    {  
        $todo->delete();     
        return redirect()->route('todos')->with('success', 'Todo created successfully');
    }
}