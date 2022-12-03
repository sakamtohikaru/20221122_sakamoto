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
        return view('index', ['todos' => $todos]);
    }

    public function create(TodoRequest $request)
    {
        $add = $request->all();
        Todo::create($add);
        return redirect('/');
    }
    
    public function update(TodoRequest $request)
    {
        $edit = $request->all();
        unset($edit['_token']);
        Todo::where('id', $request->id)->update($edit);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
