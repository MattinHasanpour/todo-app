<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $todos = Post::paginate(10); // 10 آیتم در هر صفحه
        return view('todos.index', compact('todos')); // ارسال متغیر به ویو
    }
}
