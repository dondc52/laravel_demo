

@extends('layouts.app')

@section('content')

<h1 class="text-center">Danh Sách Student</h1>
<div class="createh"><a href="{{ route('student.create')}}"><h2 class="text-center">Create</h2></a></div>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name Student</th>
                    <th>Thông Tin</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($Students as $Student)
                <tr>
                    <td>{{$Student->name_student}}</td>
                    <td><a href="{{ route('student.show', $Student->id) }}">Show</a></td>
                    <td><a href="{{ route('student.edit', $Student->id) }}">Edit</a></td>
                    <td><a href="deleteStudent/{{ $Student->id }}">Delete</a></td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
</div>
@endsection