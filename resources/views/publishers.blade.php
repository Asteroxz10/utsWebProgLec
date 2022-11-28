@extends('Component.navbar')

@section('body')
<div class="container bg-secondary text-white p-3">
<h2>{{$publisher_data->name}}</h2>
<h2>{{$publisher_data->address}}</h2>
<h2>{{$publisher_data->phone}}</h2>
<h2>{{$publisher_data->email}}</h2>
</div>
<div class="container-sm d-flex flex-row flex-wrap gap-4 mt-4 mb-4 ">
    @foreach ($publisher_data->show as $show)
     <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                
                <img src="{{ url('/images')}}/{{$show->image}}"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title">{{$show->title}}</h5>
                <h5>By</h5>
                <p class="card-text">{{$show->author}}</p>
                <hr>
                <button class="btn btn-primary"><a href="/book/{{$show->id}}" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    @endforeach
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy Book Store 2022</h2>
</footer>
    
@endsection