<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
    {
        // $todo = Todo::findOrFail($id); // دریافت وظیفه با ID
        return view('todos.show'); // ارسال داده به ویو
    }
}
