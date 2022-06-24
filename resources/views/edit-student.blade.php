@extends('layout')

@section('content')

    <h1 class="mt-5">Edit Department</h1>
    @foreach($student as $item)
        <form class="create-form" method="post" action="{{route('student.update',$item->id)}}">
            @csrf
            @method('put')
            <input type="text" class="form-control w-75 d-inline"  placeholder="Student Name" name="student_name" value="{{$item->student_name}}">
            <input type="text" class="form-control w-75 d-inline"  placeholder="Level" name="level" value="{{$item->level}}">

            <button type="submit" class="btn btn-primary d-inline">Save</button>


        </form>
    @endforeach
@endsection
