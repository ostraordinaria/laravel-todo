@extends('layout/layout') 
@section('content')
<div class="container">
    <div class="centered-container col-sm-8">
        <form action="/create/todo" method="post">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="todo">Todo</label>
                <input type="text" name="todo" class="form-control" id="todo" placeholder="Enter new todo">
            </div>
            <input type="submit" class="btn btn-primary" value="Create new todo">
        </form>
    </div>
</div>
@endsection