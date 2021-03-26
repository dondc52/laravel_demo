@extends('layouts.app')

@section('content')

<h1 class="text-center">Danh Sách Các Lớp Học</h1>
<div class="createh"><a href="{{ route('lophoc.create')}}"><h2 class="text-center">Create</h2></a></div>

<div class="row">
    
    <div class="col-md-6 offset-md-3 border border-dark">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name Class</th>
                    <th>Thông Tin</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ClassNames as $ClassName)
                <tr>
                    <td>{{ $ClassName->name_class }}</td>
                    <td><a href="{{ route('lophoc.show', $ClassName->id) }}">Show</a></td>
                    <td><a href="{{ route('lophoc.edit', $ClassName->id) }}">Edit</a></td>
                    <td><a href="deleteClass/{{ $ClassName->id }}">Delete</a></td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
</div>
@endsection