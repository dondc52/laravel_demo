

@extends('layouts.app')

@section('content')

<h1 class="text-center">Thông Tin Student</h1>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">

<form class="form-group" >
    @csrf
    <div>
        <label for="name">Tên Học Sinh: {{ $Student['name_student'] }}</label>
    </div>
    <div>
        <label for="name">Địa Chỉ: {{ $Student['address'] }}</label>
    </div>
    <div class="form-group">
        @if ($ClassName['name_class'])
        <label for="exampleFormControlSelect1">Lớp Học: {{ $ClassName['name_class'] }}</label>
        @endif
    </div>
</form>
<a href="http://localhost:8080/student"><h5>Quay lại</h5></a>

</div>
</div>
@endsection