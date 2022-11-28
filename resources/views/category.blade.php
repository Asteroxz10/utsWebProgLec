@extends('Component.navbar')

@section('body')
<div class="container">
    <h2 class="bg-secondary text-white p-4">{{$book_list->name}}</h2>
    @foreach ($getbook as $get)
    <div class="row row-cols-3 gap-5">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                <img src="{{ url('/images')}}/{{$get->image}}"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title">{{$get->title}}</h5>
                <h5>By</h5>
                <p class="card-text">{{$get->author}}</p>
                <hr>
                <button class="btn btn-primary"><a href="/book/{{$get->id}}" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy Book Store 2022</h2>
</footer>
    
@endsection