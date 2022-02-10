@extends('layout.layout')

@section('content')

<div class="d-flex">
    <div class="row d-flex justify-content-center align-items-center me-5 flex-grow-1">
        <h1 class="bg-warning px-3 display-6">Book List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
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
        </table>
        <div class="d-flex flex-row-reverse">
            {{ $books->withQueryString()->links()}}
        </div>
    </div>

    <div>
        <h1 class="ps-3 pe-5 bg-warning display-6">Category</h1>
        <ul class="list-unstyled">
            @foreach ($categories as $category)
            <li class="ms-2 p-1"><a href="/categories/{{$category->id}}" class="text-decoration-none">{{$category->category}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection