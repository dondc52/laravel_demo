@extends('layouts.app')

@section('content')

<h1 class="text-center">Chỉnh sửa Lớp Học</h1>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">

<form class="form-group" action="{{ route('updateClass', $ClassName->id) }}" method="post">
    @csrf
    <div>
        <label for="name">Tên Lớp Học: </label>
        <input class="form-control" value="{{ $ClassName->name_class }}" type="text" name="name">
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <p>Bạn chắc chắn muốn chỉnh sửa lớp?</p>
    <button class="btn btn-primary" type="submit">Sửa Đổi</button>
</form>

</div>
</div>

@endsection();