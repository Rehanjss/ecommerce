<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je Lusso - Keranjang</title>
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
    height: 30.8vh;
    margin-top: 16vh;
  }
  .card2{
    max-width: 753px;;
    margin: auto;
    height: 30.8vh;
    margin-top: 16vh;
  }
  .card-title{
    margin-top: 1.8vh;
    font-size: 25px;
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
  .list-group{
    height: 9.33vh;
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
              <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 align-items-center">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="keranjang">Keranjang</a>
                </li>
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
                    <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2 btn-dark" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
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
    <div class="card mb-2" style="width: 80rem;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/Iphone 15 Pro Max .jpeg" class="img-fluid rounded-start" alt="..."> 
    </div>
    <div class="col-md-8">
      <div class="card-body d-flex align-items-start flex-column">
        <h5 class="card-title">iPhone 15 Pro Max Natural Titanium</h5>
        <p class="card-harga">Rp 33.999.000</p>
        </select>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-dark minus">-</button>
        <button type="button" class="btn btn-dark num">1</button>
        <button type="button" class="btn btn-dark plus">+</button>
        </div>
        <a href="#" class="btn btn-dark" style="margin-top: 4vh; width: 16rem;">Checkout</a>
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

   const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Berhasil menambahkan ke keranjang, cek keranjang sekarang!', 'success')
  })
}
</script>
</body>
</html>