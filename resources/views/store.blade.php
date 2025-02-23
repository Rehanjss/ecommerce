<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je Lusso - Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
    }
    .navbar{
        background: #8a857b;
    }
    .navbar-toggler{
        height: 50px;
    }
    .offcanvas-header{
        background: #8a857b;
    }
    .offcanvas-body{
        background:rgb(255, 255, 255);
    }
    .nav-link{
        text-align: center;
        padding: 18px;
        color:#000000;
    }
    .dropdown-menu{
        background: #8a857b;
    }
    .dropdown-item{
        color: #ffffff;
        text-align: center;
    }
    .topic-2{
        margin-top: 130px;
        font-weight: bold;
        font-size: 38px;
        text-align: center;
    }
    .topic-3{
        margin-top: 8px;
        font-weight: bold;
        font-size: 18px;
        text-align: center;
    }
    .topic-4{
        margin-top: 130px;
        font-weight: bold;
        font-size: 38px;
        text-align: center;
    }
    .card{
        margin-top: 90px;

    }
    .rounded{
        margin-top: 150px;
    }
    .card-title{
        margin-top: 50px;
        font-size: 30px;
    }
    .card-title2{
        margin-top: -50px;
        font-size: 30px;
    }
    .card-text{
        font-weight: 100;
        padding: 20px;
    }
    .btn{
        padding: 20px;
        width: 350px;
    }
    .call-number{
        margin-top: 50px
    }
    .logo{
        padding-left: 7vh;
        margin-top: 8vh;
    }
    .d-flex{
      margin-top: 3vh;
    }
    .fa-cart-shopping{
      margin-left: 18.5vh;
      width: 7vh;
      margin-top: 2vh;
    }
    p{
        margin-top: 7vh;
    }
</style>
<body>
    <img src="images/Apple Iphone 15 Pro Max.jpg" class="img-fluid" alt="...">
    <nav class="navbar fixed-top">
        <div class="container-fluid">
          <img src="images/JE LUSSO (1) copy 2.png" alt="" width="120">
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <img src="images/JE LUSSO (1) copy 2.png" alt="" width="120">
              <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 align-items-center">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('cart.index') }}">
                                        {{ __('Cart') }}
                                    </a>                      
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest                
                <!-- 
                        
                        
                        
                
                -->
              </ul>
            </div>
          </div>
        </div>
      </nav>

  </div>
      <div class="container text-center">
        
        <form class="d-flex" action="{{ route('products.search') }}" method="GET">
            <input class="form-control me-3" type="text" value="{{ $searchTitle }}" name="title" placeholder="Search Products">
            <button class="btn me-1 btn-outline-success" type="submit">Search</button>
        </form>              
        <p>Found {{ $searchTotalFound }} product(s)</p>
        <div class="row">
        @foreach($products as $product)
            <div class="col">
              <div class="card" style="width: 25rem;">
                  <img src="{{$product->image_url }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->title }} </h5>
                    <p class="card-text">{{ $product->device_os_description }} </p>
                    <p class="card-price">Rp {{ number_format($product->price, 0, ',', '.') }} </p>
                    <a href="{{route('add.cart', $product)}}" class="btn btn-dark">Add to cart</a>
                  </div>
                </div>
            </div>          
          @endforeach          
</body>
</html>