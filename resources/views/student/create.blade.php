 @extends('layouts.app')

@section('content')

<h1 class="text-center">Thêm Học Sinh</h1>

<div class="row">
    <div class="col-md-6 offset-md-3 border border-dark">
        <form class="form-group" action="{{ route('student.store') }}" method="post">
            @csrf
            @if ($errors->any())
            <ul style="list-style-type: none;" class="mt-2 pl-0">
                @foreach ($errors->all() as $error)
                    <li><span class="text-danger">{{ $error }}</span></li>
                @endforeach
            </ul>
            @endif
            <div>
                <label for="name">Tên Học Sinh: </label>
                <input class="form-control" type="text" name="name">
            </div>

            <div>
                <label for="name">Địa Chỉ: </label>
                <input class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn Lớp Học</label>
                <select name="idclass" class="form-control" id="exampleFormControlSelect1">

                @foreach($ClassNames as $ClassName)
                    <option  value="{{ $ClassName->id }}">{{$ClassName->name_class}}</option>
                @endforeach()

                </select>
            </div>

            <p>Bạn chắc chắn muốn thêm học sinh?</p>
            <button class="btn btn-primary" type="submit">Thêm HS</button>
            
        </form>
        <a href="http://localhost:8080/student"><h5>Quay lại</h5></a>
    </div>
</div>

@endsection();

