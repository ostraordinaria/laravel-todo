@extends('layout/layout') @section('content')
<div class="container-fluid">
<div class="col-sm-12 mt-3">
    <h3 class="bg-primary text-light py-2 px-4">Todo List</h3> @foreach($todos as $todo)
    <div class="align-middle">
        <p class="px-4 mb-0 align-middle">{{$todo->todo}}<span class="float-right mr-3 mb-0 mt-0">{{$todo->created_at}}</span></p> {{--
        <div class="input-"></div> --}}
        <div class="clearfix"></div>
        <hr class="my-2">
    </div>
    @endforeach
</div>
</div>
@endsection {{-- @stop --}}