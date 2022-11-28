@extends('Component.navbar')

@section('body')
 <div class="container">
    <div class="bg-secondary text-white p-3">
        <h2>Book detail</h2>
    </div>
    @foreach ($details as $detail)
    <img src="{{ url('/images')}}/{{$detail->image}}"  class="card-img-top mb-2" style="width: 50%; height:200px " alt="...">
    <p><b>Title     :</b> {{$detail->title}}</p>
    <p><b>Author    :</b> {{$detail->author}}</p>
    <p><b>Publisher :</b> {{$detail->name}}</p>
    <p><b>Year      :</b> {{$detail->year}}</p>
    <p><b>Synopsis  :</b></p>
    <p style="width: 50%">{{$detail->synopsis}}</p>
    @endforeach
 </div>
 <footer>
    <h2 class=" bg-primary  text-white text-center p-2" style="font-size: 15px">@Happy Book Store 2022</h2>
</footer>
@endsection

