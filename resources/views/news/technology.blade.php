@extends('template.app')
@section('content')

<h3>ข่าว {{$name}}</h3>
<div class="card-columns">
    @foreach ($news as $item)
        
    
        <div class="card">
          <img class="card-img-top" src="{{$item['urlToImage']}}" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">{{$item['title']}}</h5>
            <p class="card-text">{{$item['description']}}</p>
          </div>
        </div>
@endforeach
</div>
@endsection