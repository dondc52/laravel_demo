@extends('layouts.app')

@section('content')

<h1 class="text-center">Thêm Lớp Học</h1>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">

<form class="form-group" action="{{ route('lophoc.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Tên Lớp Học: </label>
        <input class="form-control" type="text" name="name">
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
    <p>Bạn chắc chắn muốn thêm lớp?</p>
    <button class="btn btn-primary" type="submit">Thêm Lớp</button>
</form>
<a href="http://localhost:8080/lophoc"><h5>Quay lại</h5></a>

</div>
</div>

@endsection();