<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Admin RzkaShop</title>
  </head>
  <body>
   
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
   

  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active mt-5">
          <img src="{{url('public')}}/img/admintas4.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
        </div>
        <div class="carousel-item mt-5">
          <img src="{{url('public')}}/img/admintas2.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
        </div>
        <div class="carousel-item mt-5">
          <img src="{{url('public')}}/img/admintas3.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    </div>

<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8"/>
  <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Disini Jual Berbagai Tas</title>
  <link rel="stylesheet" href="{{url('public')}}/css/home.css">
  <link href="{{url('public')}}/img/3.jpg" rel="shortcut icon"/>
  <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
  <section class="main">
    <div class="logo">
      <img src="{{url('public')}}/img/3.jpg" style="width: 20px;height: 20px;">
      <a href="{{url('index')}}"><font>TA</font>S</a>
    </div>
    <div class="side-box">
      <div class="search">
        <i class="fas fa-search"></i>
        <input placeholder="Cari..." type="text"/>
      </div>  
    </div>
      <div class="m-img">
        <img alt="" src="{{url('public')}}/img/admintas.jpg" style="width: 70%;height: 250px;" />    
      </div>
    <div class="m-text">
      <h1>PEN<font>JU</font>AL</h1>
      <h2>TA<font>S</font></h2>
      <a class="m-btn" href="#">Lihat Detail</a>
    </div>
    <div class="social">
      <a href="{{ url('login') }}"><i class="fas fa-user"></i></a>
      <a href="{{url('register')}}"><i class="fas fa-user-plus"></i></a>
    </div>
  </section>

  <hr>
<p class="text-center"><b>NEW PRODUK</b></p>
<div class="container">
<div class="row">
  <div class="col-3">
    <div class="card" style="width: 18rem;">
      <img src="{{url('public')}}/img/1.jpg" class="card-img-top" alt="..." width="400px" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tas Wanita</h5>
        <p class="card-text">Tas tali samping yang lucu.</p>
        <a href="#" class="btn btn-primary">Rp.1.359.000</a>
      </div>
    </div>
    </div>

    <div class="col-3">
      <div class="card" style="width: 18rem;">
            <img src="{{url('public')}}/img/2.jpg" class="card-img-top" alt="..." width="400px" height="400px">
            <div class="card-body">
              <h5 class="card-title">Tas Wanita</h5>
              <p class="card-text">Tas berwarna biru warna nya lucu dan enggak mencolok.</p>
              <a href="#" class="btn btn-primary">Rp.2.789.000</a>
            </div>
          </div>
          </div>

          <div class="col-3">      <div class="card" style="width: 18rem;">
            <img src="{{url('public')}}/img/5.jpg" class="card-img-top" alt="..." width="400px" height="400px">
            <div class="card-body">
              <h5 class="card-title">Tas Wanita</h5>
              <p class="card-text">Army yang lucu.</p>
              <a href="#" class="btn btn-primary">Rp.5.879.000</a>
            </div>
          </div>
          </div>
          </div>
          </div>
 

     <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="{{url('public')}}/img/6.jpg" class="card-img-top" alt="..." width="400px" height="400px">
                <div class="card-body">
                  <h5 class="card-title">Tas Wanita Gucci</h5>
                  <p class="card-text">Tas Gucci yang super kiyut warna pinky.</p>
                  <a href="#" class="btn btn-primary">Rp.10.359.000</a>
                </div>
              </div>
              </div>

              <div class="col-3">
                <div class="card" style="width: 18rem;">
                      <img src="{{url('public')}}/img/7.jpg" class="card-img-top" alt="..." width="400px" height="400px">
                      <div class="card-body">
                        <h5 class="card-title">Tas Branded</h5>
                        <p class="card-text">Perkenalkan desain yang menyenangkan ke dalam penampilan sehari-hari dengan tas jaring putih ini. Berkat desain gesper kuning pastel, tas ini cocok dengan gaun satin krem ​​dan blazer.</p>
                        <a href="#" class="btn btn-primary">Rp.15.789.000</a>
                      </div>
                    </div>
                    </div>

                    <div class="col-3">     
                     <div class="card" style="width: 18rem;">
                      <img src="{{url('public')}}/img/9.jpg" class="card-img-top" alt="..." width="400px" height="400px">
                      <div class="card-body">
                        <h5 class="card-title">Tas Guess</h5>
                        <p class="card-text">Tas Guess ini memberikan sentuhan kontemporer pada tampilan sehari-hari Anda. Ini memiliki tampilan kasual yang tidak akan bisa Anda tolak. Tali bahunya yang praktis menjadikannya aksesori yang nyaman dan bergaya.</p>
                        <a href="#" class="btn btn-primary">Rp.20.879.000</a>
                      </div>
                    </div>
                    </div>
                    </div>
                    </div>



        <section class="our-brand">
        <div class="brand-text">
          <h3>BANDUNG</h3>
          <h4>Dari Pembuat Tas<font>Terbaik</font> </h4>
          <p align="justify">Selain terkenal dengan berbagai produk pakaian dan sepatunya, Bandung ternyata juga dikenal
          dengan berbagai produk tasnya yang terbaik dan berkualitas. Di Kota Kembang ini, banyak produsen tas yang mampu 
          menghasilkan berbagai jenis tas berkualitas, hingga banyak masyarakat yang menjadi resseller dari berbagai produsen tas di Bandung. Tak hanya itu, tidak sedikit pula produsen tas di Bandung yang mengekspor produk tasnya hingga berbagai negara lain. Hal ini menunjukkan bahwa produk tas di Bandung memang terbaik, hingga dilirik oleh negara negara lain.</p>
        </div>
        <div class="brand-img"><img src="{{url('public')}}/img/brand3.jpg" /></div>
        </section>

        <section class="subcribe-container">
          <h3>Berlangganan Tas?</h3>
          <div class="subcribe-input">
            <input placeholder="Contoh@gmail.com" type="email" />
            <a class="subcribe-btn" href="#">Kirim</a>
          </div>
        </section>
        <footer>
          <h3>Kategori</h3>
          <ul class="footer-menu">
            @foreach($list_kategori as $kategori)
              <li><a href="#">{{$kategori->nama}}</a></li>
            @endforeach
          </ul>
        </footer>
      <a class="copyright" href="#">&#169; Copyright 2020. Shop by Kopi Bang</a>
      </body>
      </html>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>