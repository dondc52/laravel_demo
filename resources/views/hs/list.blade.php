@extends('layouts.app')

@section('content')

<h1>danh sách bài viết</h1>


@foreach($chs as $hs)
<div>
    {{$hs->name}}
</div>
@endforeach()

<div>
    {{ $chs->links() }}
</div>

@endsection