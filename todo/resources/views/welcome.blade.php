{{-- @extends('layout/layout') @section('content')
<div class="container d-flex align-items-center h-100">
    <div class="row justify-content-center">
        <h3 class="text-center">Welcome to Todo List</h3>
    </div>
</div>
@endsection --}} 
@extends('layout/layout') 
@section('content')
<div class="container">
    <div class="centered-container">
        <h1 class="">Welcome to Todo List</h1>
        <div class="text-center">
            <a href="/todos" class="btn btn-lg btn-primary">View Todo List</a>
            <a href="/create/todo" class="btn btn-lg btn-primary">Create New Todo</a>
        </div>    
    </div>
</div>
@endsection