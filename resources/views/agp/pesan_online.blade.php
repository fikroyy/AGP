@extends('layouts.app')
@section('content')

@guest
<meta http-equiv="Refresh" content="0; URL={{route("login")}}">
@else
<br><br><br>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pesan Online') }}</div>

                <div class="card-body">
                    <form method="POST" action="/Pesan_onlineInsert">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input name="name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" required>

                                <!-- @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="menu" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                            <select name="menu" id="menu" class="form-control" required>
                            <option selected disabled value="0">Pilih makanan</option>
                            <option value="Ayam Bakar Original">Ayam Bakar Original</option>
                            <option value="Ayam Bakar Rica">Ayam Bakar Rica</option>
                            <option value="Ayam Geprek Bakar">Ayam Geprek Bakar</option>
                            <option value="Ayam Geprek Cabe Garam">Ayam Geprek Cabe Garam</option>
                            <option value="Ayam Geprek Lombok Ijo">Ayam Geprek Lombok Ijo</option>
                            <option value="Ayam Geprek Original">Ayam Geprek Original</option>
                            <option value="Ayam Geprek Rica-Rica">Ayam Geprek Rica-Rica</option>
                            <option value="Ayam Geprek Sambal Matah">Ayam Geprek Sambal Matah</option>
                            <option value="Ayam Lada Hitam">Ayam Lada Hitam</option>
                            </select>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pcs" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Barang') }}</label>

                            <div class="col-md-6">
                                <input name="pcs" id="pcs" type="int" class="form-control{{ $errors->has('pcs') ? ' is-invalid' : '' }}" name="pcs" value="{{ old('pcs') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                            <div class="col-md-6">
                            <select name="level" id="level" class="form-control" required>
                            <option selected disabled value="0">Pilih level</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                                

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="your_money" class="col-md-4 col-form-label text-md-right">{{ __('Uang Anda') }}</label>

                            <div class="col-md-6">
                                <input name="your_money" id="your_money" type="int" class="form-control{{ $errors->has('your_money') ? ' is-invalid' : '' }}" name="your_money" value="{{ old('your_money') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('No.Hp') }}</label>

                            <div class="col-md-6">
                                <input name="phone" id="phone" type="int" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="locate" class="col-md-4 col-form-label text-md-right">{{ __('Lokasi Pengiriman') }}</label>

                            <div class="col-md-6">
                                <input name="locate" id="locate" type="string" class="form-control{{ $errors->has('locate') ? ' is-invalid' : '' }}" name="locate" value="{{ old('locate') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('Waktu Pesanan') }}</label>

                            <div class="col-md-6">
                                <input name="time" id="time" type="time" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ old('time') }}" required>

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="voucher" class="col-md-4 col-form-label text-md-right">{{ __('Kode Voucher') }}</label>

                            <div class="col-md-6">
                                <input name="voucher" id="voucher" type="string" class="form-control{{ $errors->has('voucher') ? ' is-invalid' : '' }}" name="voucher" value="{{ old('voucher') }}">

                                <!-- @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('Catatan') }}</label>

                            <div class="col-md-6">
                                <input name="note" id="note" type="string" class="form-control{{ $errors->has('note') ? ' is-invalid' : '' }}" name="note" value="{{ old('note') }}" required>

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
                                    {{ __('Pesan') }}
                                </button>
                                
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  @endguest

@endsection