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
}
