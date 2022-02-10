<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Happy Book Store</title>
</head>
<body class="vh-100">
    <nav>
        <div class="bg-primary">
            <div class="container d-flex align-items-center justify-content-center">
                <p class="navbar-brand"><h1 class="display-2 text-white my-5">HAPPY BOOK STORE</h1></p>
            </div>
        </div>
        <ul class="list-unstyled d-flex p-2 text-primary justify-content-center align-items-center">
            <li><a href="/" class="text-decoration-none m-3">Home</a></li>
            <li>
                <div class="dropdown text-decoration-none mx-4">
                    <div class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            @foreach ($categories as $category)
                            <a href="/categories/{{$category->id}}" class="dropdown-item">{{$category->category}}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="/contact" class="text-decoration-none m-4">Contact</a></li>
        </ul>
    </nav>

    <div class="container mb-3">
        @yield('content')
    </div>
    
    <footer class="footer bg-primary text-light text-center sticky-bottom py-2">
        © Happy Book Store 2021 - Vincent Low
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>