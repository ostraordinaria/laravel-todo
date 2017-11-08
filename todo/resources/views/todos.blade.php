@extends('layout/layout') 
@section('content')
<div class="col-sm-12 mt-3">
    <h3 class="bg-primary text-light py-2 px-4">Todo List</h3> 
    @foreach($todos as $todo)
    <div class="align-middle">
        <p class="px-4 mb-0 align-middle">{{$todo->todo}}<span class="float-right mr-1 mb-0 mt-0"><a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-sm btn-danger text-white"><span class="fa fa-trash"></span></a></span></p> {{--
        <div class="input-"></div> --}}
        <div class="clearfix"></div>
        <hr class="my-2">
    </div>
    @endforeach
</div>
@endsection {{-- @stop --}}