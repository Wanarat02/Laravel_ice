@extends('layouts.app')
@section('content')
<div class="container">
    <div class="media">
            <div class="media-body"><h3>หมวดหมู่</h3></div>
            <div class="media-right">
                <a href="{{url('/home/category/create')}}" class ="btn btn-success">เพิ่มหมวดหมู่</a>
            </div>
    </div>  
    @if (session('status')) 
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
    @endif
    <table class="table">
         <thead>
            <tr>
                <th width="100">ลำดับ</th>
                <th width="200">รูป</th>
                <th>ชื่อ</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
        @if(count($data)>0)
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{url('/uploads/'.$item->photo($item->photo_id))}}" width="150"></td>
            <td>
                <h4>{{$item->name}}</h4>
                <div>{{$item->detail}}</div>
            </td>
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $item->id], 'onsubmit'=>'if(!confirm("Want to delete?")){return false;}']) !!}
                        
                <a href="{{url('/home/category/'.$item ->id.'/edit')}}" class="btn btn-warning">Edit</a>
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close()!!}
                </td>
            </tr>
        @endforeach
        @else
            <tr>
                <td colspan="3">ขออภัยไม่มีข้อมูล</td>
            </tr>
        @endif
        </tbody>
    </table>
    <div class="mt-4">
        {{$data->render()}}  
    </div>
</div>
@endsection