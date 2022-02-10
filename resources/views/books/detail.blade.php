@extends('layout.layout')

@section('content')
<div class="d-flex">
    <div id="bookList" class="flex-grow-1 me-5">
        <h1 class="bg-warning display-6 px-3">Book Detail</h1>
        <p>Title : {{$book->title}}</p>
        <p>Author : {{$book->detail->author}}</p>
        <p>Publisher : {{$book->detail->publisher}}</p>
        <p>Year : {{$book->detail->year}}</p>
        <p>Description :</p>
        <p>{{$book->detail->description}}</p>
    </div>
    <div id="category">
        <h1 class="bg-warning display-6 ps-3 pe-5">Category</h1>
        <ul class="list-unstyled">
            @foreach ($categories as $category)
            <li class="ms-2 p-1"><a href="/categories/{{$category->id}}" class="text-decoration-none">{{$category->category}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection