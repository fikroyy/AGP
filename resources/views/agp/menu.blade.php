<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/pic/AGP.png" type="image/png" />

    <title>Menu | Ayam Geprek Pejuang</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
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

  <br><br><br>
  <div class="container">
  <h1 class="card-title" style="text-align:center" >Our Menu<hr></h1><br>
  
        <div class="row">
        @foreach($menu as $item)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <p>{{$item->title}}<hr></p>
                      </h4>
                      <p class="card-text">{{$item->description}}</p>
                      <h5 class="card-text"><b>Rp.{{$item->price}}</b> </h5>
                    </div>
                  </div>
                </div>
      @endforeach
</div>
<!-- /.container -->
<br><br><br>
<!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; Ayam Geprek Pejuang 2018</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>