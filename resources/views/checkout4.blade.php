<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 15 Pro</title>
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
    height: 74vh;
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
  .form-select{
    width: 29vh;
    margin-top: 1.5vh;
  }
  .card-warna{
    text-align: left;
    margin-top: 1.5vh;
  }
  .card-kapasitas{
    margin-top: 3.5vh;
    text-align: left;
  }
  .btn{
    background: #ffffff;
    color: #000000;
    margin-top: 1.5vh;
  }
  .btn-group{
    width: 20vh;
  }
  .card-jumlah{
    margin-top: 4vh;
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
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card mb-3" style="width: 80rem;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/Iphone 15 Pro Max .jpeg" class="img-fluid rounded-start" alt="..."> 
    </div>
    <div class="col-md-8">
      <div class="card-body d-flex align-items-start flex-column">
        <h5 class="card-title">iPhone 15 Pro Max</h5>
        <p class="card-SKU"><small class="text-body-secondary">SKU: IP-15PM-JL-CON</small></p>
        <p class="card-harga">Rp 33.999.000</p>
        <div class="card-warna">Warna - Black Titanium</div>
        <select class="form-select" aria-label="Default select example">
        <option selected>Black Titanium</option>
        </select>
        <div class="card-kapasitas">Kapasitas</div>
        <select class="form-select" aria-label="Default select example">
        <option selected>128 GB</option>
        </select>
        <div class="card-jumlah">Jumlah</div>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-dark minus">-</button>
        <button type="button" class="btn btn-dark num">1</button>
        <button type="button" class="btn btn-dark plus">+</button>
        </div>
        <a href="#" class="btn btn-dark" style="margin-top: 4vh; width: 16rem;">Tambah Keranjang</a>
      </div>
      <div class="card-penerima">
    Nama penerima : James
  </div>
  <div class="card-alamat">
    Alamat pengiriman :   Jakarta Selatan, Alam Sutra
  </div>
  <div class="card-petunjuk">
    Petunjuk pembayaran, Transfer ke BRI No Rekening <br> 232938293 atas nama Raihan
  </div>
  </div>
</div>
</div>
    </div>
  </div>
</div>
</div>
</div>

<script>

  const plus = document.querySelector(".plus"),
   minus = document.querySelector(".minus"),
   num = document.querySelector(".num");

   let a = 1;

   plus.addEventListener("click", ()=>{
    if (a >= 10) return
    a++;
    num.innerText = a;
    console.log(a);

   });

   minus.addEventListener("click", ()=> {
    if (a <= 1) return
    a--;
    num.innerText = a;
   });

</script>
</body>
</html>