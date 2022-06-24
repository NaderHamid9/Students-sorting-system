@extends('layout')

@section('content')

    <h1 class="mt-5">Edit Department</h1>
@foreach($department as $item)
    <form class="create-form" method="post" action="{{route('dep.update',$item->id)}}">
        @csrf
        @method('put')
        <input type="text" class="form-control w-75 d-inline"  placeholder="Department Name" name="department_name" value="{{$item->department_name}}">
        <button type="submit" class="btn btn-primary d-inline">Save</button>


    </form>
@endforeach
@endsection
