@extends('layouts.app')

@section('content')

<h1 class="text-center">Chỉnh Sửa Thông Tin Học Sinh</h1>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">

<form class="form-group" action="{{ route('updateStudent', $Student->id) }}" method="post">
    @csrf
    <div>
        <label for="name">Tên Học Sinh: </label>
        <input class="form-control" value="{{ $Student->name_student }}" type="text" name="name">
    </div>
    <div>
        <label for="name">Địa Chỉ: </label>
        <input class="form-control" value="{{ $Student->address }}" type="text" name="address">
    </div>
    <div>
        <label for="exampleFormControlSelect1">Chọn Lớp Học</label>
        <select name="idclass" class="form-control" id="exampleFormControlSelect1">

            <option  value="{{ $ClassName->id }}">{{$ClassName->name_class}}</option>

        </select>
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
    <p>Bạn chắc chắn muốn chỉnh sửa thông tin?</p>
    <button class="btn btn-primary" type="submit">Sửa Đổi</button>
</form>

</div>
</div>

@endsection();