<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();
    	return view('todos')->with('todos', $todos);
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	// dd($request->all());
    	$todo = new Todo;

    	$todo->todo = $request->todo;
    	$todo->save();

    	return redirect('/todos');
    }
}
