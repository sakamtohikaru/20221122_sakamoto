<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => '$todos']);
    }

    public function create(TodoRequest $request)
    {
        $add = $request->all();
        Todo::create($add);
        return redirect('/');
    }
}
