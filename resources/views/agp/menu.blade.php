<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/pic/AGP.png" type="image/png"/>

    <title>Menu | Ayam Geprek Pejuang</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  </head>

  <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-red">
            <div class="container">
              <a class="navbar-brand" href="/">
                <img src="/pic/AGP.png" width="92" height="76" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Promo
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/menu">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/booking">Booking</a>
                  </li>
                </ul>
                <div class="kanan-spacing">
                    <ul class="navbar-nav">
                    <li class="nav-item active" style="padding-left: 10px; padding-right: 30px;">
                        <a class="nav-link" href="#">(logo) Find AGP Location</a>
                    </li>
                    <li class="nav-item active" style="padding-left: 10px; padding-right: 30px;">
                        <a class="nav-link" href="{{route("login")}}">Masuk</a>
                    </li>            
                    </ul>
                </div>
              </div>
            </div>
          </nav>

        <header>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('/pic/IMG_1665.jpg')">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Promo Merdeka</h3>
                        <p>Diskon 50% untuk Ayam Geprek Original.</p>
                      </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('/pic/IMG_1778.jpg')">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Promo PANAS</h3>
                        <p>Khusus buat kamu yang malam mingguan!</p>
                      </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('/pic/IMG_1555.jpg')">
                      <div class="carousel-caption d-none d-md-block">
                        <h3>Paket Padang</h3>
                        <p>Rasakan nikmat saos padang dengan harga diskon 30%</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </header>

    <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>