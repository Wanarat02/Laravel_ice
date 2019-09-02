@extends('layouts.app')
@section('content')
<div class="container">
        <div class="media">
                <div class="media-body"><h3>เพิ่มหมวดหมู่</h3></div>
                <div class="media-right">
                    <a href="{{url('/home/category/create')}}" class ="btn btn-success"><i class="fa fa-reply"></i>ย้อนกลับ</a>
                </div>
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
        <div class="row">
         {!! Form::open(['url' => '/home/category','method' => 'post', 'files'=>'true']) !!}
        <div class="col-md-12">
            {!!Form::label('name', 'ชื่อหมวดหมู่')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'ระบุชื่อหมวดหมู่']) !!}
        
        </div>
        <div class="col-md-12">
                {!!Form::label('detail', 'ชื่อหมวดหมู่')!!}
                {!!Form::textarea('detail',null,['class'=>'form-control']) !!}
                
         </div> 
         
         <div class="col-md-12">
                {!!Form::label('photo', 'เลือกภาพประจำหมวดหมู่')!!}
                {!!Form::file('photo',['class'=>'form-control']) !!}
                
         </div> 
         <div class="col-md-12 mt-4">
        {!!Form::submit('Submit',['class' =>'btn btn-success']);!!}
         <a href="{{url('/home/category')}}" class="btn btn-danger">ยกเลิก</a>
        </div>
        {!! Form::close() !!}
        </div>
        
</div>
@endsection