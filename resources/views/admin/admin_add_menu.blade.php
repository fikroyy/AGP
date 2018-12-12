@extends('layouts.master')

@section('active-sidebar')
<li><a href="{{route('admin.booking')}}"><i class="fa fa-link"></i> <span>Booking</span></a></li>
<li><a href="{{route('admin.promo')}}"><i class="fa fa-link"></i> <span>Kode Promo</span></a></li>
<li class="active"><a href="{{route('admin.menu')}}"><i class="fa fa-link"></i> <span>Menu makanan</span></a></li>
@endsection

@section('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-left: 20%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #ffffff;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah menu
        <br>
        <!--<small>Optional description</small>-->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('admin.menu.store')}}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                                    <div class="col-md-6">
                                        <input name="title" id="title" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="title" value="{{ old('title') }}" required>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                                    <div class="col-md-6">
                                        <input name="description" id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                                    <div class="col-md-6">
                                        <input name="price" id="price" type="number" step="0.05" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stok') }}</label>

                                    <div class="col-md-6">
                                        <input name="stock" id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" name="stock" value="{{ old('stock') }}" required>

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

                                    <div class="col-md-6">
                                        <input name="images" id="images" type="text" class="form-control{{ $errors->has('images') ? ' is-invalid' : '' }}" name="images" value="{{ old('images') }}">

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4"> 
                                        <button type="submit" class="btn btn-primary" value="Submit">
                                            {{ __('Buat Menu') }}
                                        </button>
                                        
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
