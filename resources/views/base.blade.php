<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E commerce</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('homepage') }}"
                    class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h6 class="h5">Shop India</h6>
                </a>


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-auto">
                    <li><a href="{{ route('homepage') }}" class="nav-link px-2 text-white"><i
                                class="bi bi-house-door"></i> Home</a></li>
                    {{-- <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li> --}}
                </ul>

                <div class="col-3 mx-auto">
                    <form class="mb-3 mb-lg-0 input-group" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark"
                            placeholder="Search..." aria-label="Search">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-search"></i></button>
                    </form>
                </div>

                @guest
                    <ul class="nav mb-2 mb-md-0">
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Sign-up</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-white"><i class="bi bi-cart"></i>
                                Cart</a></li>
                    </ul>
                @endguest
                @auth
                    <form action={{ route('logout') }} method="POST">
                        @csrf
                        <input type="submit" class="btn btn-sm btn-danger" value="Logout">
                    </form>
                @endauth
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-0">
        <div class="container mx-auto">
            <div class="row">
                <div class="col mx-auto">
                    <ul class="navbar-nav gap-5">
                        @foreach ($categories as $item)
                            <li class="nav-item"><a href="{{route('category',$item->id)}}" class="nav-link text-dark fw-bold"><i
                                        class="bi bi-phone"></i> {{ $item->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @section('content')
    @show

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
