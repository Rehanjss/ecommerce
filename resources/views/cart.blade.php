                                                        
                                                                                                                        
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Je Lusso - Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
  .nav-link{
    text-align: center;
    padding: 15px;
  }
  .offcanvas-header{
    background: #8a857b;
  }
  .dropdown-menu{
    background: #8a857b;
  }
  .dropdown-item{
    color: #ffffff;
    text-align: center;
  }
  .card{
    max-width: 753px;;
    margin: auto;
    margin-top: 18vh;
  }
  .card-title{
    margin-top: 5vh;
    font-size: 40px;
    text-align: left;
  }
  .card-harga{
    text-align: left;
    margin-top: 1vh;
    font-size: 2.5vh;
  }
  .card-text{
    margin-top: -1.5vh;
    text-align: left;
    font-size: 1.7vh;
  }
  .card-SKU{
    font-size: 1.7vh;
    text-align: left;
  }
  .card-cicil{
    margin-top: -1.5vh;
    font-size: 1.7vh;
    text-align: left;
  }
  .btn{
    background: #ffffff;
    color: #000000;
    margin-top: 3vh;
  }
  .btn-group{
    width: 20vh;
  }
  .card-jumlah{
    margin-top: 2vh;
  }
  .card-penerima{
    text-align: left;
    margin-top: 5vh;
    font-weight: 400;
  }
  .card-alamat{
    text-align: left;
    margin-top: 2vh;
    font-weight: 400;
  }
  .card-petunjuk{
    text-align: left;
    margin-top: 2vh;
    font-weight: 400;
  }
</style>    
  </head>
  <body>
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
                  <a class="nav-link" aria-current="page" href="/">Home</a>
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
                                    <a class="dropdown-item" href="{{ route('store') }}">
                                        {{ __('Store') }}
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

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Iphone
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Iphone 15 Pro</a></li>
                    <li>
                        <hr class="dropdown-divider">
                      </li>
                    <li><a class="dropdown-item" href="#">Iphone 14 Pro</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Iphone 13</a></li>
                    <li>
                        <hr class="dropdown-divider">
                      </li>
                    <li><a class="dropdown-item" href="#">Iphone 11 Pro Max</a></li>
                    <li>
                        <hr class="dropdown-divider">
                      </li>
                    <li><a class="dropdown-item" href="#">Iphone 15 Pro</a></li>
                  </ul>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Samsung
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Samsung S24 Ultra</a></li>
                    <li>
                        <hr class="dropdown-divider">
                      </li>
                    <li><a class="dropdown-item" href="#">Samsung Galaxy Z Flip 3</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Samsung Galaxy S24 FE</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Samsung Galaxy S25 Ultra</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Samsung Galaxy S25 Plus</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Samsung Galaxy Z Fold 6</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>    
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="my-2">
                            <a href="{{route('store')}}" class="btn-link">
                                Store
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th style="text-align: right;">Price</th>
                                    <th style="text-align: right;">Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                        <img src="{{$item->associatedModel->image_url}}" 
                                                class="fluid rounded"
                                                width="60"
                                                height="60"    
                                                alt="{{$item->name}}"/>
                                        </td>
                                        <td>
                                            {{$item->name}}
                                        </td>
                                        <td>
                                            <a href="{{route('quantity.inc', $item->id)}}" class="text-decoration-none text-dark">
                                                <i class="bi bi-caret-up" style="cursor: pointer"></i>
                                            </a>
                                            <span class="mx-2">
                                                {{$item->quantity}}
                                            </span>
                                            <a href="{{route('quantity.dec', $item->id)}}" class="text-decoration-none text-dark">
                                                <i class="bi bi-caret-down" style="cursor: pointer"></i>
                                            </a>
                                        </td>
                                        <td style="text-align: right;">
                                            Rp {{number_format($item->price, 0, ',', '.')}}
                                        </td>
                                        <td style="text-align: right;">
                                            Rp {{number_format($item->quantity * $item->price, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            <a href="{{route('remove.cart', $item->id)}}" class="text-decoration-none text-dark">
                                                <i class="bi bi-cart-x text-danger" style="cursor: pointer"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colSpan="3" class="text-left">
                                        Total
                                    </th>
                                    <td colSpan="3"  style="text-align: right;">
                                        <strong>Rp {{number_format(\Cart::getTotal(), 0, ',', '.')}}</strong>
                                    </td>
                                </tr>
                                @if(!Cart::isEmpty())
                                <tr>
                                    <td colspan="5" class="">
                                        <a href="/pay/{{\Cart::getTotal()}}" class="btn btn-primary">Checkout and Pay</a>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

                                                        
                                                    