<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/pic/AGP.png" type="image/png"/>

    <title>Booking | Ayam Geprek Pejuang</title>

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
                  <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/booking">Booking</a>
                  </li>
                </ul>
                <div class="kanan-spacing">
                    <ul class="navbar-nav">
                    <li class="nav-item active" style="padding-left: 10px; padding-right: 30px;">
                        <a class="nav-link" href="#">(logo) Find AGP Location</a>
                    </li>
                    <li class="nav-item active" style="padding-left: 10px; padding-right: 30px;">
                        <a class="nav-link" href="{{route('login')}}">Masuk</a>
                    </li>            
                    </ul>
                </div>
              </div>
            </div>
          </nav>
        
        <div class="container">
          <div style="margin-top: 10%; height: 30px;" class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step 2 of 3</div>
          </div>
          <br>
          <h1 style="text-align: center">Booking tempat</h1>
          <br>

          <div class="d-flex justify-content-center align-items-center container">
            <div class="row">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Atas nama</label>
                <input type="email" class="form-control" placeholder="Masukkan nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal reservasi</label>
                <input type="date" class="form-control" placeholder="Masukkan nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pukul</label>
                <input type="email" class="form-control" placeholder="Antara 00.00-24.00">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah orang</label>
                <input type="email" class="form-control" placeholder="Masukkan banyak orang">
              </div>
              <button type="submit" class="btn btn-success d-flex justify-content-center align-items-center">Next</button>
            </form>
            </div>

        </div>
        </div>
        

    <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>