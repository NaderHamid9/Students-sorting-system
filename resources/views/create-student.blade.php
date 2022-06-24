@extends('layout')

@section('content')

<h1 class="mt-5">Create Student</h1>


<form class="create-form" method="post" action="{{route('student.store')}}">
    @csrf
    <input type="text" class="form-control w-75 d-inline"  placeholder="Student Name" name="student_name">
    <input type="text" class="form-control w-75 d-inline"  placeholder="Level" name="level">

@foreach($department as $item)
    <input  type="number" class="form-control w-75 visually-hidden"  value="{{$item->id}}" name="department_id">
    @endforeach

    <button type="submit" class="btn btn-primary d-inline">Save</button>


</form>


@endsection
