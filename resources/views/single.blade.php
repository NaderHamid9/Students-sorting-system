@extends('layout')

@section('content')
    @foreach($department as $item)
    <a style="text-decoration: none; color: black"  href="{{route('dep.index')}}"><h1 class="mt-5">{{$item->department_name}}</h1></a>
    @endforeach

    <table class="table table-striped text-center students-table">
        @if( session('msg') )
            <div class="alert alert-success mt-3 alert-dismissible fade show message" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <th>#</th>
        <th >Student Name</th>
            <th >Level</th>
        <th >
            @foreach($department as $item)
            <a href="{{route('student.create' , $item->id)}}">
                <svg class="add-btn" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#299792" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
            </a>
            @endforeach
        </th>
        @foreach($student as $item)

            <tr>

                <td>{{$item->id}}</td>
                <td>{{$item->student_name}}</td>
                <td>{{$item->level}}</td>
                <td><a href="{{route('student.edit' , $item->id)}}" class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#g8g8g8" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a></td>
                <td> <a href="{{route('student.delete' , $item->id)}}" class="delete-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#C60000FF" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                        </svg>
                    </a></td>


            </tr>
        @endforeach
    </table>
@endsection
