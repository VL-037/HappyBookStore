@extends('layout.layout')

@section('content')
<div class="d-flex">
    <div class="flex-grow-1 me-5">
        <h1 class="bg-warning display-6 px-3">Contact</h1>
        <div>
            <h3>Store Address:</h3>
            <p>Jalan Pembangunan Baru Raya,<br>
                Kompleks Pertokoan Emerald Blok Il/12<br>
                Bintaro, Tangerang Selatan<br>
                Indonesia</p>
        </div>
        <div>
            <h3>Open Daily</h3>
            <p>08.00 - 20.00</p>
        </div>
        <div>
            <h3>Contact</h3>
            <p>Phone : 021-08899776655 <br>
                Email : happybookstore@happy.com</p>
        </div>
    </div>
    <div>
        <h1 class="bg-warning display-6 ps-3 pe-5">Category</h1>
        <ul class="list-unstyled">
            @foreach ($categories as $category)
            <li class="ms-2 p-1"><a href="/categories/{{$category->id}}" class="text-decoration-none">{{$category->category}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection