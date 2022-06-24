@extends('layout')

@section('content')

    <h1 class="mt-5">Create Department</h1>

    <form class="create-form" method="post" action="{{route('dep.store')}}">
        @csrf
        <input type="text" class="form-control w-75 d-inline"  placeholder="Department Name" name="department_name">
        <button type="submit" class="btn btn-primary d-inline">Save</button>


    </form>

@endsection
