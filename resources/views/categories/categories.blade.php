@extends('layout.layout')

@section('content')
<div class="d-flex">
    <div id="bookList" class="flex-grow-1 me-5">
        <h1 class="bg-warning display-6 px-3">{{$currCategory->category}}</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            @if (!$books->isEmpty())
            <tbody>
                @for ($i=0 ; $i<count($books) ; $i++)
                <tr>
                    <td scope="row">{{$books[$i]->id}}</td>
                    <td>
                        <a href="/books/{{$books[$i]->id}}" title="{{$books[$i]->title}}" class="text-decoration-none text-black" >{{$books[$i]->title}}</a>
                    </td>
                    <td>{{$books[$i]->detail->author}}</td>
                </tr>
                @endfor
            </tbody>
            @else
                <tr>
                    <td class="bg-warning">No data</td>
                    <td class="bg-warning">No data</td>
                    <td class="bg-warning">No data</td>
                </tr>
            @endif
        </table>
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