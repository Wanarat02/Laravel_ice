@extends('template.app')
@section('content')
<h3>หัวข้อข่าว{!! $cat !!} </h3>
<ul>
   @if(count($lists)>0)
       @foreach($lists as $item)
       <li><a href="{{url('news/'.$item)}}">{{ $item }}
       </a></li>
       @endforeach
   @else
       <li>ขออภัย ไม่มีข้อมูลค่ะ</li>
   @endif
</ul>
@endsection

