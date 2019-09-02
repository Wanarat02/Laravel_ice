@extends('template.app')
@section('content')
<h3>
        หัวข้อ {{ $name }}
     </h3>
     <a href="{{url('/news/show')}}">กลับหน้าข่าว</a>
@endsection



