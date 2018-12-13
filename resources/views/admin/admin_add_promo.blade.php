@extends('layouts.master')

@section('active-sidebar')
<li><a href="{{route('admin.booking')}}"><i class="fa fa-link"></i> <span>Booking</span></a></li>
<li class="active"><a href="{{route('admin.promo')}}"><i class="fa fa-link"></i> <span>Kode Promo</span></a></li>
<li><a href="{{route('admin.menu')}}"><i class="fa fa-link"></i> <span>Menu makanan</span></a></li>
<li><a href="{{route('admin.order')}}"><i class="fa fa-link"></i> <span>Order online</span></a></li>
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
        Tambah promo
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
                            <form method="POST" action="{{route('admin.promo.store')}}">
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
                                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Kode') }}</label>

                                    <div class="col-md-6">
                                        <input name="code" id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" required>

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="percentage" class="col-md-4 col-form-label text-md-right">{{ __('Persen diskon') }}</label>

                                    <div class="col-md-6">
                                        <input name="percentage" id="percentage" type="number" step="0.05" class="form-control{{ $errors->has('percentage') ? ' is-invalid' : '' }}" name="percentage" value="{{ old('percentage') }}" required>

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="valid_from" class="col-md-4 col-form-label text-md-right">{{ __('Valid dari') }}</label>

                                    <div class="col-md-6">
                                        <input name="valid_from" id="valid_from" type="date" class="form-control{{ $errors->has('valid_from') ? ' is-invalid' : '' }}" name="valid_from" value="{{ old('valid_from') }}" required>

                                        <!-- @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="valid_until" class="col-md-4 col-form-label text-md-right">{{ __('Valid sampai') }}</label>

                                    <div class="col-md-6">
                                        <input name="valid_until" id="valid_until" type="date" class="form-control{{ $errors->has('valid_until') ? ' is-invalid' : '' }}" name="valid_until" value="{{ old('valid_until') }}" required>

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
                                            {{ __('Buat Promo') }}
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
