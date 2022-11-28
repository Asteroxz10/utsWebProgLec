@extends('Component.navbar')
@section('document_title', 'home')

@section('body')
<div class="container bg-secondary text-white p-3 mb-2">
    <h1 >Book List</h1>
</div>

<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
    @foreach ($book_data as $book)
        <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
            <div class="card-body">
                <img src="{{ url('/images')}}/{{$book->image}}"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
                <h5 class="card-title">{{$book->title}}</h5>
                <h5>By</h5>
                <p class="card-text">{{$book->author}}</p>
                <hr>
                <button class="btn btn-primary"><a href="/book/{{$book->id}}" class="text-white " style="text-decoration: none"> Detail</a></button>
            </div>
        </div>
    @endforeach
    </div>
</div>
<footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy Book Store 2022</h2>
</footer>
@endsection
